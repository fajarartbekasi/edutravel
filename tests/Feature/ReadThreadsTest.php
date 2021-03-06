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

    /** @test */
    function a_user_can_filter_threads_by_those_that_are_unanswered()
    {

        $thread = create('App\Models\Thread\Thread');
        create('App\Models\Reply\Reply', ['thread_id' => $thread->id]);

        $response = $this->getJson('threads?unanswered=1')->json();

        // dd($response);
        $this->assertCount(1, $response);
    }

    /** @test */
    function a_user_can_request_all_replies_for_given_thread()
    {

        $thread = create('App\Models\Thread\Thread');

        create('App\Models\Reply\Reply', ['thread_id' => $thread->id], 1);

        $response = $this->getJson($thread->path() . '/replies')->json();

        $this->assertCount(1, $response['data']);
        $this->assertEquals(1, $response['total']);
    }
}
