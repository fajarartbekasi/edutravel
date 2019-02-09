<?php

namespace Tests;

use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp()
    {
        parent::setUp();
        $this->disableExceptionHandling();
    }

 
    protected function signIn($user = null)
    {
        // $user = $user ?: create('App\User');

        $user = $user ?: factory(\App\User::class)->create([
            'name'          => 'Chaerul Fajar Subhi',
            'email'         => 'fajarbekasieditting@gmail.com',
            'password'      => bcrypt('password'),
            'email_verified_at' => '2019-02-02 11:08:00',
        ]);

        $this->actingAs($user);

        return $this;
    }
    protected function disableExceptionHandling()
    {
        $this->oldExceptionHandler = $this->app->make(ExceptionHandler::class);
        $this->app->instance(ExceptionHandler::class, new class extends Handler
        {
            public function __construct()
            {
            }
            public function report(\Exception $e)
            {
            }
            public function render($request, \Exception $e)
            {
                throw $e;
            }
        }
        );
    }
    protected function withExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, $this->oldExceptionHandler);
        return $this;
    }
    
    protected function createUser()
    {
        return factory(\App\User::class)->create([
            'name'      => 'User Name Tes',
            'email'     => 'user@test.com',
            'password'  => bcrypt('password'),
            'email_verified_at' => null,
        ]);
    }
   
}
