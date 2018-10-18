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

        $this->withExceptionHandling()
             ->post('/threads/some-channel/1/replies', [])
             ->assertRedirect('/login');
        
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
}
