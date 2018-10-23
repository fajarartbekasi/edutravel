<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadThreadsTest extends TestCase
{

    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->thread = create('App\Models\Thread\Thread');
    }

     /** @test */
    function a_user_can_view_all_threads()
    {

        
       $response = $this->get('/threads')
       ->assertSee($this->thread->title);
        
    }

    /** @test */
    function a_user_can_read_a_single_thread()
    {

        $this->get('threads/some/'. $this->thread->id)
             ->assertSee($this->thread->title);
        
        
    }

    /** @test */
    function a_user_can_read_replies_that_are_associated_with_a_thread()
    {

        $reply = factory('App\Models\Reply\Reply')
                 ->create(['thread_id' => $this->thread->id]);
            
                 $this->get('threads/some/' . $this->thread->id)
                 ->assertSee($reply->body);
    }
    /** @test */
    function a_user_can_filter_threads_according_to_a_channel()
    {

        $channel = create('App\Channel');

        $threadInChannel = create('App\Models\Thread\Thread',['channel_id' => $channel->id]);

        $threadNotInChannel = create('App\Models\Thread\Thread');
        
       $this->get('/threads/'. $channel->slug)
            ->assertSee($threadInChannel->title)
            ->assertDontSee($threadNotInChannel->title);
    }
    /** @test */
    function a_user_can_filter_by_any_username()
    {
        $this->signIn(create('App\User', ['name' => 'JohnDoe']));

        $threadByJohn = create('App\Models\Thread\Thread', ['user_id' => auth()->id()]);

        $threadNotByJohn = create('App\Models\Thread\Thread');

        $this->get('threads?by=JohnDoe')
             ->assertSee($threadByJohn->title)
             ->assertDontSee($threadNotByJohn->title);
    }

    /** @test */
    function a_user_can_filter_threads_by_popularity()
    {

        $threadWithTwoReplies = create('App\Models\Thread\Thread');
        create('App\Models\Reply\Reply', ['thread_id' => $threadWithTwoReplies->id], 2);


        $threadWithThreeReplies = create('App\Models\Thread\Thread');
        create('App\Models\Reply\Reply', ['thread_id' => $threadWithThreeReplies->id], 3);


        $threadWithNoReplies = $this->thread;

        $response = $this->getJson('threads?popular=1')->json();

        $this->assertEquals([3,2,0], array_column($response, 'replies_count'));
    }
}
