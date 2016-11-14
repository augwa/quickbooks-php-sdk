<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Payment detail for a transaction line.
 *
 * Class PaymentLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class PaymentLineDetailModel
    extends Model
{

    /**
     * @var float
     */
    private $Balance;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var DiscountOverrideModel
     */
    private $Discount;

    /**
     * @var float
     */
    private $HomeBalance;

    /**
     * @var ReferenceTypeModel
     */
    private $ItemRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PaymentLineEx;

    /**
     * @var \DateTime
     */
    private $ServiceDate;


    /**
     * Product: ALL
     * Indicates the unpaid amount of the transaction after this payment is
     * applied.Cannot be written to QuickBooks.
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * Product: ALL
     * Indicates the unpaid amount of the transaction after this payment is
     * applied.Cannot be written to QuickBooks.
     *
     * @param float $Balance
     *
     * @return PaymentLineDetailModel
     */
    public function setBalance(
        $Balance
    )
    {
        $this->Balance = $Balance;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Class for the line item.
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: ALL
     * Reference to the Class for the line item.
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return PaymentLineDetailModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to a Discount item and its properties that this line can
     * overwrite.
     *
     * @return DiscountOverrideModel
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * Product: ALL
     * Reference to a Discount item and its properties that this line can
     * overwrite.
     *
     * @param DiscountOverrideModel $Discount
     *
     * @return PaymentLineDetailModel
     */
    public function setDiscount(
        $Discount
    )
    {
        $this->Discount = $Discount;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates the unpaid amount of the transaction after this payment is
     * applied in home currency. It is visible only for companies which have
     * multicurrency enabled Cannot be written to Quickbooks.
     *
     * @return float
     */
    public function getHomeBalance()
    {
        return $this->HomeBalance;
    }

    /**
     * Product: ALL
     * Indicates the unpaid amount of the transaction after this payment is
     * applied in home currency. It is visible only for companies which have
     * multicurrency enabled Cannot be written to Quickbooks.
     *
     * @param float $HomeBalance
     *
     * @return PaymentLineDetailModel
     */
    public function setHomeBalance(
        $HomeBalance
    )
    {
        $this->HomeBalance = $HomeBalance;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Item. When a line lacks an ItemRef it will be treated
     * as "documentation" and the Amount will be ignored.
     *
     * @return ReferenceTypeModel
     */
    public function getItemRef()
    {
        return $this->ItemRef;
    }

    /**
     * Product: ALL
     * Reference to the Item. When a line lacks an ItemRef it will be treated
     * as "documentation" and the Amount will be ignored.
     *
     * @param ReferenceTypeModel $ItemRef
     *
     * @return PaymentLineDetailModel
     */
    public function setItemRef(
        $ItemRef
    )
    {
        $this->ItemRef = $ItemRef;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for PaymentDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getPaymentLineEx()
    {
        return $this->PaymentLineEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for PaymentDetail
     *
     * @param IntuitAnyTypeModel $PaymentLineEx
     *
     * @return PaymentLineDetailModel
     */
    public function setPaymentLineEx(
        $PaymentLineEx
    )
    {
        $this->PaymentLineEx = $PaymentLineEx;
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
     * @return PaymentLineDetailModel
     */
    public function setServiceDate(
        $ServiceDate
    )
    {
        $this->ServiceDate = $ServiceDate;
        return $this;
    }

}