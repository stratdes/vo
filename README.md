[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/stratdes/vo/badges/quality-score.png?b=1.1.0)](https://scrutinizer-ci.com/g/stratdes/vo/?branch=1.1.0)
[![Build Status](https://scrutinizer-ci.com/g/stratdes/vo/badges/build.png?b=1.1.0)](https://scrutinizer-ci.com/g/stratdes/vo/build-status/1.1.0)
[![Code Coverage](https://scrutinizer-ci.com/g/stratdes/vo/badges/coverage.png?b=1.1.0)](https://scrutinizer-ci.com/g/stratdes/vo/?branch=1.1.0)

# StraTDeS VO library

StraTDeS VO is a library containing some standard value objects ready to use.

## Installation

To install the library just run:

```bash
composer require stratdes/vo
```

## Usage

Using this library is quite straightforward. All the Value Objects have a named constructor, usually create or fromValue.

Some examples:

```php
use StraTDeS\VO\Single\Currency;
use StraTDeS\VO\Single\Money;
use StraTDeS\VO\Single\Name;
use StraTDeS\VO\Single\Description;
use StraTDeS\VO\Single\PhoneNumber;

$name = Name::fromValue("John Smith");
$description = Description::fromValue("This is a description");
$money = Money::create(
    20034,
    Currency::fromValue(Currency::USD)
);
$phoneNumber = PhoneNumber::create("34", "938140000");
```

You can use collections, also. For example, for a collection of Emails, you have:

```php
use StraTDeS\VO\Collection\EmailCollection;
use StraTDeS\VO\Single\Email;

$emailCollection = EmailCollection::create();

$emailCollection->add(Email::fromValue('email1@mail.com'));
$emailCollection->add(Email::fromValue('email2@mail.com'));
$emailCollection->add(Email::fromValue('email3@mail.com'));

foreach($emailCollection as $email) {
    echo $email->value() . "\n\r";
}
```

## Issues

If you find some issue in the library, please feel free to open an issue here on Github.
