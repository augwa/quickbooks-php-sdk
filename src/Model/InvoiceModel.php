<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * The Invoice entity represents an invoice to a customer. Invoice could
 * be based on salesterm with invoice and due dates for payment. Invoice
 * supports sales tax, and shipping charges as a special line item.
 * Invoice can be printed and emailed to a customer.
 * Business Rules:  An invoice must have at least one line that describes
 * the item and an amount. An invoice must have a reference to a customer
 * in the header.
 * Product: QBW
 * An Invoice is a financial transaction representing a request for
 * payment for goods or services that have been sold. An invoice is a
 * form that records the details of a customer's purchase, such as
 * quantity and price of the goods or services. An invoice records the
 * amount owed by a customer who does not pay in full at the time of
 * purchase. If full payment is received at the time of purchase, the
 * sale may be recorded as a sales receipt, not an invoice.  An invoice
 * must contain a valid customer reference in the CustomerId field and at
 * least one line item. The referenced customer must already exist in the
 * QuickBooks company at the desktop and any line items must also already
 * exists in the QuickBooks company, or the attempt to sync will fail.In
 * general, it is a good practice to specify all the header fields if you
 * have the data.  You should always specify the ARAccountId; otherwise a
 * default AR account will be used and this may give you unexpected
 * results. If you want to apply one tax to all the transaction line
 * items, use the TaxId or TaxGroupId field. If you want to use more than
 * one tax, you need to use Tax Line items instead.
 * Business Rules:  An invoice must have at least one line that describes
 * the item.  If an account is specified in the header, the account must
 * be of the Accounts Receivable (AR) type.  An invoice must have a
 * reference to a customer in the header.
 *
 * Class InvoiceModel
 * @package Augwa\QuickBooks\Model
 */
class InvoiceModel
    extends SalesTransactionModel
{

    /**
     * @var bool
     */
    private $AllowIPNPayment;

    /**
     * @var bool
     */
    private $AllowOnlineACHPayment;

    /**
     * @var bool
     */
    private $AllowOnlineCreditCardPayment;

    /**
     * @var bool
     */
    private $AllowOnlinePayment;

    /**
     * @var float
     */
    private $Deposit;

    /**
     * @var \DateTime
     */
    private $ECloudStatusTimeStamp;

    /**
     * @var string
     * @see ETransactionStatusEnum
     */
    private $EInvoiceStatus;

    /**
     * @var IntuitAnyTypeModel
     */
    private $InvoiceEx;


    /**
     * Product: QBO
     * Specifies whether customer is allowed to use IPN to pay the Invoice
     *
     * @return bool
     */
    public function getAllowIPNPayment()
    {
        return $this->AllowIPNPayment;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use IPN to pay the Invoice
     *
     * @param bool $AllowIPNPayment
     *
     * @return InvoiceModel
     */
    public function setAllowIPNPayment(
        $AllowIPNPayment
    )
    {
        $this->AllowIPNPayment = $AllowIPNPayment;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -bank or ach) to pay the Invoice
     *
     * @return bool
     */
    public function getAllowOnlineACHPayment()
    {
        return $this->AllowOnlineACHPayment;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -bank or ach) to pay the Invoice
     *
     * @param bool $AllowOnlineACHPayment
     *
     * @return InvoiceModel
     */
    public function setAllowOnlineACHPayment(
        $AllowOnlineACHPayment
    )
    {
        $this->AllowOnlineACHPayment = $AllowOnlineACHPayment;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -credit card) to pay the Invoice
     *
     * @return bool
     */
    public function getAllowOnlineCreditCardPayment()
    {
        return $this->AllowOnlineCreditCardPayment;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -credit card) to pay the Invoice
     *
     * @param bool $AllowOnlineCreditCardPayment
     *
     * @return InvoiceModel
     */
    public function setAllowOnlineCreditCardPayment(
        $AllowOnlineCreditCardPayment
    )
    {
        $this->AllowOnlineCreditCardPayment = $AllowOnlineCreditCardPayment;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online
     * payment) to pay the Invoice
     *
     * @return bool
     */
    public function getAllowOnlinePayment()
    {
        return $this->AllowOnlinePayment;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online
     * payment) to pay the Invoice
     *
     * @param bool $AllowOnlinePayment
     *
     * @return InvoiceModel
     */
    public function setAllowOnlinePayment(
        $AllowOnlinePayment
    )
    {
        $this->AllowOnlinePayment = $AllowOnlinePayment;
        return $this;
    }

    /**
     * Product: QBO
     * Amount in deposit against the Invoice. Supported for Invoice only.
     *
     * @return float
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }

    /**
     * Product: QBO
     * Amount in deposit against the Invoice. Supported for Invoice only.
     *
     * @param float $Deposit
     *
     * @return InvoiceModel
     */
    public function setDeposit(
        $Deposit
    )
    {
        $this->Deposit = $Deposit;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies the eCloudStatus timeStamp(last Viewed/Sent/paid) for the
     * invoice
     *
     * @return \DateTime
     */
    public function getECloudStatusTimeStamp()
    {
        return $this->ECloudStatusTimeStamp;
    }

    /**
     * Product: QBO
     * Specifies the eCloudStatus timeStamp(last Viewed/Sent/paid) for the
     * invoice
     *
     * @param \DateTime $ECloudStatusTimeStamp
     *
     * @return InvoiceModel
     */
    public function setECloudStatusTimeStamp(
        $ECloudStatusTimeStamp
    )
    {
        $this->ECloudStatusTimeStamp = $ECloudStatusTimeStamp;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies the eInvoice Status(SENT, VIEWED, PAID) for the invoice
     *
     * @return string
     *
     * @see ETransactionStatusEnum
     */
    public function getEInvoiceStatus()
    {
        return $this->EInvoiceStatus;
    }

    /**
     * Product: QBO
     * Specifies the eInvoice Status(SENT, VIEWED, PAID) for the invoice
     *
     * @param string $EInvoiceStatus
     *
     * @return InvoiceModel
     *
     * @see ETransactionStatusEnum
     */
    public function setEInvoiceStatus(
        $EInvoiceStatus
    )
    {
        $this->EInvoiceStatus = $EInvoiceStatus;
        return $this;
    }

    /**
     * Product: ALL
     * Extension entity for Invoice.
     *
     * @return IntuitAnyTypeModel
     */
    public function getInvoiceEx()
    {
        return $this->InvoiceEx;
    }

    /**
     * Product: ALL
     * Extension entity for Invoice.
     *
     * @param IntuitAnyTypeModel $InvoiceEx
     *
     * @return InvoiceModel
     */
    public function setInvoiceEx(
        $InvoiceEx
    )
    {
        $this->InvoiceEx = $InvoiceEx;
        return $this;
    }

}