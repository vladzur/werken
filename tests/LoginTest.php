<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoginFailure()
    {
        $this->visit('/auth/login')
            ->type('admin@blog.com', 'email')
            ->type('asdwsx', 'password')
            ->press('Entrar')
            ->seePageIs('/auth/login');
    }

    public function testLoginSuccess()
    {
        $this->visit('/auth/login')
            ->type('admin@blog.com', 'email')
            ->type('admin', 'password')
            ->press('Entrar')
            ->seePageIs('/admin/posts');
    }
}
