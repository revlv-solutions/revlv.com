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
    /**
     * A basic browser test example.
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact-us')
                ->assertSee('Contact Details')
                ->scrollToElement('#inquiry-form')
                ->type('name', 'John Doe')
                ->type('email', 'johndoe@foo.com')
                ->scrollToElement('#email')
                ->type('message', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, libero.')
                ->select('inquiry', 'Request for a quote')
                ->type('contact_number', '09171234567')
                ->type('company', 'REVLV Solutions')
                ->click('#submit-inquiry')
                ->scrollToElement('#email')
                ->waitForText(trans('responses.inquiry_succes'), 10);
        });
    }
}
