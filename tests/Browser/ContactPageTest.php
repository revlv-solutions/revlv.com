<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * @internal
 * @coversNothing
 */
class ContactPageTest extends DuskTestCase
{
    public function testContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact-us')
                ->assertSee('Contact Details')
                ->type('name', 'John Doe')
                ->type('email', 'johndoe@foo.com')
                ->type('message', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, libero.')
                ->select('inquiry', 'Request for a quote')
                ->type('contact_number', '09171234567')
                ->type('company', 'REVLV Solutions')
                ->click('#submit-inquiry')
                ->waitForText(trans('responses.inquiry_succes'), 10);
        });
    }
}
