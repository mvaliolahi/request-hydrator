<?php

namespace Tests\Feature;

use Tests\DTO\PostDTO;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function request_should_have_cast_to_method()
    {
        $object = request()->castTo(new PostDTO, [
            'title' => $title = 'PHP 8 is awesome',
        ]);

        $this->assertInstanceOf(PostDTO::class, $object);
        $this->assertEquals($title, $object->getTitle());
    }

    /**
     * @test
     */
    public function request_should_have_hydrate_to_method()
    {
        $object = request()->hydrateTo(new PostDTO, [
            'title' => $title = 'PHP 8 is awesome',
        ]);

        $this->assertInstanceOf(PostDTO::class, $object);
        $this->assertEquals($title, $object->getTitle());
    }
}
