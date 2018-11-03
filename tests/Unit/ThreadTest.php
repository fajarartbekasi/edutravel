<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ThreadTest extends TestCase
{

    use DatabaseMigrations; 

    protected $thread;

    public function setUp()
    {

        parent::setUp();

        $this->thread = create('App\Models\Thread\Thread');

    }

    /** @test */
    function a_thread_can_make_string_path()
    {


        $thread = create('App\Models\Thread\Thread');

        $this->assertEquals(
            "/threads/{$thread->channel->slug}/{$thread->id}", $thread->path()
        );

    }
   /** @test */
    function a_thread_has_replies()
    {
    

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);

    }
    /** @test */
    function a_thread_has_a_creator()
    {

        $thread = create('App\Models\Thread\Thread');

        $this->assertInstanceOf( 'App\User', $this->thread->creator );

    }

    /** @test */
    function a_thread_can_add_a_reply()
    {

       $this->thread->addReply([
           'body' => 'foobar',
           'user_id' => 1
       ]);

       $this->assertCount(1, $this->thread->replies);
    }

    /** @test */
    function a_thread_belongs_to_a_channel()
    {

       $thread = create('App\Models\Thread\Thread');

       $this->assertInstanceOf('App\Channel', $thread->channel);
    }

    /** @test */
    function a_thread_can_be_subscribed_to()
    {

        $thread = create('App\Models\Thread\Thread');

        $thread->subscribe($userId = 1);
        
        $this->assertEquals(1, 
            $thread->subscriptions()
                   ->where('user_id', $userId)->count()
            );
       
    }

    /** @test */
    function a_thread_can_be_unsubscribed_from()
    {

        $thread = create('App\Models\Thread\Thread');

        $thread->subscribe($userId = 1);

        $thread->unsubscribe($userId);

        $this->assertCount(0, $thread->subscriptions);

    }
    /** @test */
    function it_know_if_the_authenticated_user_is_subscribed_to_it()
    {

        $thread = create('App\Models\Thread\Thread');

        $this->signIn();

        $this->assertFalse($thread->isSubscribedTo);

        $thread->subscribe();

        $this->assertTrue($thread->isSubscribedTo);

    }
}


