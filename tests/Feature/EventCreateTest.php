<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class EventCreateTest extends TestCase
{
   use DatabaseMigrations;

   /** @test */
   function unverified_user_email_cannot_create_event()
    {
        $regulerUser = $this->createUser();

        $this->signIn($regulerUser);

        $this->get(route('events.create'))
             ->assertStatus(302)
             ->assertRedirect('/email/verify');
    }
    /** @test */
    function unverified_user_email_cannot_join_event()
    {
        $regulerUser = $this->createUser();

        $this->signIn($regulerUser);

        $this->get(route('joint.event'))
            ->assertStatus(302)
            ->assertRedirect('/email/verify');
    }



}
