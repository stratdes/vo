<?php

namespace StraTDeS\VO;

class Currency
{
    const AED = 'AED';
    const AFN = 'AFN';
    const ALL = 'ALL';
    const AMD = 'AMD';
    const ANG = 'ANG';
    const AOA = 'AOA';
    const ARS = 'ARS';
    const AUD = 'AUD';
    const AWG = 'AWG';
    const AZN = 'AZN';
    const BAM = 'BAM';
    const BBD = 'BBD';
    const BDT = 'BDT';
    const BGN = 'BGN';
    const BHD = 'BHD';
    const BIF = 'BIF';
    const BMD = 'BMD';
    const BND = 'BND';
    const BOB = 'BOB';
    const BOV = 'BOV';
    const BRL = 'BRL';
    const BSD = 'BSD';
    const BTN = 'BTN';
    const BWP = 'BWP';
    const BYN = 'BYN';
    const BZD = 'BZD';
    const CAD = 'CAD';
    const CDF = 'CDF';
    const CHE = 'CHE';
    const CHF = 'CHF';
    const CHW = 'CHW';
    const CLF = 'CLF';
    const CLP = 'CLP';
    const CNY = 'CNY';
    const COP = 'COP';
    const COU = 'COU';
    const CRC = 'CRC';
    const CUC = 'CUC';
    const CUP = 'CUP';
    const CVE = 'CVE';
    const CZK = 'CZK';
    const DJF = 'DJF';
    const DKK = 'DKK';
    const DOP = 'DOP';
    const DZD = 'DZD';
    const EGP = 'EGP';
    const ERN = 'ERN';
    const ETB = 'ETB';
    const EUR = 'EUR';
    const FJD = 'FJD';
    const FKP = 'FKP';
    const GBP = 'GBP';
    const GEL = 'GEL';
    const GHS = 'GHS';
    const GIP = 'GIP';
    const GMD = 'GMD';
    const GNF = 'GNF';
    const GTQ = 'GTQ';
    const GYD = 'GYD';
    const HKD = 'HKD';
    const HNL = 'HNL';
    const HRK = 'HRK';
    const HTG = 'HTG';
    const HUF = 'HUF';
    const IDR = 'IDR';
    const ILS = 'ILS';
    const INR = 'INR';
    const IQD = 'IQD';
    const IRR = 'IRR';
    const ISK = 'ISK';
    const JMD = 'JMD';
    const JOD = 'JOD';
    const JPY = 'JPY';
    const KES = 'KES';
    const KGS = 'KGS';
    const KHR = 'KHR';
    const KMF = 'KMF';
    const KPW = 'KPW';
    const KRW = 'KRW';
    const KWD = 'KWD';
    const KYD = 'KYD';
    const KZT = 'KZT';
    const LAK = 'LAK';
    const LBP = 'LBP';
    const LKR = 'LKR';
    const LRD = 'LRD';
    const LSL = 'LSL';
    const LYD = 'LYD';
    const MAD = 'MAD';
    const MDL = 'MDL';
    const MGA = 'MGA';
    const MKD = 'MKD';
    const MMK = 'MMK';
    const MNT = 'MNT';
    const MOP = 'MOP';
    const MRU = 'MRU';
    const MUR = 'MUR';
    const MVR = 'MVR';
    const MWK = 'MWK';
    const MXN = 'MXN';
    const MXV = 'MXV';
    const MYR = 'MYR';
    const MZN = 'MZN';
    const NAD = 'NAD';
    const NGN = 'NGN';
    const NIO = 'NIO';
    const NOK = 'NOK';
    const NPR = 'NPR';
    const NZD = 'NZD';
    const OMR = 'OMR';
    const PAB = 'PAB';
    const PEN = 'PEN';
    const PGK = 'PGK';
    const PHP = 'PHP';
    const PKR = 'PKR';
    const PLN = 'PLN';
    const PYG = 'PYG';
    const QAR = 'QAR';
    const RON = 'RON';
    const RSD = 'RSD';
    const RUB = 'RUB';
    const RWF = 'RWF';
    const SAR = 'SAR';
    const SBD = 'SBD';
    const SCR = 'SCR';
    const SDG = 'SDG';
    const SEK = 'SEK';
    const SGD = 'SGD';
    const SHP = 'SHP';
    const SLL = 'SLL';
    const SOS = 'SOS';
    const SRD = 'SRD';
    const SSP = 'SSP';
    const STN = 'STN';
    const SVC = 'SVC';
    const SYP = 'SYP';
    const SZL = 'SZL';
    const THB = 'THB';
    const TJS = 'TJS';
    const TMT = 'TMT';
    const TND = 'TND';
    const TOP = 'TOP';
    const TRY = 'TRY';
    const TTD = 'TTD';
    const TWD = 'TWD';
    const TZS = 'TZS';
    const UAH = 'UAH';
    const UGX = 'UGX';
    const USD = 'USD';
    const USN = 'USN';
    const UYI = 'UYI';
    const UYU = 'UYU';
    const UYW = 'UYW';
    const UZS = 'UZS';
    const VES = 'VES';
    const VND = 'VND';
    const VUV = 'VUV';
    const WST = 'WST';
    const XAF = 'XAF';
    const XCD = 'XCD';
    const XOF = 'XOF';
    const XPF = 'XPF';
    const YER = 'YER';
    const ZAR = 'ZAR';
    const ZMW = 'ZMW';
    const ZWL = 'ZWL';

