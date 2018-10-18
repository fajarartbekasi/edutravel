<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class CreateThreadTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function guests_may_not_created_threads()
    {
        $this->withExceptionHandling()
             ->post('/threads')
             ->assertSee('/login');


        
    }
   
    /** @test */
    function an_authenticated_user_can_create_new_forum_thread()
    {

        $this->signIn();

        $thread = create('App\Models\Thread\Thread');

        $this->post('/threads', $thread->toArray());

        $this->get($thread->path())
             ->assertSee($thread->title)
             ->assertSee($thread->body);
    }
}
