<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    public function testGivenAValidPhoneNumberAValidVOIsReturned(): void
    {
        // Arrange
        $prefix = ' +34';
        $cleanedPrefix = '34';
        $number = ' 93 814 0000 ';
        $cleanedNumber = '938140000';

        // Act
        $phoneNumberVO = PhoneNumber::create($prefix, $number);

        // Assert
        $this->assertInstanceOf(PhoneNumber::class, $phoneNumberVO);
        $this->assertEquals($cleanedPrefix, $phoneNumberVO->prefix());
        $this->assertEquals($cleanedNumber, $phoneNumberVO->number());
    }

    public function testGivenTwoEqualPhoneNumbersEqualReturnsTrue(): void
    {
        // Arrange
        $phoneNumber1 = PhoneNumber::create("34", "938140000");
        $phoneNumber2 = PhoneNumber::create("34", "938140000");

        // Act
        $equal = $phoneNumber1->equal($phoneNumber2);

        // Assert
        $this->assertTrue($equal);
    }

    public function testGivenTwoNotEqualPhoneNumbersByPrefixEqualReturnsFalse(): void
    {
        // Arrange
        $phoneNumber1 = PhoneNumber::create("34", "938140000");
        $phoneNumber2 = PhoneNumber::create("53", "938140000");

        // Act
        $equal = $phoneNumber1->equal($phoneNumber2);

        // Assert
        $this->assertFalse($equal);
    }

    public function testGivenTwoNotEqualPhoneNumbersByNumberEqualReturnsFalse(): void
    {
        // Arrange
        $phoneNumber1 = PhoneNumber::create("34", "938140000");
        $phoneNumber2 = PhoneNumber::create("34", "933204444");

        // Act
        $equal = $phoneNumber1->equal($phoneNumber2);

        // Assert
        $this->assertFalse($equal);
    }
}
