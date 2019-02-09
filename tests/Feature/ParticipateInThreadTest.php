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

        $this->post($thread->path() . '/replies', $reply->toArray())
            ->assertRedirect('/email/verify');
    }
    /** @test */
    function an_authenticated_user_may_participate_in_forum_threads()
    {
        $this->signIn();

        $thread = create('App\Models\Thread\Thread');

        $reply = make('App\Models\Reply\Reply');

        $this->post($thread->path().'/replies', $reply->toArray());

        $this->assertDatabaseHas('replies', ['body' => $reply->body]);
        $this->assertEquals(1, $thread->refresh()->replies_count);
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
             ->assertRedirect('/email/verify');

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

        $this->assertEquals(0, $reply->thread->fresh()->replies_count);
    }
    /** @test */
    function unauthorized_users_canot_update_replies()
    {
        $this->withExceptionHandling();

        $reply = create('App\Models\Reply\Reply');

        $this->patch("/replies/{$reply->id}")
            ->assertRedirect('/email/verify');

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
     /** @test */
    function users_may_only_reply_a_maximum_of_once_per_minute()
    {
        $this->signIn();
        $thread = create('App\Models\Thread\Thread');
        $reply = make('App\Models\Reply\Reply');

        $this->post($thread->path(). '/replies', $reply->toArray())
             ->assertStatus(302);

        $this->post($thread->path(). '/replies', $reply->toArray())
             ->assertStatus(429);
    }

}