    const CONFIG = [
        'AED' => ['iso' => 784, 'decimals' => 2],
        'AFN' => ['iso' => 971, 'decimals' => 2],
        'ALL' => ['iso' => 8, 'decimals' => 2],
        'AMD' => ['iso' => 51, 'decimals' => 2],
        'ANG' => ['iso' => 532, 'decimals' => 2],
        'AOA' => ['iso' => 973, 'decimals' => 2],
        'ARS' => ['iso' => 32, 'decimals' => 3],
        'AUD' => ['iso' => 36, 'decimals' => 2],
        'AWG' => ['iso' => 533, 'decimals' => 2],
        'AZN' => ['iso' => 944, 'decimals' => 2],
        'BAM' => ['iso' => 977, 'decimals' => 2],
        'BBD' => ['iso' => 52, 'decimals' => 2],
        'BDT' => ['iso' => 50, 'decimals' => 2],
        'BGN' => ['iso' => 975, 'decimals' => 2],
        'BHD' => ['iso' => 48, 'decimals' => 3],
        'BIF' => ['iso' => 108, 'decimals' => 0],
        'BMD' => ['iso' => 60, 'decimals' => 2],
        'BND' => ['iso' => 96, 'decimals' => 2],
        'BOB' => ['iso' => 68, 'decimals' => 2],
        'BOV' => ['iso' => 984, 'decimals' => 2],
        'BRL' => ['iso' => 986, 'decimals' => 2],
        'BSD' => ['iso' => 44, 'decimals' => 2],
        'BTN' => ['iso' => 64, 'decimals' => 2],
        'BWP' => ['iso' => 72, 'decimals' => 2],
        'BYN' => ['iso' => 933, 'decimals' => 2],
        'BZD' => ['iso' => 84, 'decimals' => 2],
        'CAD' => ['iso' => 124, 'decimals' => 2],
        'CDF' => ['iso' => 976, 'decimals' => 2],
        'CHE' => ['iso' => 947, 'decimals' => 2],
        'CHF' => ['iso' => 756, 'decimals' => 2],
        'CHW' => ['iso' => 948, 'decimals' => 2],
        'CLF' => ['iso' => 990, 'decimals' => 4],
        'CLP' => ['iso' => 152, 'decimals' => 0],
        'CNY' => ['iso' => 156, 'decimals' => 2],
        'COP' => ['iso' => 170, 'decimals' => 2],
        'COU' => ['iso' => 970, 'decimals' => 2],
        'CRC' => ['iso' => 188, 'decimals' => 2],
        'CUC' => ['iso' => 931, 'decimals' => 2],
        'CUP' => ['iso' => 192, 'decimals' => 2],
        'CVE' => ['iso' => 132, 'decimals' => 2],
        'CZK' => ['iso' => 203, 'decimals' => 2],
        'DJF' => ['iso' => 262, 'decimals' => 0],
        'DKK' => ['iso' => 208, 'decimals' => 2],
        'DOP' => ['iso' => 214, 'decimals' => 2],
        'DZD' => ['iso' => 12, 'decimals' => 2],
        'EGP' => ['iso' => 818, 'decimals' => 2],
        'ERN' => ['iso' => 232, 'decimals' => 2],
        'ETB' => ['iso' => 230, 'decimals' => 2],
        'EUR' => ['iso' => 978, 'decimals' => 2],
        'FJD' => ['iso' => 242, 'decimals' => 2],
        'FKP' => ['iso' => 238, 'decimals' => 2],
        'GBP' => ['iso' => 826, 'decimals' => 2],
        'GEL' => ['iso' => 981, 'decimals' => 2],
        'GHS' => ['iso' => 936, 'decimals' => 2],
        'GIP' => ['iso' => 292, 'decimals' => 2],
        'GMD' => ['iso' => 270, 'decimals' => 2],
        'GNF' => ['iso' => 324, 'decimals' => 0],
        'GTQ' => ['iso' => 320, 'decimals' => 2],
        'GYD' => ['iso' => 328, 'decimals' => 2],
        'HKD' => ['iso' => 344, 'decimals' => 2],
        'HNL' => ['iso' => 340, 'decimals' => 2],
        'HRK' => ['iso' => 191, 'decimals' => 2],
        'HTG' => ['iso' => 332, 'decimals' => 2],
        'HUF' => ['iso' => 348, 'decimals' => 2],
        'IDR' => ['iso' => 360, 'decimals' => 2],
        'ILS' => ['iso' => 376, 'decimals' => 2],
        'INR' => ['iso' => 356, 'decimals' => 2],
        'IQD' => ['iso' => 368, 'decimals' => 3],
        'IRR' => ['iso' => 364, 'decimals' => 2],
        'ISK' => ['iso' => 352, 'decimals' => 0],
        'JMD' => ['iso' => 388, 'decimals' => 2],
        'JOD' => ['iso' => 400, 'decimals' => 3],
        'JPY' => ['iso' => 392, 'decimals' => 0],
        'KES' => ['iso' => 404, 'decimals' => 2],
        'KGS' => ['iso' => 417, 'decimals' => 2],
        'KHR' => ['iso' => 116, 'decimals' => 2],
        'KMF' => ['iso' => 174, 'decimals' => 0],
        'KPW' => ['iso' => 408, 'decimals' => 2],
        'KRW' => ['iso' => 410, 'decimals' => 0],
        'KWD' => ['iso' => 414, 'decimals' => 3],
        'KYD' => ['iso' => 136, 'decimals' => 2],
        'KZT' => ['iso' => 398, 'decimals' => 2],
        'LAK' => ['iso' => 418, 'decimals' => 2],
        'LBP' => ['iso' => 422, 'decimals' => 2],
        'LKR' => ['iso' => 144, 'decimals' => 2],
        'LRD' => ['iso' => 430, 'decimals' => 2],
        'LSL' => ['iso' => 426, 'decimals' => 2],
        'LYD' => ['iso' => 434, 'decimals' => 3],
        'MAD' => ['iso' => 504, 'decimals' => 2],
        'MDL' => ['iso' => 498, 'decimals' => 2],
        'MGA' => ['iso' => 969, 'decimals' => 2],
        'MKD' => ['iso' => 807, 'decimals' => 2],
        'MMK' => ['iso' => 104, 'decimals' => 2],
        'MNT' => ['iso' => 496, 'decimals' => 2],
        'MOP' => ['iso' => 446, 'decimals' => 2],
        'MRU' => ['iso' => 929, 'decimals' => 2],
        'MUR' => ['iso' => 480, 'decimals' => 2],
        'MVR' => ['iso' => 462, 'decimals' => 2],
        'MWK' => ['iso' => 454, 'decimals' => 2],
        'MXN' => ['iso' => 484, 'decimals' => 2],
        'MXV' => ['iso' => 979, 'decimals' => 2],
        'MYR' => ['iso' => 458, 'decimals' => 2],
        'MZN' => ['iso' => 943, 'decimals' => 2],
        'NAD' => ['iso' => 516, 'decimals' => 2],
        'NGN' => ['iso' => 566, 'decimals' => 2],
        'NIO' => ['iso' => 558, 'decimals' => 2],
        'NOK' => ['iso' => 578, 'decimals' => 2],
        'NPR' => ['iso' => 524, 'decimals' => 2],
        'NZD' => ['iso' => 554, 'decimals' => 2],
        'OMR' => ['iso' => 512, 'decimals' => 3],
        'PAB' => ['iso' => 590, 'decimals' => 2],
        'PEN' => ['iso' => 604, 'decimals' => 2],
        'PGK' => ['iso' => 598, 'decimals' => 2],
        'PHP' => ['iso' => 608, 'decimals' => 2],
        'PKR' => ['iso' => 586, 'decimals' => 2],
        'PLN' => ['iso' => 985, 'decimals' => 2],
        'PYG' => ['iso' => 600, 'decimals' => 0],
        'QAR' => ['iso' => 634, 'decimals' => 2],
        'RON' => ['iso' => 946, 'decimals' => 2],
        'RSD' => ['iso' => 941, 'decimals' => 2],
        'RUB' => ['iso' => 643, 'decimals' => 2],
        'RWF' => ['iso' => 646, 'decimals' => 0],
        'SAR' => ['iso' => 682, 'decimals' => 2],
        'SBD' => ['iso' => 90, 'decimals' => 2],
        'SCR' => ['iso' => 690, 'decimals' => 2],
        'SDG' => ['iso' => 938, 'decimals' => 2],
        'SEK' => ['iso' => 752, 'decimals' => 2],
        'SGD' => ['iso' => 702, 'decimals' => 2],
        'SHP' => ['iso' => 654, 'decimals' => 2],
        'SLL' => ['iso' => 694, 'decimals' => 2],
        'SOS' => ['iso' => 706, 'decimals' => 2],
        'SRD' => ['iso' => 968, 'decimals' => 2],
        'SSP' => ['iso' => 728, 'decimals' => 2],
        'STN' => ['iso' => 930, 'decimals' => 2],
        'SVC' => ['iso' => 222, 'decimals' => 2],
        'SYP' => ['iso' => 760, 'decimals' => 2],
        'SZL' => ['iso' => 748, 'decimals' => 2],
        'THB' => ['iso' => 764, 'decimals' => 2],
        'TJS' => ['iso' => 972, 'decimals' => 2],
        'TMT' => ['iso' => 934, 'decimals' => 2],
        'TND' => ['iso' => 788, 'decimals' => 3],
        'TOP' => ['iso' => 776, 'decimals' => 2],
        'TRY' => ['iso' => 949, 'decimals' => 2],
        'TTD' => ['iso' => 780, 'decimals' => 2],
        'TWD' => ['iso' => 901, 'decimals' => 2],
        'TZS' => ['iso' => 834, 'decimals' => 2],
        'UAH' => ['iso' => 980, 'decimals' => 2],
        'UGX' => ['iso' => 800, 'decimals' => 0],
        'USD' => ['iso' => 840, 'decimals' => 2],
        'USN' => ['iso' => 997, 'decimals' => 2],
        'UYI' => ['iso' => 940, 'decimals' => 0],
        'UYU' => ['iso' => 858, 'decimals' => 2],
        'UYW' => ['iso' => 927, 'decimals' => 4],
        'UZS' => ['iso' => 860, 'decimals' => 2],
        'VES' => ['iso' => 928, 'decimals' => 2],
        'VND' => ['iso' => 704, 'decimals' => 0],
        'VUV' => ['iso' => 548, 'decimals' => 0],
        'WST' => ['iso' => 882, 'decimals' => 2],
        'XAF' => ['iso' => 950, 'decimals' => 0],
        'XCD' => ['iso' => 951, 'decimals' => 2],
        'XOF' => ['iso' => 952, 'decimals' => 0],
        'XPF' => ['iso' => 953, 'decimals' => 0],
        'YER' => ['iso' => 886, 'decimals' => 2],
        'ZAR' => ['iso' => 710, 'decimals' => 2],
        'ZMW' => ['iso' => 967, 'decimals' => 2],
        'ZWL' => ['iso' => 932, 'decimals' => 2],
    ];

