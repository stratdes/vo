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
}
