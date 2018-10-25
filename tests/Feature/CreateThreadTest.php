<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class CreateThreadTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function guests_may_not_created_threads()
    {

        $this->withExceptionHandling();
        

        $this->get('/threads/create')
             ->assertRedirect('/login');

        $this->post('/threads')
             ->assertRedirect('/login');


        
    }
   
    /** @test */
    function an_authenticated_user_can_create_new_forum_thread()
    {

        $this->signIn();

        $thread = make('App\Models\Thread\Thread');

        $response = $this->post('/threads', $thread->toArray());

        $this->get($response->headers->get('Location'))
             ->assertSee($thread->title)
             ->assertSee($thread->body);
    }
    /** @test */
    function a_thread_require_a_title()
    {

        $this->publishThread(['title'=>null])
             ->assertSessionHasErrors('title');

       
       
    }
    /** @test */
    function guests_can_delete_threads()
    {
        $this->withExceptionHandling();

        $thread = create('App\Models\Thread\Thread');

        $response = $this->delete($thread->path());

        $response->assertRedirect('/login');


    }
    /** @test */
    function a_thread_can_be_deleted()
    {

       $this->signIn();

       $thread = create('App\Models\Thread\Thread');

       $reply = create('App\Models\Reply\Reply', ['thread_id' => $thread->id]);

       $response = $this->json('DELETE', $thread->path());

       $response->assertStatus(204);

       $this->assertDatabaseMissing('threads', ['id' => $thread->id]);
       $this->assertDatabaseMissing('replies', ['id' => $reply->id]);


    }
    
    /** @test */
    function a_thread_require_a_channel_id()
    {

        factory('App\Channel', 2)->create();

        $this->publishThread(['channel_id' => null])
            ->assertSessionHasErrors('channel_id');

        $this->publishThread(['channel_id' => 999])
            ->assertSessionHasErrors('channel_id');



    }
    /** @test */
    function a_thread_require_a_body()
    {

        $this->publishThread(['body' => null])
            ->assertSessionHasErrors('body');



    }

    public function publishThread($overrides = [])
    {

        $this->withExceptionHandling()->signIn();

        $thread = make('App\Models\Thread\Thread', $overrides);

        return $this->post('/threads', $thread->toArray());

    }
}
