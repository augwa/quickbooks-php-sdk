<?php

namespace Augwa\QuickBooks\Model;

/**
 * Transaction recording a payment from the customer held in the
 * Undeposited Funds account into the Bank account.
 *
 * Class DepositModel
 * @package Augwa\QuickBooks\Model
 */
class DepositModel
    extends TransactionModel
{

    /**
     * @var CashBackInfoModel
     */
    private $CashBack;

    /**
     * @var IntuitAnyTypeModel
     */
    private $DepositEx;

    /**
     * @var ReferenceTypeModel
     */
    private $DepositToAccountRef;

    /**
     * @var string
     * @see GlobalTaxCalculationEnum
     */
    private $GlobalTaxCalculation;

    /**
     * @var float
     */
    private $HomeTotalAmt;

    /**
     * @var float
     */
    private $TotalAmt;


    /**
     * @return CashBackInfoModel
     */
    public function getCashBack()
    {
        return $this->CashBack;
    }

    /**
     * @param CashBackInfoModel $CashBack
     *
     * @return DepositModel
     */
    public function setCashBack(
        $CashBack
    )
    {
        $this->CashBack = $CashBack;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Deposit
     *
     * @return IntuitAnyTypeModel
     */
    public function getDepositEx()
    {
        return $this->DepositEx;
    }

    /**
     * Internal use only: extension place holder for Deposit
     *
     * @param IntuitAnyTypeModel $DepositEx
     *
     * @return DepositModel
     */
    public function setDepositEx(
        $DepositEx
    )
    {
        $this->DepositEx = $DepositEx;
        return $this;
    }

    /**
     * DepositToAccountReferenceGroup Identifies the Asset Account (bank
     * account) to be used for this Deposit.
     * QuickBooks Notes
     * Required for the create operation.
     *
     * @return ReferenceTypeModel
     */
    public function getDepositToAccountRef()
    {
        return $this->DepositToAccountRef;
    }

    /**
     * DepositToAccountReferenceGroup Identifies the Asset Account (bank
     * account) to be used for this Deposit.
     * QuickBooks Notes
     * Required for the create operation.
     *
     * @param ReferenceTypeModel $DepositToAccountRef
     *
     * @return DepositModel
     */
    public function setDepositToAccountRef(
        $DepositToAccountRef
    )
    {
        $this->DepositToAccountRef = $DepositToAccountRef;
        return $this;
    }

    /**
     * Product: QBO
     * Indicates the GlobalTax model if the model inclusive of tax, exclusive
     * of taxes or not applicable
     *
     * @return string
     *
     * @see GlobalTaxCalculationEnum
     */
    public function getGlobalTaxCalculation()
    {
        return $this->GlobalTaxCalculation;
    }

    /**
     * Product: QBO
     * Indicates the GlobalTax model if the model inclusive of tax, exclusive
     * of taxes or not applicable
     *
     * @param string $GlobalTaxCalculation
     *
     * @return DepositModel
     *
     * @see GlobalTaxCalculationEnum
     */
    public function setGlobalTaxCalculation(
        $GlobalTaxCalculation
    )
    {
        $this->GlobalTaxCalculation = $GlobalTaxCalculation;
        return $this;
    }

    /**
     * Product: ALL
     * Total amount of the transaction in the home currency for
     * multi-currency enabled companies. Single currency companies will not
     * have this field. Includes the total of all the charges, allowances and
     * taxes. Calculated by QuickBooks business logic. Cannot be written to
     * QuickBooks.
     *
     * @return float
     */
    public function getHomeTotalAmt()
    {
        return $this->HomeTotalAmt;
    }

    /**
     * Product: ALL
     * Total amount of the transaction in the home currency for
     * multi-currency enabled companies. Single currency companies will not
     * have this field. Includes the total of all the charges, allowances and
     * taxes. Calculated by QuickBooks business logic. Cannot be written to
     * QuickBooks.
     *
     * @param float $HomeTotalAmt
     *
     * @return DepositModel
     */
    public function setHomeTotalAmt(
        $HomeTotalAmt
    )
    {
        $this->HomeTotalAmt = $HomeTotalAmt;
        return $this;
    }

    /**
     * Total amount of Deposit.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }

    /**
     * Total amount of Deposit.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param float $TotalAmt
     *
     * @return DepositModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

}