<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\CoordinatesLatitude;
use PHPUnit\Framework\TestCase;

class LatitudeTest extends TestCase
{
    public function testGivenAValidLatitudeAValidVOIsReturned(): void
    {
        // Arrange
        $latitude = 41.222621365339684;

        // Act
        $latitudeVO = CoordinatesLatitude::fromValue($latitude);

        // Assert
        $this->assertInstanceOf(CoordinatesLatitude::class, $latitudeVO);
        $this->assertEquals($latitude, $latitudeVO->value());
    }

    public function testGivenATooLowLatitudeAnExceptionIsThrown(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Latitude must be a float number between -90.00 and 90.00.");

        // Arrange
        $latitude = -95.00;

        // Act
        CoordinatesLatitude::fromValue($latitude);
    }

    public function testGivenATooHighLatitudeAnExceptionIsThrown(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Latitude must be a float number between -90.00 and 90.00.");

        // Arrange
        $latitude = +95.00;

        // Act
        CoordinatesLatitude::fromValue($latitude);
    }
}
