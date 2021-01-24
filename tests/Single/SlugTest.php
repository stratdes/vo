<?php

namespace StraTDeS\VO\Tests\Single;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Single\Slug;

class SlugTest extends TestCase
{
    public function testGivenAValidSlugAValidVOIsReturned(): void
    {
        // Arrange
        $slug = "this-is-a-valid-slug";

        // Act
        $slugVO = Slug::fromValue($slug);

        // Assert
        $this->assertInstanceOf(Slug::class, $slugVO);
        $this->assertEquals($slug, $slugVO->value());
    }
}