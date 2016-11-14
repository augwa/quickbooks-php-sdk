<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * SalesItem detail for a transaction line.
 *
 * Class SalesItemLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class SalesItemLineDetailModel
    extends ItemLineDetailModel
{

    /**
     * @var float
     */
    private $DiscountAmt;

    /**
     * @var float
     */
    private $DiscountRate;

    /**
     * @var IntuitAnyTypeModel
     */
    private $SalesItemLineDetailEx;

    /**
     * @var \DateTime
     */
    private $ServiceDate;

    /**
     * @var float
     */
    private $TaxInclusiveAmt;


    /**
     * Product: QBO
     * Indicates the discount amount that is applied on this line.
     *
     * @return float
     */
    public function getDiscountAmt()
    {
        return $this->DiscountAmt;
    }

    /**
     * Product: QBO
     * Indicates the discount amount that is applied on this line.
     *
     * @param float $DiscountAmt
     *
     * @return SalesItemLineDetailModel
     */
    public function setDiscountAmt(
        $DiscountAmt
    )
    {
        $this->DiscountAmt = $DiscountAmt;
        return $this;
    }

    /**
     * Product: QBO
     * Indicates the discount rate that is applied on this line.
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->DiscountRate;
    }

    /**
     * Product: QBO
     * Indicates the discount rate that is applied on this line.
     *
     * @param float $DiscountRate
     *
     * @return SalesItemLineDetailModel
     */
    public function setDiscountRate(
        $DiscountRate
    )
    {
        $this->DiscountRate = $DiscountRate;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for SalesItemDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getSalesItemLineDetailEx()
    {
        return $this->SalesItemLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for SalesItemDetail
     *
     * @param IntuitAnyTypeModel $SalesItemLineDetailEx
     *
     * @return SalesItemLineDetailModel
     */
    public function setSalesItemLineDetailEx(
        $SalesItemLineDetailEx
    )
    {
        $this->SalesItemLineDetailEx = $SalesItemLineDetailEx;
        return $this;
    }

    /**
     * Product: ALL
     * Date when the service is performed.
     *
     * @return \DateTime
     */
    public function getServiceDate()
    {
        return $this->ServiceDate;
    }

    /**
     * Product: ALL
     * Date when the service is performed.
     *
     * @param \DateTime $ServiceDate
     *
     * @return SalesItemLineDetailModel
     */
    public function setServiceDate(
        $ServiceDate
    )
    {
        $this->ServiceDate = $ServiceDate;
        return $this;
    }

    /**
     * Product: QBO
     * Indicates the total amount of line item including tax.
     *
     * @return float
     */
    public function getTaxInclusiveAmt()
    {
        return $this->TaxInclusiveAmt;
    }

    /**
     * Product: QBO
     * Indicates the total amount of line item including tax.
     *
     * @param float $TaxInclusiveAmt
     *
     * @return SalesItemLineDetailModel
     */
    public function setTaxInclusiveAmt(
        $TaxInclusiveAmt
    )
    {
        $this->TaxInclusiveAmt = $TaxInclusiveAmt;
        return $this;
    }

}