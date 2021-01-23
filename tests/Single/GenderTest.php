<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\Gender;
use StraTDeS\VO\Single\Name;
use PHPUnit\Framework\TestCase;

class GenderTest extends TestCase
{
    public function testGivenAValidGenderAValidVOIsReturned(): void
    {
        // Arrange
        $gender = Gender::MALE;

        // Act
        $genderVO = Gender::fromValue($gender);

        // Assert
        $this->assertInstanceOf(Gender::class, $genderVO);
        $this->assertEquals($gender, $genderVO->value());
    }

    public function testGivenAnInvalidGenderAnExceptionIsThrown(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Tortoise is not a valid gender");

        // Arrange
        $gender = "Tortoise";

        // Act
        Gender::fromValue($gender);
    }
}
