<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial Transaction information that pertains to the entire Check.
 *
 * Class PurchaseModel
 * @package Augwa\QuickBooks\Model
 */
class PurchaseModel
    extends TransactionModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;

    /**
     * @var bool
     */
    private $Credit;

    /**
     * @var ReferenceTypeModel
     */
    private $EntityRef;

    /**
     * @var string
     * @see GlobalTaxCalculationEnum
     */
    private $GlobalTaxCalculation;

    /**
     * @var string
     */
    private $Memo;

    /**
     * @var ReferenceTypeModel
     */
    private $PaymentMethodRef;

    /**
     * @var string
     */
    private $PaymentRefNum;

    /**
     * @var string
     * @see PaymentTypeEnum
     */
    private $PaymentType;

    /**
     * @var string
     * @see PrintStatusEnum
     */
    private $PrintStatus;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PurchaseEx;

    /**
     * @var PhysicalAddressModel
     */
    private $RemitToAddr;

    /**
     * @var float
     */
    private $TotalAmt;


    /**
     * Specifies the account reference. Check should have bank account,
     * CreditCard should specify credit card account
     *
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * Specifies the account reference. Check should have bank account,
     * CreditCard should specify credit card account
     *
     * @param ReferenceTypeModel $AccountRef
     *
     * @return PurchaseModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

    /**
     * If Credit is Null or False, it is considered as Charge. If true, the
     * CreditCard represents a Refund. Valid only for CreditCard transaction
     * Filterable: QBW
     *
     * @return bool
     */
    public function getCredit()
    {
        return $this->Credit;
    }

    /**
     * If Credit is Null or False, it is considered as Charge. If true, the
     * CreditCard represents a Refund. Valid only for CreditCard transaction
     * Filterable: QBW
     *
     * @param bool $Credit
     *
     * @return PurchaseModel
     */
    public function setCredit(
        $Credit
    )
    {
        $this->Credit = $Credit;
        return $this;
    }

    /**
     * Specifies the party to whom a expense is associated with. Can be
     * Customer, Vendor, Employee (or OtherName in case of QBW)
     *
     * @return ReferenceTypeModel
     */
    public function getEntityRef()
    {
        return $this->EntityRef;
    }

    /**
     * Specifies the party to whom a expense is associated with. Can be
     * Customer, Vendor, Employee (or OtherName in case of QBW)
     *
     * @param ReferenceTypeModel $EntityRef
     *
     * @return PurchaseModel
     */
    public function setEntityRef(
        $EntityRef
    )
    {
        $this->EntityRef = $EntityRef;
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
     * @return PurchaseModel
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
     * Memo that will be printed in check in case of Check purchase, Memo
     * appears on the expense report for CreditCard, Memo for CashPurchase
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->Memo;
    }

    /**
     * Memo that will be printed in check in case of Check purchase, Memo
     * appears on the expense report for CreditCard, Memo for CashPurchase
     *
     * @param string $Memo
     *
     * @return PurchaseModel
     */
    public function setMemo(
        $Memo
    )
    {
        $this->Memo = $Memo;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the PaymentMethod.
     *
     * @return ReferenceTypeModel
     */
    public function getPaymentMethodRef()
    {
        return $this->PaymentMethodRef;
    }

    /**
     * Product: ALL
     * Reference to the PaymentMethod.
     *
     * @param ReferenceTypeModel $PaymentMethodRef
     *
     * @return PurchaseModel
     */
    public function setPaymentMethodRef(
        $PaymentMethodRef
    )
    {
        $this->PaymentMethodRef = $PaymentMethodRef;
        return $this;
    }

    /**
     * Product: ALL
     * The reference number for the payment received (I.e. Check # for a
     * check, envelope # for a cash donation, CreditCardTransactionID for a
     * credit card payment)
     *
     * @return string
     */
    public function getPaymentRefNum()
    {
        return $this->PaymentRefNum;
    }

    /**
     * Product: ALL
     * The reference number for the payment received (I.e. Check # for a
     * check, envelope # for a cash donation, CreditCardTransactionID for a
     * credit card payment)
     *
     * @param string $PaymentRefNum
     *
     * @return PurchaseModel
     */
    public function setPaymentRefNum(
        $PaymentRefNum
    )
    {
        $this->PaymentRefNum = $PaymentRefNum;
        return $this;
    }

    /**
     * Required element. No defaults. Expense Type can be Cash, Check or
     * CreditCard
     * Cash based expense is not supported by QBW.
     * Filterable: QBW
     *
     * @return string
     *
     * @see PaymentTypeEnum
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * Required element. No defaults. Expense Type can be Cash, Check or
     * CreditCard
     * Cash based expense is not supported by QBW.
     * Filterable: QBW
     *
     * @param string $PaymentType
     *
     * @return PurchaseModel
     *
     * @see PaymentTypeEnum
     */
    public function setPaymentType(
        $PaymentType
    )
    {
        $this->PaymentType = $PaymentType;
        return $this;
    }

    /**
     * PrintStatus if to be printed or already printed information
     *
     * @return string
     *
     * @see PrintStatusEnum
     */
    public function getPrintStatus()
    {
        return $this->PrintStatus;
    }

    /**
     * PrintStatus if to be printed or already printed information
     *
     * @param string $PrintStatus
     *
     * @return PurchaseModel
     *
     * @see PrintStatusEnum
     */
    public function setPrintStatus(
        $PrintStatus
    )
    {
        $this->PrintStatus = $PrintStatus;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Purchase.
     *
     * @return IntuitAnyTypeModel
     */
    public function getPurchaseEx()
    {
        return $this->PurchaseEx;
    }

    /**
     * Internal use only: extension place holder for Purchase.
     *
     * @param IntuitAnyTypeModel $PurchaseEx
     *
     * @return PurchaseModel
     */
    public function setPurchaseEx(
        $PurchaseEx
    )
    {
        $this->PurchaseEx = $PurchaseEx;
        return $this;
    }

    /**
     * Address to which the payment should be sent.Output only.
     *
     * @return PhysicalAddressModel
     */
    public function getRemitToAddr()
    {
        return $this->RemitToAddr;
    }

    /**
     * Address to which the payment should be sent.Output only.
     *
     * @param PhysicalAddressModel $RemitToAddr
     *
     * @return PurchaseModel
     */
    public function setRemitToAddr(
        $RemitToAddr
    )
    {
        $this->RemitToAddr = $RemitToAddr;
        return $this;
    }

    /**
     * The total amount due, determined by taking the sum of all lines
     * associated.  This includes all charges, allowances, taxes, discounts,
     * etc...
     * QuickBooks Notes
     * Non QB-writable.
     * Output only field in case of QBO
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }

    /**
     * The total amount due, determined by taking the sum of all lines
     * associated.  This includes all charges, allowances, taxes, discounts,
     * etc...
     * QuickBooks Notes
     * Non QB-writable.
     * Output only field in case of QBO
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $TotalAmt
     *
     * @return PurchaseModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

}