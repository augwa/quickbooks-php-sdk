<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * You can use price levels to specify custom pricing for specific
 * customers. Once you create a price level for a customer, QuickBooks
 * will automatically use the custom price in new invoices, sales
 * receipts, sales orders or credit memos for that customer. You can
 * override this automatic feature, however, when you create the
 * invoices, sales receipts, etc. The user can now specify a price level
 * on line items in the following supported sales transactions: invoices,
 * sales receipts, credit memos, and sales orders. Notice that the
 * response data for the affected sales transaction does not list the
 * price level that was used. The response simply lists the Rate for the
 * item, which was set using the price level.
 *
 * Class PriceLevelModel
 * @package Augwa\QuickBooks\Model
 */
class PriceLevelModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var ReferenceTypeModel
     */
    private $CurrencyRef;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PriceLevelEx;

    /**
     * @var string
     * @see PriceLevelTypeEnum
     */
    private $PriceLevelType;


    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     *
     * @return PriceLevelModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the currency in which the price level is expressed.
     *
     * @return ReferenceTypeModel
     */
    public function getCurrencyRef()
    {
        return $this->CurrencyRef;
    }

    /**
     * Product: QBW
     * Reference to the currency in which the price level is expressed.
     *
     * @param ReferenceTypeModel $CurrencyRef
     *
     * @return PriceLevelModel
     */
    public function setCurrencyRef(
        $CurrencyRef
    )
    {
        $this->CurrencyRef = $CurrencyRef;
        return $this;
    }

    /**
     * Product: QBW
     * User-visible name of the price level
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBW
     * User-visible name of the price level
     *
     * @param string $Name
     *
     * @return PriceLevelModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Internal use only: extension place holder for PriceLevel
     *
     * @return IntuitAnyTypeModel
     */
    public function getPriceLevelEx()
    {
        return $this->PriceLevelEx;
    }

    /**
     * Internal use only: extension place holder for PriceLevel
     *
     * @param IntuitAnyTypeModel $PriceLevelEx
     *
     * @return PriceLevelModel
     */
    public function setPriceLevelEx(
        $PriceLevelEx
    )
    {
        $this->PriceLevelEx = $PriceLevelEx;
        return $this;
    }

    /**
     * @return string
     *
     * @see PriceLevelTypeEnum
     */
    public function getPriceLevelType()
    {
        return $this->PriceLevelType;
    }

    /**
     * @param string $PriceLevelType
     *
     * @return PriceLevelModel
     *
     * @see PriceLevelTypeEnum
     */
    public function setPriceLevelType(
        $PriceLevelType
    )
    {
        $this->PriceLevelType = $PriceLevelType;
        return $this;
    }

}