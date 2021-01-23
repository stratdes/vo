<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\SlugCollection;
use StraTDeS\VO\Single\Slug;

class SlugCollectionTest extends TestCase
{
    public function testGivenValidSlugsAValidSlugCollectionIsReturned(): void
    {
        // Arrange
        $slug1 = Slug::fromValue("foo");
        $slug2 = Slug::fromValue("bar");
        $slug3 = Slug::fromValue("foobar");
        $slugArray = [
            $slug1,
            $slug2,
            $slug3
        ];

        // Act
        $slugCollection = SlugCollection::create();
        $slugCollection->add($slug1);
        $slugCollection->add($slug2);
        $slugCollection->add($slug3);

        // Assert
        $this->assertInstanceOf(SlugCollection::class, $slugCollection);
        $this->assertEquals($slug1, $slugCollection[0]);
        $this->assertEquals($slug2, $slugCollection[1]);
        $this->assertEquals($slug3, $slugCollection[2]);
        $this->assertEquals(
            $slugArray,
            $slugCollection->items()
        );
        $this->assertEquals(3, count($slugCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($slugArray[$i], $slugCollection[$i]);
        }

        foreach($slugCollection as $key => $slug) {
            $this->assertInstanceOf(Slug::class, $slug);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $slug1 = Slug::fromValue("foo");

        // Act
        $slugCollection = SlugCollection::create();
        $slugCollection[0] = $slug1;

        // Assert
        $this->assertEquals($slug1, $slugCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Slug::class);

        $slug1 = new \stdClass();

        $slugCollection = SlugCollection::create();
        $slugCollection->add($slug1);
    }
}
