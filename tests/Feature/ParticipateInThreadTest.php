<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ParticipateInThreadTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    function unauthenticated_user_may_not_add_replies()
    {
        $this->withExceptionHandling();
        
        $thread = create('App\Models\Thread\Thread');

        $reply = make('App\Models\Reply\Reply');

        // dd($thread->path() . '/replies', $reply->toArray());

        $this->post($thread->path() . '/replies', $reply->toArray())
            ->assertRedirect('/login');


        // $this->withExceptionHandling()
        //     ->post('/threads/some/1/replies', [])
        //     ->assertRedirect('/login');
        
    }
    /** @test */
    function an_authenticated_user_may_participate_in_forum_threads()
    {
        $this->signIn();

        $thread = create('App\Models\Thread\Thread');

        $reply = make('App\Models\Reply\Reply');

        $this->post($thread->path().'/replies', $reply->toArray());

        $this->get($thread->path())
            ->assertSee($reply->body);
    }
    /** @test */
    function a_replies_require_a_body()
    {

        $this->withExceptionHandling()->signIn();

        $thread = create('App\Models\Thread\Thread');

        $reply = make('App\Models\Reply\Reply', ['body'=>null]);

        $this->post($thread->path() . '/replies', $reply->toArray())
             ->assertSessionHasErrors('body');

    }
    /** @test */
    function unauthorized_users_canot_delete_replies()
    {
        $this->withExceptionHandling();
        
        $reply = create('App\Models\Reply\Reply');

        $this->delete("/replies/{$reply->id}")
             ->assertRedirect('login');

        $this->signIn()
             ->delete("/replies/{$reply->id}")
             ->assertStatus(403);
    }

    /** @test */
    function authorized_users_can_delete_replies()
    {
        $this->signIn();

        $reply = create('App\Models\Reply\Reply', ['user_id' => auth()->id()]);

        $this->delete("/replies/{$reply->id}")->assertStatus(302);

        $this->assertDatabaseMissing('replies', ['id' => $reply->id]);
    }
    /** @test */
    function unauthorized_users_canot_update_replies()
    {
        $this->withExceptionHandling();

        $reply = create('App\Models\Reply\Reply');

        $this->patch("/replies/{$reply->id}")
            ->assertRedirect('login');

        $this->signIn()
            ->patch("/replies/{$reply->id}")
            ->assertStatus(403);
    }

    /** @test */
    function authorized_users_can_update_replies()
    {
        $this->signIn();

        $reply = create('App\Models\Reply\Reply', ['user_id' => auth()->id()]);

        $updateReply = 'You change reply';
        
        $this->patch("/replies/{$reply->id}", ['body' => $updateReply]);

        $this->assertDatabaseHas('replies', ['id' => $reply->id, 'body' => $updateReply]);
    }
    
}
