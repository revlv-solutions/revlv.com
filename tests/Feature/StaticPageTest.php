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
