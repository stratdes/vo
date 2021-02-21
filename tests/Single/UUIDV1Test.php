<?php

namespace StraTDeS\VO\Tests\Single;

use Ramsey\Uuid\UuidInterface;
use StraTDeS\VO\Single\UUIDV1;
use PHPUnit\Framework\TestCase;

class UUIDV1Test extends TestCase
{
    public function testAProperUUIDV1IsReturnedOnGenerate()
    {
        // Arrange

        // Act
        $id = UUIDV1::generate();

        // Assert
        $this->assertInstanceOf(UUIDV1::class, $id);
        $this->assertInstanceOf(UuidInterface::class, $id->getId());
        $this->assertIsString($id->getHumanReadableId());
    }
}
