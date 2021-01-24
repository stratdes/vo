<?php

namespace StraTDeS\VO\Tests\Single;

use StraTDeS\VO\Single\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testGivenAValidEmailAValidVOIsReturned(): void
    {
        // Arrange
        $email = "foo@bar.com";

        // Act
        $emailVO = Email::fromValue($email);

        // Assert
        $this->assertInstanceOf(Email::class, $emailVO);
        $this->assertEquals($email, $emailVO->value());
    }

    public function testGivenAnInvalidEmailAnExceptionIsThrown(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("foo@bar is not a valid email");

        // Arrange
        $email = "foo@bar";

        // Act
        Email::fromValue($email);
    }

    public function testGivenTwoEqualEmailsEqualReturnsTrue(): void
    {
        // Arrange
        $email1 = Email::fromValue("foo@bar.com");
        $email2 = Email::fromValue("foo@bar.com");

        // Act
        $equal = $email1->equal($email2);

        // Assert
        $this->assertTrue($equal);
    }

    public function testGivenTwoNotEqualEmailsEqualReturnsFalse(): void
    {
        // Arrange
        $email1 = Email::fromValue("foo@bar.com");
        $email2 = Email::fromValue("bar@foo.com");

        // Act
        $equal = $email1->equal($email2);

        // Assert
        $this->assertFalse($equal);
    }
}
