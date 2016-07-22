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
       ->assertViewHas('errors');
       dd($this->response);
       dd( $this->response->original->getData());
       dd($this->currentUri);
       dd($this->app['session.store']->all());
     }

    public function estRegisteringForNewsletter()
    {

      $this->visit('/')
      ->type('John', 'first-name')
      ->type('Doe', 'last-name')
      ->type('john@example.com', 'email')
      ->press('Register')
      ->assertViewHas('success', 1);

    }

}
