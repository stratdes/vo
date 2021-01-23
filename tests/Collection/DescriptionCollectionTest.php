<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\DescriptionCollection;
use StraTDeS\VO\Single\Description;

class DescriptionCollectionTest extends TestCase
{
    public function testGivenValidDescriptionsAValidDescriptionCollectionIsReturned(): void
    {
        // Arrange
        $description1 = Description::fromValue("foo");
        $description2 = Description::fromValue("bar");
        $description3 = Description::fromValue("foobar");
        $descriptionArray = [
            $description1,
            $description2,
            $description3
        ];

        // Act
        $descriptionCollection = DescriptionCollection::create();
        $descriptionCollection->add($description1);
        $descriptionCollection->add($description2);
        $descriptionCollection->add($description3);

        // Assert
        $this->assertInstanceOf(DescriptionCollection::class, $descriptionCollection);
        $this->assertEquals($description1, $descriptionCollection[0]);
        $this->assertEquals($description2, $descriptionCollection[1]);
        $this->assertEquals($description3, $descriptionCollection[2]);
        $this->assertEquals(
            $descriptionArray,
            $descriptionCollection->items()
        );
        $this->assertEquals(3, count($descriptionCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($descriptionArray[$i], $descriptionCollection[$i]);
        }

        foreach($descriptionCollection as $key => $description) {
            $this->assertInstanceOf(Description::class, $description);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $description1 = Description::fromValue("foo");

        // Act
        $descriptionCollection = DescriptionCollection::create();
        $descriptionCollection[0] = $description1;

        // Assert
        $this->assertEquals($description1, $descriptionCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Description::class);

        $description1 = new \stdClass();

        $descriptionCollection = DescriptionCollection::create();
        $descriptionCollection->add($description1);
    }
}
