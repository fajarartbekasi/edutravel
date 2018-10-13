<?php

namespace Tests\Feature;

use Tests\TestCase;

class ThreadsTest extends TestCase
{

     /** @test */
    public function a_user_can_browse_threads()
    {

        $thread = factory('App\Models\Thread\Thread')->create();

        $response = $this->get('/');

        $response->assertSee($thread->title);

        
    }

    /** @test */
    public function a_user_can_read_a_single_thread()
    {

        $thread = factory('App\Models\Thread\Thread')->create();

        $response = $this->get('/threads/'. $thread->id);

        $response->assertSee($thread->title);

        
    }
}
