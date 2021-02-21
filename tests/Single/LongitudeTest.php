<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\CoordinatesLongitude;
use PHPUnit\Framework\TestCase;

class LongitudeTest extends TestCase
{
    public function testGivenAValidLongitudeAValidVOIsReturned(): void
    {
        // Arrange
        $longitude = 1.7200366092330326;

        // Act
        $longitudeVO = CoordinatesLongitude::fromValue($longitude);

        // Assert
        $this->assertInstanceOf(CoordinatesLongitude::class, $longitudeVO);
        $this->assertEquals($longitude, $longitudeVO->value());
    }

    public function testGivenATooLowLongitudeAnExceptionIsThrown(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Longitude must be a float number between -180.00 and 180.00.");

        // Arrange
        $longitude = -190.00;

        // Act
        CoordinatesLongitude::fromValue($longitude);
    }

    public function testGivenATooHighLongitudeAnExceptionIsThrown(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Longitude must be a float number between -180.00 and 180.00.");

        // Arrange
        $longitude = +190.00;

        // Act
        CoordinatesLongitude::fromValue($longitude);
    }
}
