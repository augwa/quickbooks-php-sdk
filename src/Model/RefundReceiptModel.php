<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial transaction representing a refund (or credit) of payment or
 * part of a payment for goods or services that have been sold.
 *
 * Class RefundReceiptModel
 * @package Augwa\QuickBooks\Model
 */
class RefundReceiptModel
    extends SalesTransactionModel
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $RefundReceiptEx;

    /**
     * @var float
     */
    private $RemainingCredit;


    /**
     * Internal use only: extension place holder for Refund
     *
     * @return IntuitAnyTypeModel
     */
    public function getRefundReceiptEx()
    {
        return $this->RefundReceiptEx;
    }

    /**
     * Internal use only: extension place holder for Refund
     *
     * @param IntuitAnyTypeModel $RefundReceiptEx
     *
     * @return RefundReceiptModel
     */
    public function setRefundReceiptEx(
        $RefundReceiptEx
    )
    {
        $this->RefundReceiptEx = $RefundReceiptEx;
        return $this;
    }

    /**
     * Indicates the total credit amount still available to apply towards the
     * payment.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return float
     */
    public function getRemainingCredit()
    {
        return $this->RemainingCredit;
    }

    /**
     * Indicates the total credit amount still available to apply towards the
     * payment.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param float $RemainingCredit
     *
     * @return RefundReceiptModel
     */
    public function setRemainingCredit(
        $RemainingCredit
    )
    {
        $this->RemainingCredit = $RemainingCredit;
        return $this;
    }

}