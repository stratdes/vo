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

    public function badSlugDataProvider(): array
    {
        return [
            ['THIS-IS-NOT-AN-SLUG'],
            ['$-IS-NOT-AN-SLUG'],
            ['THIS IS NOT AN SLUG'],
            ['this is not an slug'],
            ['THIS-IS-NOT-AN-SLUG'],
        ];
    }

    /**
     * @dataProvider badSlugDataProvider
     * @param string $slug
     */
    public function testGivenAnInvalidSlugAnExceptionIsThrown(string $slug): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("$slug is not a valid slug. Only lowercase, letters, numbers and dashes are allowed.");

        Slug::fromValue($slug);
    }

    public function testGivenTwoEqualSlugsEqualReturnsTrue(): void
    {
        // Arrange
        $slug1 = Slug::fromValue("this-is-a-valid-slug");
        $slug2 = Slug::fromValue("this-is-a-valid-slug");

        // Act
        $equal = $slug1->equal($slug2);

        // Assert
        $this->assertTrue($equal);
    }

    public function testGivenTwoNotEqualSlugsEqualReturnsFalse(): void
    {
        // Arrange
        $slug1 = Slug::fromValue("this-is-a-valid-slug");
        $slug2 = Slug::fromValue("this-is-a-different-slug");

        // Act
        $equal = $slug1->equal($slug2);

        // Assert
        $this->assertFalse($equal);
    }
}
