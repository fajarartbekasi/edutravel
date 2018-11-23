<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReplyTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    function it_has_an_owner()
    {
       $reply = create('App\Models\Reply\Reply');

       $this->assertInstanceOf('App\User', $reply->owner);

    }

    function it_know_if_it_just_published()
    {
        $reply = create('App\Models\Reply\Reply');

        $this->assertTrue($reply->wasJustPublished());
        $reply->created_at = Carbon::now()->subMonth();
        $this->assertFalse($reply->wasJustPublished());
    }

}
