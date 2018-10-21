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
}
