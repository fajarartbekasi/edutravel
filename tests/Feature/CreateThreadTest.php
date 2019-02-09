<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;


class CreateThreadTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function guests_may_not_created_threads()
    {
        $this->withExceptionHandling();
        $this->get('/threads/create')
             ->assertRedirect('/email/verify');

        $this->post('/threads')
             ->assertRedirect('/email/verify');
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
        $this->publishThread(['title' => null])
             ->assertSessionHasErrors('title');
    }
    /** @test */
    function unauthorized_user_may_not_delete_threads()
    {
        $this->withExceptionHandling();

        $thread = create('App\Models\Thread\Thread');

        $this->delete($thread->path())->assertRedirect('/email/verify');

        $this->signIn();

        $this->delete($thread->path())->assertStatus(403);

    }

    /** @test */
    function authorized_user_can_deleted_threads()
    {
       $this->signIn();

       $thread = create('App\Models\Thread\Thread', ['user_id' => auth()->id()]);

       $reply = create('App\Models\Reply\Reply', ['thread_id' => $thread->id]);

       $response = $this->json('DELETE', $thread->path());

       $response->assertStatus(204);

       $this->assertDatabaseMissing('threads', ['id' => $thread->id]);
       $this->assertDatabaseMissing('replies', ['id' => $reply->id]);

       $this->assertEquals(0, \App\Models\Activity\Activity::count());

    }

    /** @test */
    function unverified_user_email_cannot_create_thread()
    {
       $regulerUser = $this->createUser();

       $this->signIn($regulerUser);

       $this->get(route('threads.create'))
            ->assertStatus(302)
            ->assertRedirect('/email/verify');

        $this->post(route('threads.store'))
            ->assertStatus(302)
            ->assertRedirect('/email/verify');

    }

    /** @test */
    function a_thread_require_a_body()
    {
        $this->publishThread(['body' => null])
            ->assertSessionHasErrors('body');
    }
    /** @test */
    function a_thread_require_a_channel_id()
    {
        
        factory('App\Channel', 2)->create();

        $this->publishThread(['channel_id' => null])
            ->assertSessionHasErrors('channel_id');


    }

    public function publishThread($overrides = [])
    {

        $this->withExceptionHandling()->signIn();

        $thread = make('App\Models\Thread\Thread', $overrides);

        return $this->post(route('threads.store', $thread->toArray()));
       

    }
}
