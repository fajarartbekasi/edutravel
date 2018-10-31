<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubscribeToThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */

    public function a_user_can_subscribe_to_threads()
    {
        $this->signIn();

        $thread = create('App\Models\Thread\Thread');

        $this->post($thread->path() . '/subscriptions');

        $thread->addReply([

            'user_id' => auth()->id(),
            'body'    => 'some reply here',

        ]);

        $this->assertCount(1, auth()->user()->notifications);
    }
}