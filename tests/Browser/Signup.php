<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class Signup extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testCustomerSignup()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('customer/register')
                    ->type('text', 'demo')
                    ->type('text', 'webkul')
                    ->type('email', 'demo@webkul.com')
                    ->type('password', 'admin123')
                    ->type('password', 'admin123')
                    ->pause('1000')
                    ->click('input[type="submit"]')
                    ->screenshot('error');
        });
    }
}
