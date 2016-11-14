<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes the properties of currencies defined in QuickBooks.
 * QuickBooks supports the world's common currencies.
 *
 * Class CurrencyModel
 * @package Augwa\QuickBooks\Model
 */
class CurrencyModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var \DateTime
     */
    private $AsOfDate;

    /**
     * @var string
     * @see CurrencyCodeEnum
     */
    private $Code;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CurrencyEx;

    /**
     * @var int
     */
    private $DecimalPlaces;

    /**
     * @var string
     */
    private $DecimalSeparator;

    /**
     * @var float
     */
    private $ExchangeRate;

    /**
     * @var string
     */
    private $Format;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Separator;

    /**
     * @var string
     */
    private $Symbol;

    /**
     * @var string
     * @see SymbolPositionEnum
     */
    private $SymbolPosition;

    /**
     * @var bool
     */
    private $UserDefined;


    /**
     * Whether or not active inactive Currency may be hidden from most
     * display purposes and may not be used on financial transactions.
     * QuickBooks Notes
     * Inactive Currencies are not used when downloading the exchange rates.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not active inactive Currency may be hidden from most
     * display purposes and may not be used on financial transactions.
     * QuickBooks Notes
     * Inactive Currencies are not used when downloading the exchange rates.
     *
     * @param bool $Active
     *
     * @return CurrencyModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAsOfDate()
    {
        return $this->AsOfDate;
    }

    /**
     * @param \DateTime $AsOfDate
     *
     * @return CurrencyModel
     */
    public function setAsOfDate(
        $AsOfDate
    )
    {
        $this->AsOfDate = $AsOfDate;
        return $this;
    }

    /**
     * Currency universal 3-letter code, like USD, CAD, EUR, etc.
     * QuickBooks Notes
     * Required for the create operation.
     * Max Length: 3
     *
     * @return string
     *
     * @see CurrencyCodeEnum
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Currency universal 3-letter code, like USD, CAD, EUR, etc.
     * QuickBooks Notes
     * Required for the create operation.
     * Max Length: 3
     *
     * @param string $Code
     *
     * @return CurrencyModel
     *
     * @see CurrencyCodeEnum
     */
    public function setCode(
        $Code
    )
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Currency
     *
     * @return IntuitAnyTypeModel
     */
    public function getCurrencyEx()
    {
        return $this->CurrencyEx;
    }

    /**
     * Internal use only: extension place holder for Currency
     *
     * @param IntuitAnyTypeModel $CurrencyEx
     *
     * @return CurrencyModel
     */
    public function setCurrencyEx(
        $CurrencyEx
    )
    {
        $this->CurrencyEx = $CurrencyEx;
        return $this;
    }

    /**
     * Specifies how many decimal places can be shown. Usually there will be
     * 2, or 0 for currencies without "cents".
     * QuickBooks Notes
     * Max Length: 1
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->DecimalPlaces;
    }

    /**
     * Specifies how many decimal places can be shown. Usually there will be
     * 2, or 0 for currencies without "cents".
     * QuickBooks Notes
     * Max Length: 1
     *
     * @param int $DecimalPlaces
     *
     * @return CurrencyModel
     */
    public function setDecimalPlaces(
        $DecimalPlaces
    )
    {
        $this->DecimalPlaces = $DecimalPlaces;
        return $this;
    }

    /**
     * Used for display purpose, can be a comma or a period.
     *
     * @return string
     */
    public function getDecimalSeparator()
    {
        return $this->DecimalSeparator;
    }

    /**
     * Used for display purpose, can be a comma or a period.
     *
     * @param string $DecimalSeparator
     *
     * @return CurrencyModel
     */
    public function setDecimalSeparator(
        $DecimalSeparator
    )
    {
        $this->DecimalSeparator = $DecimalSeparator;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     *
     * @return CurrencyModel
     */
    public function setExchangeRate(
        $ExchangeRate
    )
    {
        $this->ExchangeRate = $ExchangeRate;
        return $this;
    }

    /**
     * Specifies how to present the value, used for the display purpose for
     * example, ##,###,### or #,##,##,###
     * QuickBooks Notes
     * Max Length: 32
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * Specifies how to present the value, used for the display purpose for
     * example, ##,###,### or #,##,##,###
     * QuickBooks Notes
     * Max Length: 32
     *
     * @param string $Format
     *
     * @return CurrencyModel
     */
    public function setFormat(
        $Format
    )
    {
        $this->Format = $Format;
        return $this;
    }

    /**
     * Currency name.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Currency name.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @param string $Name
     *
     * @return CurrencyModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * "Thousand separator" character, used for the display purpose.
     * QuickBooks Notes
     * Max Length: 1
     *
     * @return string
     */
    public function getSeparator()
    {
        return $this->Separator;
    }

    /**
     * "Thousand separator" character, used for the display purpose.
     * QuickBooks Notes
     * Max Length: 1
     *
     * @param string $Separator
     *
     * @return CurrencyModel
     */
    public function setSeparator(
        $Separator
    )
    {
        $this->Separator = $Separator;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->Symbol;
    }

    /**
     * @param string $Symbol
     *
     * @return CurrencyModel
     */
    public function setSymbol(
        $Symbol
    )
    {
        $this->Symbol = $Symbol;
        return $this;
    }

    /**
     * Used for display purpose to specify where to show the Currency Symbol.
     *
     * @return string
     *
     * @see SymbolPositionEnum
     */
    public function getSymbolPosition()
    {
        return $this->SymbolPosition;
    }

    /**
     * Used for display purpose to specify where to show the Currency Symbol.
     *
     * @param string $SymbolPosition
     *
     * @return CurrencyModel
     *
     * @see SymbolPositionEnum
     */
    public function setSymbolPosition(
        $SymbolPosition
    )
    {
        $this->SymbolPosition = $SymbolPosition;
        return $this;
    }

    /**
     * QuickBooks Notes
     * QuickBooks predefines the most common world currencies, however it
     * does allow the user to define the new one.
     * The user-defined currency however cannot have the exchange rates
     * downloaded.
     *
     * @return bool
     */
    public function getUserDefined()
    {
        return $this->UserDefined;
    }

    /**
     * QuickBooks Notes
     * QuickBooks predefines the most common world currencies, however it
     * does allow the user to define the new one.
     * The user-defined currency however cannot have the exchange rates
     * downloaded.
     *
     * @param bool $UserDefined
     *
     * @return CurrencyModel
     */
    public function setUserDefined(
        $UserDefined
    )
    {
        $this->UserDefined = $UserDefined;
        return $this;
    }

}