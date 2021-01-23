<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\EmailCollection;
use StraTDeS\VO\Single\Email;

class EmailCollectionTest extends TestCase
{
    public function testGivenValidEmailsAValidEmailCollectionIsReturned(): void
    {
        // Arrange
        $email1 = Email::fromValue("foo@server.com");
        $email2 = Email::fromValue("bar@biz.com");
        $email3 = Email::fromValue("foobar@corp.net");
        $emailArray = [
            $email1,
            $email2,
            $email3
        ];

        // Act
        $emailCollection = EmailCollection::create();
        $emailCollection->add($email1);
        $emailCollection->add($email2);
        $emailCollection->add($email3);

        // Assert
        $this->assertInstanceOf(EmailCollection::class, $emailCollection);
        $this->assertEquals($email1, $emailCollection[0]);
        $this->assertEquals($email2, $emailCollection[1]);
        $this->assertEquals($email3, $emailCollection[2]);
        $this->assertEquals(
            $emailArray,
            $emailCollection->items()
        );
        $this->assertEquals(3, count($emailCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($emailArray[$i], $emailCollection[$i]);
        }

        foreach($emailCollection as $key => $email) {
            $this->assertInstanceOf(Email::class, $email);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $email1 = Email::fromValue("foo@server.com");

        // Act
        $emailCollection = EmailCollection::create();
        $emailCollection[0] = $email1;

        // Assert
        $this->assertEquals($email1, $emailCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Email::class);

        $email1 = new \stdClass();

        $emailCollection = EmailCollection::create();
        $emailCollection->add($email1);
    }
}
