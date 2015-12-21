<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->visit('/')
            ->see('Werken')
            ->see('This blog is Free Software, so you can modify it as you wish');
    }

    public function testLogin()
    {
        $this->visit('/auth/login')
            ->see('Acceder');
    }

    public function testRegister()
    {
        $this->visit('/auth/register')
            ->see('name')
            ->see('e-mail')
            ->see('password')
            ->see('confirm password');
    }
}
