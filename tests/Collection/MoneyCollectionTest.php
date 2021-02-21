<?php

namespace StraTDeS\VO\Tests\Collection;

use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Collection\MoneyCollection;
use StraTDeS\VO\Single\Currency;
use StraTDeS\VO\Single\Money;

class MoneyCollectionTest extends TestCase
{
    public function testGivenValidMoneyAValidMoneyCollectionIsReturned(): void
    {
        // Arrange
        $money1 = Money::create(2320, Currency::fromValue(Currency::EUR));
        $money2 = Money::create(32423, Currency::fromValue(Currency::USD));
        $money3 = Money::create(23423,Currency::fromValue(Currency::VES));
        $moneyArray = [
            $money1,
            $money2,
            $money3
        ];

        // Act
        $moneyCollection = MoneyCollection::create();
        $moneyCollection->add($money1);
        $moneyCollection->add($money2);
        $moneyCollection->add($money3);

        // Assert
        $this->assertInstanceOf(MoneyCollection::class, $moneyCollection);
        $this->assertEquals($money1, $moneyCollection[0]);
        $this->assertEquals($money2, $moneyCollection[1]);
        $this->assertEquals($money3, $moneyCollection[2]);
        $this->assertEquals(
            $moneyArray,
            $moneyCollection->items()
        );
        $this->assertEquals(3, count($moneyCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($moneyArray[$i], $moneyCollection[$i]);
        }

        foreach($moneyCollection as $key => $money) {
            $this->assertInstanceOf(Money::class, $money);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $money1 = Money::create(2320, Currency::fromValue(Currency::EUR));

        // Act
        $moneyCollection = MoneyCollection::create();
        $moneyCollection[0] = $money1;

        // Assert
        $this->assertEquals($money1, $moneyCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Money::class);

        $money1 = new \stdClass();

        $moneyCollection = MoneyCollection::create();
        $moneyCollection->add($money1);
    }
}
