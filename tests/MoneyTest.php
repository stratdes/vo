<?php

namespace StraTDeS\VO\Tests;

use StraTDeS\VO\Currency;
use StraTDeS\VO\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function dataProvider(): array
    {
        return [
            [12456, 124.56, Currency::fromValue(Currency::EUR), 'EUR 124.56'],
            [2346656, 23466.56, Currency::fromValue(Currency::USD), 'USD 23,466.56'],
            [536435345, 53643.5345, Currency::fromValue(Currency::UYW), 'UYW 53,643.5345'],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param int $amount
     * @param float $amountFloat
     * @param Currency $currency
     * @param string $formatted
     */
    public function testGivenValidDataItReturnsAValidMoneyVO(
        int $amount,
        float $amountFloat,
        Currency $currency,
        string $formatted
    ): void
    {
        // Act
        $money = Money::create($amount, $currency);

        // Assert
        $this->assertInstanceOf(Money::class, $money);
        $this->assertEquals($amount, $money->amount());
        $this->assertEquals($currency, $money->currency());
        $this->assertEquals($amountFloat, $money->amountFloat());
        $this->assertEquals($formatted, $money->formatted());
    }
}
