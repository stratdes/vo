<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\Coordinates;
use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    public function testGivenValidValuesItReturnsValidCoordinatesVO()
    {
        // Arrange
        $longitude = 1.7200366092330326;
        $latitude = 41.222621365339684;

        // Act
        $coordinates = Coordinates::fromValues($longitude, $latitude);

        // Assert
        $this->assertInstanceOf(Coordinates::class, $coordinates);
        $this->assertEquals($coordinates->longitude()->value(), $longitude);
        $this->assertEquals($coordinates->latitude()->value(), $latitude);
    }
}
