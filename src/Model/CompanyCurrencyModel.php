<?php

namespace Augwa\QuickBooks\Model;

/**
 * Company currency are the currencies used by the company. Each Company
 * Currency describes the properties of that currency.
 *
 * Class CompanyCurrencyModel
 * @package Augwa\QuickBooks\Model
 */
class CompanyCurrencyModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CompanyCurrencyEx;

    /**
     * @var string
     */
    private $Name;


    /**
     * Product: QBO
     * Indicates whether this currency is active in the company or not.
     * Inactive Currency may be hidden from most display purposes and may not
     * be used on financial transactions.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBO
     * Indicates whether this currency is active in the company or not.
     * Inactive Currency may be hidden from most display purposes and may not
     * be used on financial transactions.
     *
     * @param bool $Active
     *
     * @return CompanyCurrencyModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: QBO
     * Universal 3-letter currency code like USD, CAD, EUR, etc. Required for
     * the create/delete operation.
     * Max Length: 3
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Product: QBO
     * Universal 3-letter currency code like USD, CAD, EUR, etc. Required for
     * the create/delete operation.
     * Max Length: 3
     *
     * @param string $Code
     *
     * @return CompanyCurrencyModel
     */
    public function setCode(
        $Code
    )
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Company Currency
     *
     * @return IntuitAnyTypeModel
     */
    public function getCompanyCurrencyEx()
    {
        return $this->CompanyCurrencyEx;
    }

    /**
     * Internal use only: extension place holder for Company Currency
     *
     * @param IntuitAnyTypeModel $CompanyCurrencyEx
     *
     * @return CompanyCurrencyModel
     */
    public function setCompanyCurrencyEx(
        $CompanyCurrencyEx
    )
    {
        $this->CompanyCurrencyEx = $CompanyCurrencyEx;
        return $this;
    }

    /**
     * Product: QBO
     * Currency name (Output only)
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBO
     * Currency name (Output only)
     *
     * @param string $Name
     *
     * @return CompanyCurrencyModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

}