<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterForNewsletterTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

    public function testEmptyFormReturnsError()
    {
       $this->visit('/')
       ->press('Register')
       ->see('The first-name field is required')
       ->see('The last-name field is required')
       ->see('The email field is required');
    }

    public function testEmptyFirstNameReturnsError()
    {
       $this->visit('/')
       ->type('Doe', 'last-name')
       ->type('john@example.com', 'email')
       ->press('Register')
       ->see('The first-name field is required');
    }

    public function testEmptyLastNameReturnsError()
    {
       $this->visit('/')
       ->type('John', 'first-name')
       ->type('john@example.com', 'email')
       ->press('Register')
       ->see('The last-name field is required');
    }

    public function testEmptyEmailNameReturnsError()
    {
       $this->visit('/')
       ->type('John', 'first-name')
       ->type('Doe', 'last-name')
       ->press('Register')
       ->see('The email field is required');
    }

    public function testRegisteringForNewsletter()
    {

      $this->visit('/')
      ->type('John', 'first-name')
      ->type('Doe', 'last-name')
      ->type('john@example.com', 'email')
      ->press('Register')
      ->assertViewHas('success', 1);

    }

}
