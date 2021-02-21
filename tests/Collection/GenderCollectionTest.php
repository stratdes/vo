<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\GenderCollection;
use StraTDeS\VO\Single\Gender;

class GenderCollectionTest extends TestCase
{
    public function testGivenValidGendersAValidGenderCollectionIsReturned(): void
    {
        // Arrange
        $gender1 = Gender::fromValue(Gender::MALE);
        $gender2 = Gender::fromValue(Gender::FEMALE);
        $gender3 = Gender::fromValue(Gender::MALE);
        $genderArray = [
            $gender1,
            $gender2,
            $gender3
        ];

        // Act
        $genderCollection = GenderCollection::create();
        $genderCollection->add($gender1);
        $genderCollection->add($gender2);
        $genderCollection->add($gender3);

        // Assert
        $this->assertInstanceOf(GenderCollection::class, $genderCollection);
        $this->assertEquals($gender1, $genderCollection[0]);
        $this->assertEquals($gender2, $genderCollection[1]);
        $this->assertEquals($gender3, $genderCollection[2]);
        $this->assertEquals(
            $genderArray,
            $genderCollection->items()
        );
        $this->assertEquals(3, count($genderCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($genderArray[$i], $genderCollection[$i]);
        }

        foreach($genderCollection as $key => $gender) {
            $this->assertInstanceOf(Gender::class, $gender);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $gender1 = Gender::fromValue(Gender::MALE);

        // Act
        $genderCollection = GenderCollection::create();
        $genderCollection[0] = $gender1;

        // Assert
        $this->assertEquals($gender1, $genderCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Gender::class);

        $gender1 = new \stdClass();

        $genderCollection = GenderCollection::create();
        $genderCollection->add($gender1);
    }
}