    const ALLOWED_CURRENCIES = [
        self::AED,
        self::AFN,
        self::ALL,
        self::AMD,
        self::ANG,
        self::AOA,
        self::ARS,
        self::AUD,
        self::AWG,
        self::AZN,
        self::BAM,
        self::BBD,
        self::BDT,
        self::BGN,
        self::BHD,
        self::BIF,
        self::BMD,
        self::BND,
        self::BOB,
        self::BOV,
        self::BRL,
        self::BSD,
        self::BTN,
        self::BWP,
        self::BYN,
        self::BZD,
        self::CAD,
        self::CDF,
        self::CHE,
        self::CHF,
        self::CHW,
        self::CLF,
        self::CLP,
        self::CNY,
        self::COP,
        self::COU,
        self::CRC,
        self::CUC,
        self::CUP,
        self::CVE,
        self::CZK,
        self::DJF,
        self::DKK,
        self::DOP,
        self::DZD,
        self::EGP,
        self::ERN,
        self::ETB,
        self::EUR,
        self::FJD,
        self::FKP,
        self::GBP,
        self::GEL,
        self::GHS,
        self::GIP,
        self::GMD,
        self::GNF,
        self::GTQ,
        self::GYD,
        self::HKD,
        self::HNL,
        self::HRK,
        self::HTG,
        self::HUF,
        self::IDR,
        self::ILS,
        self::INR,
        self::IQD,
        self::IRR,
        self::ISK,
        self::JMD,
        self::JOD,
        self::JPY,
        self::KES,
        self::KGS,
        self::KHR,
        self::KMF,
        self::KPW,
        self::KRW,
        self::KWD,
        self::KYD,
        self::KZT,
        self::LAK,
        self::LBP,
        self::LKR,
        self::LRD,
        self::LSL,
        self::LYD,
        self::MAD,
        self::MDL,
        self::MGA,
        self::MKD,
        self::MMK,
        self::MNT,
        self::MOP,
        self::MRU,
        self::MUR,
        self::MVR,
        self::MWK,
        self::MXN,
        self::MXV,
        self::MYR,
        self::MZN,
        self::NAD,
        self::NGN,
        self::NIO,
        self::NOK,
        self::NPR,
        self::NZD,
        self::OMR,
        self::PAB,
        self::PEN,
        self::PGK,
        self::PHP,
        self::PKR,
        self::PLN,
        self::PYG,
        self::QAR,
        self::RON,
        self::RSD,
        self::RUB,
        self::RWF,
        self::SAR,
        self::SBD,
        self::SCR,
        self::SDG,
        self::SEK,
        self::SGD,
        self::SHP,
        self::SLL,
        self::SOS,
        self::SRD,
        self::SSP,
        self::STN,
        self::SVC,
        self::SYP,
        self::SZL,
        self::THB,
        self::TJS,
        self::TMT,
        self::TND,
        self::TOP,
        self::TRY,
        self::TTD,
        self::TWD,
        self::TZS,
        self::UAH,
        self::UGX,
        self::USD,
        self::USN,
        self::UYI,
        self::UYU,
        self::UYW,
        self::UZS,
        self::VES,
        self::VND,
        self::VUV,
        self::WST,
        self::XAF,
        self::XCD,
        self::XOF,
        self::XPF,
        self::YER,
        self::ZAR,
        self::ZMW,
        self::ZWL,
    ];

    private string $value;

    private function __construct(string $currency)
    {
        $this->checkValueIsAllowed($currency);
        $this->value = $currency;
    }

    public static function fromValue(string $value): Currency
    {
        return new self($value);
    }

    private function checkValueIsAllowed(string $value): void
    {
        if (!in_array($value, self::ALLOWED_CURRENCIES)) {
            throw new \InvalidArgumentException("$value is not an allowed currency");
        }
    }

    public function value(): string
    {
        return $this->value;
    }

    public function config(): CurrencyConfig
    {
        return new CurrencyConfig(self::CONFIG[$this->value()]['iso'], self::CONFIG[$this->value()]['decimals']);
    }
}
