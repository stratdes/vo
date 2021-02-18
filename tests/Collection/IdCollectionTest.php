<?php

namespace StraTDeS\VO\Tests\Collection;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use stdClass;
use StraTDeS\SharedKernel\Domain\Identity\Id;
use StraTDeS\SharedKernel\Tests\Unit\Domain\DomainEvent\IdStub;
use StraTDeS\VO\Collection\IdCollection;

class IdCollectionTest extends TestCase
{
    public function testGivenValidIdsAValidIdCollectionIsReturned(): void
    {
        // Arrange
        $id1 = IdStub::fromString('9b01b7c2-6f9b-11eb-9439-0242ac130002');
        $id2 = IdStub::fromString('a23ca5ba-6f9b-11eb-9439-0242ac130002');
        $id3 = IdStub::fromString('c449ed2a-6f9b-11eb-9439-0242ac130002');
        $idArray = [
            $id1,
            $id2,
            $id3
        ];

        // Act
        $idCollection = IdCollection::create();
        $idCollection->add($id1);
        $idCollection->add($id2);
        $idCollection->add($id3);

        // Assert
        $this->assertInstanceOf(IdCollection::class, $idCollection);
        $this->assertEquals($id1, $idCollection[0]);
        $this->assertEquals($id2, $idCollection[1]);
        $this->assertEquals($id3, $idCollection[2]);
        $this->assertEquals(
            $idArray,
            $idCollection->items()
        );
        $this->assertCount(3, $idCollection);

        for ($i = 0; $i < 3; $i++) {
            $this->assertEquals($idArray[$i], $idCollection[$i]);
        }

        foreach ($idCollection as $key => $id) {
            $this->assertInstanceOf(Id::class, $id);
        }
    }

    public function testGivenValidIdsAValidIdCollectionRawIsReturned(): void
    {
        // Arrange
        $id1 = IdStub::fromString('9b01b7c2-6f9b-11eb-9439-0242ac130002');
        $id2 = IdStub::fromString('a23ca5ba-6f9b-11eb-9439-0242ac130002');
        $id3 = IdStub::fromString('c449ed2a-6f9b-11eb-9439-0242ac130002');
        $idStringArray = [
            $id1->getHumanReadableId(),
            $id2->getHumanReadableId(),
            $id3->getHumanReadableId()
        ];

        // Act
        /** @var IdCollection $idCollection */
        $idCollection = IdCollection::create();
        $idCollection->add($id1);
        $idCollection->add($id2);
        $idCollection->add($id3);

       // Assert
        $this->assertEquals($idStringArray, $idCollection->toStringArray());
    }

    public function testGivenAnArrayOfStringConstructAnIdCollection(): void
    {
        // Arrange
        $id1 = IdStub::fromString('9b01b7c2-6f9b-11eb-9439-0242ac130002');
        $id2 = IdStub::fromString('a23ca5ba-6f9b-11eb-9439-0242ac130002');
        $id3 = IdStub::fromString('c449ed2a-6f9b-11eb-9439-0242ac130002');
        $idStringArray = [
            $id1->getHumanReadableId(),
            $id2->getHumanReadableId(),
            $id3->getHumanReadableId()
        ];

        // Act
        /** @var IdCollection $idCollection */
        $idCollection = IdCollection::create();
        $idCollection->add($id1);
        $idCollection->add($id2);
        $idCollection->add($id3);

        // Assert
        $this->assertEquals(IdCollection::fromStringArray($idStringArray), $idCollection);
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $id1 = IdStub::fromString('9b01b7c2-6f9b-11eb-9439-0242ac130002');

        // Act
        $idCollection = IdCollection::create();
        $idCollection[0] = $id1;

        // Assert
        $this->assertEquals($id1, $idCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Id::class);

        $id1 = new stdClass();

        $idCollection = IdCollection::create();
        $idCollection->add($id1);
    }
}
