<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfilesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_user_has_a_profile()
    {
        $this->signIn();
        
        $user = create('App\User');

        $this->get("/profiles/{$user->name}")
             ->assertSee($user->name);
    }

    /** @test */
    function profile_display_all_thread_created_by_the_associted_user()
    {
        $this->signIn();

        $thread = create('App\Models\Thread\Thread', ['user_id' => auth()->id()]);

        $this->get("/profiles/". auth()->user()->name)
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }
}