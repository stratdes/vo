<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\CoordinatesCollection;
use StraTDeS\VO\Single\Coordinates;

class CoordinatesCollectionTest extends TestCase
{
    public function testGivenValidCoordinatesAValidCoordinatesCollectionIsReturned(): void
    {
        // Arrange
        $coordinates1 = Coordinates::fromValues(120.00, 75.00);
        $coordinates2 = Coordinates::fromValues(-80.00, 11.99);
        $coordinates3 = Coordinates::fromValues(-60.00, 30.00);

        $coordinatesArray = [
            $coordinates1,
            $coordinates2,
            $coordinates3
        ];

        // Act
        $coordinatesCollection = CoordinatesCollection::create();
        $coordinatesCollection->add($coordinates1);
        $coordinatesCollection->add($coordinates2);
        $coordinatesCollection->add($coordinates3);

        // Assert
        $this->assertInstanceOf(CoordinatesCollection::class, $coordinatesCollection);
        $this->assertEquals($coordinates1, $coordinatesCollection[0]);
        $this->assertEquals($coordinates2, $coordinatesCollection[1]);
        $this->assertEquals($coordinates3, $coordinatesCollection[2]);
        $this->assertEquals(
            $coordinatesArray,
            $coordinatesCollection->items()
        );
        $this->assertEquals(3, count($coordinatesCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($coordinatesArray[$i], $coordinatesCollection[$i]);
        }

        foreach($coordinatesCollection as $key => $coordinates) {
            $this->assertInstanceOf(Coordinates::class, $coordinates);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $coordinates1 = Coordinates::fromValues(120.00, 75.00);

        // Act
        $coordinatesCollection = CoordinatesCollection::create();
        $coordinatesCollection[0] = $coordinates1;

        // Assert
        $this->assertEquals($coordinates1, $coordinatesCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Coordinates::class);

        $coordinates1 = new \stdClass();

        $coordinatesCollection = CoordinatesCollection::create();
        $coordinatesCollection->add($coordinates1);
    }
}
