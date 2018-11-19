<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateChannelTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function geusts_may_not_create_channel()
    {

        $this->withExceptionHandling();

        $this->get('channels/create')
             ->assertRedirect('/login');

        $this->post('channels/store')
        ->assertRedirect('/login');

    }

    /** @test */
    function user_with_authorized_can_create_channel()
    {
        $this->signIn();

        $channel = make('App\Channel');

        $response = $this->post('/channels/store', $channel->toArray());

        $this->get($response->headers->get('Location'))
             ->assertSee('ok');
    }

     /** @test */
     function a_channel_required_name()
     {
         $this->publishChannel(['name' => null])
              ->assertSessionHasErrors('name');
     }

     public function publishChannel($overides = [])
     {

        $this->withExceptionHandling()->signIn();

        $channel = make('App\Channel', $overides);

        return $this->post('/channels/store', $channel->toArray());
     }

}
