<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\PhoneNumberCollection;
use StraTDeS\VO\Single\PhoneNumber;

class PhoneNumberCollectionTest extends TestCase
{
    public function testGivenValidPhoneNumbersAValidPhoneNumberCollectionIsReturned(): void
    {
        // Arrange
        $phoneNumber1 = PhoneNumber::create("+34", "938140000");
        $phoneNumber2 = PhoneNumber::create("+35", "938140001");
        $phoneNumber3 = PhoneNumber::create("+36", "938140002");
        $phoneNumberArray = [
            $phoneNumber1,
            $phoneNumber2,
            $phoneNumber3
        ];

        // Act
        $phoneNumberCollection = PhoneNumberCollection::create();
        $phoneNumberCollection->add($phoneNumber1);
        $phoneNumberCollection->add($phoneNumber2);
        $phoneNumberCollection->add($phoneNumber3);

        // Assert
        $this->assertInstanceOf(PhoneNumberCollection::class, $phoneNumberCollection);
        $this->assertEquals($phoneNumber1, $phoneNumberCollection[0]);
        $this->assertEquals($phoneNumber2, $phoneNumberCollection[1]);
        $this->assertEquals($phoneNumber3, $phoneNumberCollection[2]);
        $this->assertEquals(
            $phoneNumberArray,
            $phoneNumberCollection->items()
        );
        $this->assertEquals(3, count($phoneNumberCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($phoneNumberArray[$i], $phoneNumberCollection[$i]);
        }

        foreach($phoneNumberCollection as $key => $phoneNumber) {
            $this->assertInstanceOf(PhoneNumber::class, $phoneNumber);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $phoneNumber1 = PhoneNumber::create("+34", "938140000");

        // Act
        $phoneNumberCollection = PhoneNumberCollection::create();
        $phoneNumberCollection[0] = $phoneNumber1;

        // Assert
        $this->assertEquals($phoneNumber1, $phoneNumberCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . PhoneNumber::class);

        $phoneNumber1 = new \stdClass();

        $phoneNumberCollection = PhoneNumberCollection::create();
        $phoneNumberCollection->add($phoneNumber1);
    }
}
