<?php

namespace StraTDeS\VO\Tests\Collection;

use StraTDeS\VO\Collection\CurrencyCollection;
use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Single\Currency;

class CurrencyCollectionTest extends TestCase
{
    public function testGivenValidCurrenciesAValidCurrencyCollectionIsReturned(): void
    {
        // Arrange
        $currency1 = Currency::fromValue(Currency::EUR);
        $currency2 = Currency::fromValue(Currency::USD);
        $currency3 = Currency::fromValue(Currency::VES);
        $currencyArray = [
            $currency1,
            $currency2,
            $currency3
        ];

        // Act
        $currencyCollection = CurrencyCollection::create();
        $currencyCollection->add($currency1);
        $currencyCollection->add($currency2);
        $currencyCollection->add($currency3);

        // Assert
        $this->assertInstanceOf(CurrencyCollection::class, $currencyCollection);
        $this->assertEquals($currency1, $currencyCollection[0]);
        $this->assertEquals($currency2, $currencyCollection[1]);
        $this->assertEquals($currency3, $currencyCollection[2]);
        $this->assertEquals(
            $currencyArray,
            $currencyCollection->items()
        );
        $this->assertEquals(3, count($currencyCollection));

        for($i = 0; $i < 3; $i++) {
            $this->assertEquals($currencyArray[$i], $currencyCollection[$i]);
        }

        foreach($currencyCollection as $currency) {
            $this->assertInstanceOf(Currency::class, $currency);
        }
    }

    public function testGivenAValueByOffsetReturnsAValidValue(): void
    {
        // Arrange
        $currency1 = Currency::fromValue(Currency::EUR);

        // Act
        $currencyCollection = CurrencyCollection::create();
        $currencyCollection[0] = $currency1;

        // Assert
        $this->assertEquals($currency1, $currencyCollection[0]);
    }

    public function testGivenAnInvalidValueItThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Provided value is not a valid " . Currency::class);

        $currency1 = new \stdClass();

        $currencyCollection = CurrencyCollection::create();
        $currencyCollection->add($currency1);
    }
}
