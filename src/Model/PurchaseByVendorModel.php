<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial Transaction information that pertains to the entire Bill.
 *
 * Class PurchaseByVendorModel
 * @package Augwa\QuickBooks\Model
 */
class PurchaseByVendorModel
    extends TransactionModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $APAccountRef;

    /**
     * @var EmailAddressModel
     */
    private $BillEmail;

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
     * @var EmailAddressModel
     */
    private $ReplyEmail;

    /**
     * @var float
     */
    private $TotalAmt;

    /**
     * @var ReferenceTypeModel
     */
    private $VendorRef;


    /**
     * Specifies which AP account the bill will be credited to. Many/most
     * small businesses have a single AP account, so the account is implied. 
     * When specified, the account must be a Liability account, and further,
     * the sub-type must be of type "Payables"
     * QuickBooks Notes
     * The AP Account should always be specified or a default will be used.
     *
     * @return ReferenceTypeModel
     */
    public function getAPAccountRef()
    {
        return $this->APAccountRef;
    }

    /**
     * Specifies which AP account the bill will be credited to. Many/most
     * small businesses have a single AP account, so the account is implied. 
     * When specified, the account must be a Liability account, and further,
     * the sub-type must be of type "Payables"
     * QuickBooks Notes
     * The AP Account should always be specified or a default will be used.
     *
     * @param ReferenceTypeModel $APAccountRef
     *
     * @return PurchaseByVendorModel
     */
    public function setAPAccountRef(
        $APAccountRef
    )
    {
        $this->APAccountRef = $APAccountRef;
        return $this;
    }

    /**
     * Product: QBW
     * The email address to which this bill is/was sent.  Non QB-writable.
     *
     * @return EmailAddressModel
     */
    public function getBillEmail()
    {
        return $this->BillEmail;
    }

    /**
     * Product: QBW
     * The email address to which this bill is/was sent.  Non QB-writable.
     *
     * @param EmailAddressModel $BillEmail
     *
     * @return PurchaseByVendorModel
     */
    public function setBillEmail(
        $BillEmail
    )
    {
        $this->BillEmail = $BillEmail;
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
     * @return PurchaseByVendorModel
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
     * QBW only. Memo to be visible to Payee
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->Memo;
    }

    /**
     * QBW only. Memo to be visible to Payee
     *
     * @param string $Memo
     *
     * @return PurchaseByVendorModel
     */
    public function setMemo(
        $Memo
    )
    {
        $this->Memo = $Memo;
        return $this;
    }

    /**
     * Product: QBW
     * The email address to which inquiries about the bill may be directed.
     * (Also appropriate for paypal payments).  Non QB-writable.
     *
     * @return EmailAddressModel
     */
    public function getReplyEmail()
    {
        return $this->ReplyEmail;
    }

    /**
     * Product: QBW
     * The email address to which inquiries about the bill may be directed.
     * (Also appropriate for paypal payments).  Non QB-writable.
     *
     * @param EmailAddressModel $ReplyEmail
     *
     * @return PurchaseByVendorModel
     */
    public function setReplyEmail(
        $ReplyEmail
    )
    {
        $this->ReplyEmail = $ReplyEmail;
        return $this;
    }

    /**
     * Product: ALL
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
     * Product: ALL
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
     * @return PurchaseByVendorModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the vendor reference for this transaction
     * Filterable: QBW
     *
     * @return ReferenceTypeModel
     */
    public function getVendorRef()
    {
        return $this->VendorRef;
    }

    /**
     * Product: ALL
     * Specifies the vendor reference for this transaction
     * Filterable: QBW
     *
     * @param ReferenceTypeModel $VendorRef
     *
     * @return PurchaseByVendorModel
     */
    public function setVendorRef(
        $VendorRef
    )
    {
        $this->VendorRef = $VendorRef;
        return $this;
    }

}