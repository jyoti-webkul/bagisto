<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SignupTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    public function testCustomerSignup()
    {
        $this->browse(function (Browser $browser) {
         $browser->visit(route('customer.register.index'))
                    ->type('first_name', 'demo')
                    ->type('last_name', 'webkul')
                    ->type('email', 'demo@webkul.com')
                    ->type('password', 'admin123')
                    ->type('password_confirmation', 'admin123')
                    ->pause('1000')
                    ->click('button[type="submit"]')
                    ->screenshot('error');
        });
    }
}

