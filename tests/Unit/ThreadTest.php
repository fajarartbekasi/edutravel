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
}
