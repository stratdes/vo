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
}
