<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
class StaticPagesTest extends TestCase
{
    public function pages()
    {
        return [
            ['/'],
            ['privacy-policy'],
            ['solutions'],
            ['products'],
            ['clients'],
            ['careers'],
            ['contact-us'],
            ['products'],
            ['products/rsinet'],
            ['products/sentry'],
            ['products/tender'],
            ['products/sentinel'],
            ['products/fcovid'],
        ];
    }

    /**
     * @dataProvider pages
     *
     * @param mixed $url
     */
    public function testPageShouldNotThrowNotFound($url)
    {
        $response = $this->get($url);

        $response->assertStatus(200);
    }
}
