<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\Gender;
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

    public function testGivenTwoEqualGendersEqualReturnsTrue(): void
    {
        // Arrange
        $gender1 = Gender::fromValue(Gender::MALE);
        $gender2 = Gender::fromValue(Gender::MALE);

        // Act
        $equal = $gender1->equal($gender2);

        // Assert
        $this->assertTrue($equal);
    }

    public function testGivenTwoNotEqualGendersEqualReturnsFalse(): void
    {
        // Arrange
        $gender1 = Gender::fromValue(Gender::MALE);
        $gender2 = Gender::fromValue(Gender::FEMALE);

        // Act
        $equal = $gender1->equal($gender2);

        // Assert
        $this->assertFalse($equal);
    }
}
