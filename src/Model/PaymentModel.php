<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial transaction representing a payment from a customer applied
 * to one or more sales transactions
 *
 * Class PaymentModel
 * @package Augwa\QuickBooks\Model
 */
class PaymentModel
    extends TransactionModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $ARAccountRef;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerRef;

    /**
     * @var ReferenceTypeModel
     */
    private $DepositToAccountRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PaymentEx;

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
     * @var bool
     */
    private $ProcessPayment;

    /**
     * @var ReferenceTypeModel
     */
    private $RemitToRef;

    /**
     * @var float
     */
    private $TotalAmt;

    /**
     * @var float
     */
    private $UnappliedAmt;


    /**
     * ARAccountReferenceGroup Identifies the AR Account to be used for this
     * Payment.
     * QuickBooks Notes
     * The AR Account should always be specified or a default will be used.
     *
     * @return ReferenceTypeModel
     */
    public function getARAccountRef()
    {
        return $this->ARAccountRef;
    }

    /**
     * ARAccountReferenceGroup Identifies the AR Account to be used for this
     * Payment.
     * QuickBooks Notes
     * The AR Account should always be specified or a default will be used.
     *
     * @param ReferenceTypeModel $ARAccountRef
     *
     * @return PaymentModel
     */
    public function setARAccountRef(
        $ARAccountRef
    )
    {
        $this->ARAccountRef = $ARAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Represents Customer (or Job)Reference
     * Filterable: QBW
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * Product: ALL
     * Represents Customer (or Job)Reference
     * Filterable: QBW
     *
     * @param ReferenceTypeModel $CustomerRef
     *
     * @return PaymentModel
     */
    public function setCustomerRef(
        $CustomerRef
    )
    {
        $this->CustomerRef = $CustomerRef;
        return $this;
    }

    /**
     * Optional asset account specification to designate the account the
     * payment money needs to be deposited to.
     * QuickBooks Notes
     * If not specified, the Undeposited Funds account will be used.
     *
     * @return ReferenceTypeModel
     */
    public function getDepositToAccountRef()
    {
        return $this->DepositToAccountRef;
    }

    /**
     * Optional asset account specification to designate the account the
     * payment money needs to be deposited to.
     * QuickBooks Notes
     * If not specified, the Undeposited Funds account will be used.
     *
     * @param ReferenceTypeModel $DepositToAccountRef
     *
     * @return PaymentModel
     */
    public function setDepositToAccountRef(
        $DepositToAccountRef
    )
    {
        $this->DepositToAccountRef = $DepositToAccountRef;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Payment
     *
     * @return IntuitAnyTypeModel
     */
    public function getPaymentEx()
    {
        return $this->PaymentEx;
    }

    /**
     * Internal use only: extension place holder for Payment
     *
     * @param IntuitAnyTypeModel $PaymentEx
     *
     * @return PaymentModel
     */
    public function setPaymentEx(
        $PaymentEx
    )
    {
        $this->PaymentEx = $PaymentEx;
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
     * @return PaymentModel
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
     * @return PaymentModel
     */
    public function setPaymentRefNum(
        $PaymentRefNum
    )
    {
        $this->PaymentRefNum = $PaymentRefNum;
        return $this;
    }

    /**
     * Product: ALL
     * Valid values are Cash, Check, CreditCard, or Other. No defaults. Cash
     * based expense is not supported by QuickBooks Windows. Not applicable
     * to Estimate and SalesOrder.
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
     * Product: ALL
     * Valid values are Cash, Check, CreditCard, or Other. No defaults. Cash
     * based expense is not supported by QuickBooks Windows. Not applicable
     * to Estimate and SalesOrder.
     *
     * @param string $PaymentType
     *
     * @return PaymentModel
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
     * Indicates that the payment should be processed by merchant account
     * service. Valid for QBO companies with credit card processing.
     * QBO only field.
     *
     * @return bool
     */
    public function getProcessPayment()
    {
        return $this->ProcessPayment;
    }

    /**
     * Indicates that the payment should be processed by merchant account
     * service. Valid for QBO companies with credit card processing.
     * QBO only field.
     *
     * @param bool $ProcessPayment
     *
     * @return PaymentModel
     */
    public function setProcessPayment(
        $ProcessPayment
    )
    {
        $this->ProcessPayment = $ProcessPayment;
        return $this;
    }

    /**
     * Identifies the party or location that the payment is to be remitted to
     * or sent to.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return ReferenceTypeModel
     */
    public function getRemitToRef()
    {
        return $this->RemitToRef;
    }

    /**
     * Identifies the party or location that the payment is to be remitted to
     * or sent to.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param ReferenceTypeModel $RemitToRef
     *
     * @return PaymentModel
     */
    public function setRemitToRef(
        $RemitToRef
    )
    {
        $this->RemitToRef = $RemitToRef;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates the total amount of the entity associated. This includes the
     * total of all the payments from the Payment Details.
     * QuickBooks Notes
     * Non QB-writable.
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
     * Product: ALL
     * Indicates the total amount of the entity associated. This includes the
     * total of all the payments from the Payment Details.
     * QuickBooks Notes
     * Non QB-writable.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $TotalAmt
     *
     * @return PaymentModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

    /**
     * Indicates the amount that has not been applied to pay amounts owed for
     * sales transactions.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return float
     */
    public function getUnappliedAmt()
    {
        return $this->UnappliedAmt;
    }

    /**
     * Indicates the amount that has not been applied to pay amounts owed for
     * sales transactions.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param float $UnappliedAmt
     *
     * @return PaymentModel
     */
    public function setUnappliedAmt(
        $UnappliedAmt
    )
    {
        $this->UnappliedAmt = $UnappliedAmt;
        return $this;
    }

}