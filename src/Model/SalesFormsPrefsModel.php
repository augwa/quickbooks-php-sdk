<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines Sales Form Prefs details
 *
 * Class SalesFormsPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class SalesFormsPrefsModel
    extends Model
{

    /**
     * @var bool
     */
    private $AllowDeposit;

    /**
     * @var bool
     */
    private $AllowDiscount;

    /**
     * @var bool
     */
    private $AllowEstimates;

    /**
     * @var bool
     */
    private $AllowServiceDate;

    /**
     * @var bool
     */
    private $AllowShipping;

    /**
     * @var bool
     */
    private $AutoApplyCredit;

    /**
     * @var bool
     */
    private $AutoApplyPayments;

    /**
     * @var CustomFieldDefinitionModel
     */
    private $CustomField;

    /**
     * @var bool
     */
    private $CustomTxnNumbers;

    /**
     * @var string
     */
    private $DefaultCustomerMessage;

    /**
     * @var string
     */
    private $DefaultDeliveryMethod;

    /**
     * @var string
     */
    private $DefaultDiscountAccount;

    /**
     * @var string
     */
    private $DefaultFOB;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultItem;

    /**
     * @var float
     */
    private $DefaultMarkup;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultShipMethodRef;

    /**
     * @var string
     */
    private $DefaultShippingAccount;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultTerms;

    /**
     * @var bool
     */
    private $DelayedCharges;

    /**
     * @var bool
     */
    private $ETransactionAttachPDF;

    /**
     * @var string
     * @see ETransactionEnabledStatusEnum
     */
    private $ETransactionEnabledStatus;

    /**
     * @var bool
     */
    private $ETransactionPaymentEnabled;

    /**
     * @var string
     */
    private $EstimateMessage;

    /**
     * @var bool
     */
    private $IPNSupportEnabled;

    /**
     * @var string
     */
    private $InvoiceMessage;

    /**
     * @var bool
     */
    private $PrintItemWithZeroAmount;

    /**
     * @var bool
     */
    private $TrackReimbursableExpensesAsIncome;

    /**
     * @var bool
     */
    private $UsingPriceLevels;

    /**
     * @var bool
     */
    private $UsingProgressInvoicing;

    /**
     * @var bool
     */
    private $UsingSalesOrders;


    /**
     * Product:QBO
     * Enable Deposit on Invoice
     *
     * @return bool
     */
    public function getAllowDeposit()
    {
        return $this->AllowDeposit;
    }

    /**
     * Product:QBO
     * Enable Deposit on Invoice
     *
     * @param bool $AllowDeposit
     *
     * @return SalesFormsPrefsModel
     */
    public function setAllowDeposit(
        $AllowDeposit
    )
    {
        $this->AllowDeposit = $AllowDeposit;
        return $this;
    }

    /**
     * QBO:Enable specifying Discount
     *
     * @return bool
     */
    public function getAllowDiscount()
    {
        return $this->AllowDiscount;
    }

    /**
     * QBO:Enable specifying Discount
     *
     * @param bool $AllowDiscount
     *
     * @return SalesFormsPrefsModel
     */
    public function setAllowDiscount(
        $AllowDiscount
    )
    {
        $this->AllowDiscount = $AllowDiscount;
        return $this;
    }

    /**
     * Product:All
     * Enable specifying Estimates
     *
     * @return bool
     */
    public function getAllowEstimates()
    {
        return $this->AllowEstimates;
    }

    /**
     * Product:All
     * Enable specifying Estimates
     *
     * @param bool $AllowEstimates
     *
     * @return SalesFormsPrefsModel
     */
    public function setAllowEstimates(
        $AllowEstimates
    )
    {
        $this->AllowEstimates = $AllowEstimates;
        return $this;
    }

    /**
     * Product:QBO
     * Enable specifying Service Dates
     *
     * @return bool
     */
    public function getAllowServiceDate()
    {
        return $this->AllowServiceDate;
    }

    /**
     * Product:QBO
     * Enable specifying Service Dates
     *
     * @param bool $AllowServiceDate
     *
     * @return SalesFormsPrefsModel
     */
    public function setAllowServiceDate(
        $AllowServiceDate
    )
    {
        $this->AllowServiceDate = $AllowServiceDate;
        return $this;
    }

    /**
     * Product:QBO
     * Enable specifying Shipping Info
     *
     * @return bool
     */
    public function getAllowShipping()
    {
        return $this->AllowShipping;
    }

    /**
     * Product:QBO
     * Enable specifying Shipping Info
     *
     * @param bool $AllowShipping
     *
     * @return SalesFormsPrefsModel
     */
    public function setAllowShipping(
        $AllowShipping
    )
    {
        $this->AllowShipping = $AllowShipping;
        return $this;
    }

    /**
     * Product:ALL
     * Apply Credit Automatically
     *
     * @return bool
     */
    public function getAutoApplyCredit()
    {
        return $this->AutoApplyCredit;
    }

    /**
     * Product:ALL
     * Apply Credit Automatically
     *
     * @param bool $AutoApplyCredit
     *
     * @return SalesFormsPrefsModel
     */
    public function setAutoApplyCredit(
        $AutoApplyCredit
    )
    {
        $this->AutoApplyCredit = $AutoApplyCredit;
        return $this;
    }

    /**
     * Product:All
     * Apply Payments Automatically
     *
     * @return bool
     */
    public function getAutoApplyPayments()
    {
        return $this->AutoApplyPayments;
    }

    /**
     * Product:All
     * Apply Payments Automatically
     *
     * @param bool $AutoApplyPayments
     *
     * @return SalesFormsPrefsModel
     */
    public function setAutoApplyPayments(
        $AutoApplyPayments
    )
    {
        $this->AutoApplyPayments = $AutoApplyPayments;
        return $this;
    }

    /**
     * Product:QBO
     * Defines the CustomField definitions
     *
     * @return CustomFieldDefinitionModel
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * Product:QBO
     * Defines the CustomField definitions
     *
     * @param CustomFieldDefinitionModel $CustomField
     *
     * @return SalesFormsPrefsModel
     */
    public function setCustomField(
        $CustomField
    )
    {
        $this->CustomField = $CustomField;
        return $this;
    }

    /**
     * Product:QBo
     * Custom Transaction Numbers enabled
     *
     * @return bool
     */
    public function getCustomTxnNumbers()
    {
        return $this->CustomTxnNumbers;
    }

    /**
     * Product:QBo
     * Custom Transaction Numbers enabled
     *
     * @param bool $CustomTxnNumbers
     *
     * @return SalesFormsPrefsModel
     */
    public function setCustomTxnNumbers(
        $CustomTxnNumbers
    )
    {
        $this->CustomTxnNumbers = $CustomTxnNumbers;
        return $this;
    }

    /**
     * Product:QBO
     * Default Customer message
     *
     * @return string
     */
    public function getDefaultCustomerMessage()
    {
        return $this->DefaultCustomerMessage;
    }

    /**
     * Product:QBO
     * Default Customer message
     *
     * @param string $DefaultCustomerMessage
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultCustomerMessage(
        $DefaultCustomerMessage
    )
    {
        $this->DefaultCustomerMessage = $DefaultCustomerMessage;
        return $this;
    }

    /**
     * Product:QBO Default Delivery Method of Invoice and other sales forms -
     * Print, Email are normal options
     *
     * @return string
     */
    public function getDefaultDeliveryMethod()
    {
        return $this->DefaultDeliveryMethod;
    }

    /**
     * Product:QBO Default Delivery Method of Invoice and other sales forms -
     * Print, Email are normal options
     *
     * @param string $DefaultDeliveryMethod
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultDeliveryMethod(
        $DefaultDeliveryMethod
    )
    {
        $this->DefaultDeliveryMethod = $DefaultDeliveryMethod;
        return $this;
    }

    /**
     * QBO:Default Discount account
     *
     * @return string
     */
    public function getDefaultDiscountAccount()
    {
        return $this->DefaultDiscountAccount;
    }

    /**
     * QBO:Default Discount account
     *
     * @param string $DefaultDiscountAccount
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultDiscountAccount(
        $DefaultDiscountAccount
    )
    {
        $this->DefaultDiscountAccount = $DefaultDiscountAccount;
        return $this;
    }

    /**
     * QBW: used by QB desktop, not used by QBO
     *
     * @return string
     */
    public function getDefaultFOB()
    {
        return $this->DefaultFOB;
    }

    /**
     * QBW: used by QB desktop, not used by QBO
     *
     * @param string $DefaultFOB
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultFOB(
        $DefaultFOB
    )
    {
        $this->DefaultFOB = $DefaultFOB;
        return $this;
    }

    /**
     * Product:QBO
     * Default ItemId Reference type that is selected as part of company
     * setup
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultItem()
    {
        return $this->DefaultItem;
    }

    /**
     * Product:QBO
     * Default ItemId Reference type that is selected as part of company
     * setup
     *
     * @param ReferenceTypeModel $DefaultItem
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultItem(
        $DefaultItem
    )
    {
        $this->DefaultItem = $DefaultItem;
        return $this;
    }

    /**
     * Product:QBW
     * Default markup rate used to calculate the markup amount on the
     * transactions. To enter a markup rate of 8.5%, enter 8.5, not 0.085.
     *
     * @return float
     */
    public function getDefaultMarkup()
    {
        return $this->DefaultMarkup;
    }

    /**
     * Product:QBW
     * Default markup rate used to calculate the markup amount on the
     * transactions. To enter a markup rate of 8.5%, enter 8.5, not 0.085.
     *
     * @param float $DefaultMarkup
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultMarkup(
        $DefaultMarkup
    )
    {
        $this->DefaultMarkup = $DefaultMarkup;
        return $this;
    }

    /**
     * Product:QBW
     * Cloud Max Length: 256
     * QuickBooks Notes
     * Max Length: 31
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultShipMethodRef()
    {
        return $this->DefaultShipMethodRef;
    }

    /**
     * Product:QBW
     * Cloud Max Length: 256
     * QuickBooks Notes
     * Max Length: 31
     *
     * @param ReferenceTypeModel $DefaultShipMethodRef
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultShipMethodRef(
        $DefaultShipMethodRef
    )
    {
        $this->DefaultShipMethodRef = $DefaultShipMethodRef;
        return $this;
    }

    /**
     * Product:QBO
     * Default shipping account
     *
     * @return string
     */
    public function getDefaultShippingAccount()
    {
        return $this->DefaultShippingAccount;
    }

    /**
     * Product:QBO
     * Default shipping account
     *
     * @param string $DefaultShippingAccount
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultShippingAccount(
        $DefaultShippingAccount
    )
    {
        $this->DefaultShippingAccount = $DefaultShippingAccount;
        return $this;
    }

    /**
     * Product:QBO
     * Default Terms
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultTerms()
    {
        return $this->DefaultTerms;
    }

    /**
     * Product:QBO
     * Default Terms
     *
     * @param ReferenceTypeModel $DefaultTerms
     *
     * @return SalesFormsPrefsModel
     */
    public function setDefaultTerms(
        $DefaultTerms
    )
    {
        $this->DefaultTerms = $DefaultTerms;
        return $this;
    }

    /**
     * Product:QBO
     * Enable delayed charges
     *
     * @return bool
     */
    public function getDelayedCharges()
    {
        return $this->DelayedCharges;
    }

    /**
     * Product:QBO
     * Enable delayed charges
     *
     * @param bool $DelayedCharges
     *
     * @return SalesFormsPrefsModel
     */
    public function setDelayedCharges(
        $DelayedCharges
    )
    {
        $this->DelayedCharges = $DelayedCharges;
        return $this;
    }

    /**
     * Product:QBO
     * Specifies whether salesForm PDF should be attached with ETransaction
     * emails
     *
     * @return bool
     */
    public function getETransactionAttachPDF()
    {
        return $this->ETransactionAttachPDF;
    }

    /**
     * Product:QBO
     * Specifies whether salesForm PDF should be attached with ETransaction
     * emails
     *
     * @param bool $ETransactionAttachPDF
     *
     * @return SalesFormsPrefsModel
     */
    public function setETransactionAttachPDF(
        $ETransactionAttachPDF
    )
    {
        $this->ETransactionAttachPDF = $ETransactionAttachPDF;
        return $this;
    }

    /**
     * Product:QBO
     * Specifies ETransaction preference status
     *
     * @return string
     *
     * @see ETransactionEnabledStatusEnum
     */
    public function getETransactionEnabledStatus()
    {
        return $this->ETransactionEnabledStatus;
    }

    /**
     * Product:QBO
     * Specifies ETransaction preference status
     *
     * @param string $ETransactionEnabledStatus
     *
     * @return SalesFormsPrefsModel
     *
     * @see ETransactionEnabledStatusEnum
     */
    public function setETransactionEnabledStatus(
        $ETransactionEnabledStatus
    )
    {
        $this->ETransactionEnabledStatus = $ETransactionEnabledStatus;
        return $this;
    }

    /**
     * Product:QBO
     * Specifies whether online payments is activated
     *
     * @return bool
     */
    public function getETransactionPaymentEnabled()
    {
        return $this->ETransactionPaymentEnabled;
    }

    /**
     * Product:QBO
     * Specifies whether online payments is activated
     *
     * @param bool $ETransactionPaymentEnabled
     *
     * @return SalesFormsPrefsModel
     */
    public function setETransactionPaymentEnabled(
        $ETransactionPaymentEnabled
    )
    {
        $this->ETransactionPaymentEnabled = $ETransactionPaymentEnabled;
        return $this;
    }

    /**
     * Product:QBO
     * Message to customers on estimates only
     *
     * @return string
     */
    public function getEstimateMessage()
    {
        return $this->EstimateMessage;
    }

    /**
     * Product:QBO
     * Message to customers on estimates only
     *
     * @param string $EstimateMessage
     *
     * @return SalesFormsPrefsModel
     */
    public function setEstimateMessage(
        $EstimateMessage
    )
    {
        $this->EstimateMessage = $EstimateMessage;
        return $this;
    }

    /**
     * Product:QBO
     * IPN integration support enable status, this allows emails to include
     * IPN link
     *
     * @return bool
     */
    public function getIPNSupportEnabled()
    {
        return $this->IPNSupportEnabled;
    }

    /**
     * Product:QBO
     * IPN integration support enable status, this allows emails to include
     * IPN link
     *
     * @param bool $IPNSupportEnabled
     *
     * @return SalesFormsPrefsModel
     */
    public function setIPNSupportEnabled(
        $IPNSupportEnabled
    )
    {
        $this->IPNSupportEnabled = $IPNSupportEnabled;
        return $this;
    }

    /**
     * Product:QBO
     * Specify Invoice Message
     *
     * @return string
     */
    public function getInvoiceMessage()
    {
        return $this->InvoiceMessage;
    }

    /**
     * Product:QBO
     * Specify Invoice Message
     *
     * @param string $InvoiceMessage
     *
     * @return SalesFormsPrefsModel
     */
    public function setInvoiceMessage(
        $InvoiceMessage
    )
    {
        $this->InvoiceMessage = $InvoiceMessage;
        return $this;
    }

    /**
     * Product:QBW
     * Print Item with Zero amount or not
     *
     * @return bool
     */
    public function getPrintItemWithZeroAmount()
    {
        return $this->PrintItemWithZeroAmount;
    }

    /**
     * Product:QBW
     * Print Item with Zero amount or not
     *
     * @param bool $PrintItemWithZeroAmount
     *
     * @return SalesFormsPrefsModel
     */
    public function setPrintItemWithZeroAmount(
        $PrintItemWithZeroAmount
    )
    {
        $this->PrintItemWithZeroAmount = $PrintItemWithZeroAmount;
        return $this;
    }

    /**
     * Product:All
     *
     * @return bool
     */
    public function getTrackReimbursableExpensesAsIncome()
    {
        return $this->TrackReimbursableExpensesAsIncome;
    }

    /**
     * Product:All
     *
     * @param bool $TrackReimbursableExpensesAsIncome
     *
     * @return SalesFormsPrefsModel
     */
    public function setTrackReimbursableExpensesAsIncome(
        $TrackReimbursableExpensesAsIncome
    )
    {
        $this->TrackReimbursableExpensesAsIncome = $TrackReimbursableExpensesAsIncome;
        return $this;
    }

    /**
     * QBW: used by QB desktop, not used by QBO
     *
     * @return bool
     */
    public function getUsingPriceLevels()
    {
        return $this->UsingPriceLevels;
    }

    /**
     * QBW: used by QB desktop, not used by QBO
     *
     * @param bool $UsingPriceLevels
     *
     * @return SalesFormsPrefsModel
     */
    public function setUsingPriceLevels(
        $UsingPriceLevels
    )
    {
        $this->UsingPriceLevels = $UsingPriceLevels;
        return $this;
    }

    /**
     * Product:All
     *
     * @return bool
     */
    public function getUsingProgressInvoicing()
    {
        return $this->UsingProgressInvoicing;
    }

    /**
     * Product:All
     *
     * @param bool $UsingProgressInvoicing
     *
     * @return SalesFormsPrefsModel
     */
    public function setUsingProgressInvoicing(
        $UsingProgressInvoicing
    )
    {
        $this->UsingProgressInvoicing = $UsingProgressInvoicing;
        return $this;
    }

    /**
     * QBW: used by QB desktop, not used by QBO
     *
     * @return bool
     */
    public function getUsingSalesOrders()
    {
        return $this->UsingSalesOrders;
    }

    /**
     * QBW: used by QB desktop, not used by QBO
     *
     * @param bool $UsingSalesOrders
     *
     * @return SalesFormsPrefsModel
     */
    public function setUsingSalesOrders(
        $UsingSalesOrders
    )
    {
        $this->UsingSalesOrders = $UsingSalesOrders;
        return $this;
    }

}