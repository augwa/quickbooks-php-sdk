<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial transaction representing a refund (or credit) of payment or
 * part of a payment for goods or services that have been sold.
 *
 * Class CreditMemoModel
 * @package Augwa\QuickBooks\Model
 */
class CreditMemoModel
    extends SalesTransactionModel
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $CreditMemoEx;

    /**
     * @var float
     */
    private $RemainingCredit;


    /**
     * Internal use only: extension place holder for CreditMemo
     *
     * @return IntuitAnyTypeModel
     */
    public function getCreditMemoEx()
    {
        return $this->CreditMemoEx;
    }

    /**
     * Internal use only: extension place holder for CreditMemo
     *
     * @param IntuitAnyTypeModel $CreditMemoEx
     *
     * @return CreditMemoModel
     */
    public function setCreditMemoEx(
        $CreditMemoEx
    )
    {
        $this->CreditMemoEx = $CreditMemoEx;
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
     * @return CreditMemoModel
     */
    public function setRemainingCredit(
        $RemainingCredit
    )
    {
        $this->RemainingCredit = $RemainingCredit;
        return $this;
    }

}