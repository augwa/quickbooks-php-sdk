<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * QBO: The Customer entityrepresents the consumer of the service or the
 * product that your business offers. QBO allows categorizing the
 * customers in a way that is meaningful to the business. For example,
 * you can set up a category of customers to indicate which industry a
 * customer represents, the geographic location of a customer, or how a
 * customer came to know about the business. The categorization can be
 * then used for reports or mails.
 * QBW: The Customer entity is a consumer of the service or product that
 * your business offers. While creating a customer, avoid entering  job
 * data. If you enter a job data, the system can prevent you from adding 
 *  more jobs for that customer. You must first create the customer, and
 * then create a job using that customer as a parent.
 * Business Rules: The customer name must be unique.The customer name
 * must not contain a colon (:).The e-mail address of the customer must
 * contain "@" and "." (dot).The customer address field is mandatory.
 *
 * Class CustomerModel
 * @package Augwa\QuickBooks\Model
 */
class CustomerModel
    extends NameBaseModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $ARAccountRef;

    /**
     * @var string
     */
    private $AcctNum;

    /**
     * @var string
     */
    private $AltContactName;

    /**
     * @var float
     */
    private $Balance;

    /**
     * @var float
     */
    private $BalanceWithJobs;

    /**
     * @var PhysicalAddressModel
     */
    private $BillAddr;

    /**
     * @var bool
     */
    private $BillWithParent;

    /**
     * @var CreditChargeInfoModel
     */
    private $CCDetail;

    /**
     * @var string
     */
    private $ContactName;

    /**
     * @var float
     */
    private $CreditLimit;

    /**
     * @var ReferenceTypeModel
     */
    private $CurrencyRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CustomerEx;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerTypeRef;

    /**
     * @var bool
     */
    private $Job;

    /**
     * @var JobInfoModel
     */
    private $JobInfo;

    /**
     * @var int
     */
    private $Level;

    /**
     * @var string
     */
    private $Notes;

    /**
     * @var \DateTime
     */
    private $OpenBalanceDate;

    /**
     * @var PhysicalAddressModel
     */
    private $OtherAddr;

    /**
     * @var float
     */
    private $OverDueBalance;

    /**
     * @var ReferenceTypeModel
     */
    private $ParentRef;

    /**
     * @var ReferenceTypeModel
     */
    private $PaymentMethodRef;

    /**
     * @var string
     */
    private $PreferredDeliveryMethod;

    /**
     * @var ReferenceTypeModel
     */
    private $PriceLevelRef;

    /**
     * @var string
     */
    private $PrimaryTaxIdentifier;

    /**
     * @var string
     */
    private $ResaleNum;

    /**
     * @var ReferenceTypeModel
     */
    private $RootCustomerRef;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesRepRef;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesTermRef;

    /**
     * @var string
     */
    private $SecondaryTaxIdentifier;

    /**
     * @var PhysicalAddressModel
     */
    private $ShipAddr;

    /**
     * @var bool
     */
    private $TDSEnabled;

    /**
     * @var bool
     */
    private $Taxable;

    /**
     * @var float
     */
    private $TotalExpense;

    /**
     * @var float
     */
    private $TotalRevenue;


    /**
     * Product: QBO
     * The A/R account ID for the customer. This is applicable only in FR
     * where each customer needs to have his own AR account.
     *
     * @return ReferenceTypeModel
     */
    public function getARAccountRef()
    {
        return $this->ARAccountRef;
    }

    /**
     * Product: QBO
     * The A/R account ID for the customer. This is applicable only in FR
     * where each customer needs to have his own AR account.
     *
     * @param ReferenceTypeModel $ARAccountRef
     *
     * @return CustomerModel
     */
    public function setARAccountRef(
        $ARAccountRef
    )
    {
        $this->ARAccountRef = $ARAccountRef;
        return $this;
    }

    /**
     * Product: QBW
     * Name or number of the account associated with this customer.Max.
     * length: 99 characters.
     *
     * @return string
     */
    public function getAcctNum()
    {
        return $this->AcctNum;
    }

    /**
     * Product: QBW
     * Name or number of the account associated with this customer.Max.
     * length: 99 characters.
     *
     * @param string $AcctNum
     *
     * @return CustomerModel
     */
    public function setAcctNum(
        $AcctNum
    )
    {
        $this->AcctNum = $AcctNum;
        return $this;
    }

    /**
     * Product: QBW
     * Name of the Alternate Customer contact.
     *
     * @return string
     */
    public function getAltContactName()
    {
        return $this->AltContactName;
    }

    /**
     * Product: QBW
     * Name of the Alternate Customer contact.
     *
     * @param string $AltContactName
     *
     * @return CustomerModel
     */
    public function setAltContactName(
        $AltContactName
    )
    {
        $this->AltContactName = $AltContactName;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the open balance amount or the amount unpaid by the
     * customer. For the create operation, this represents the opening
     * balance for the customer. When returned in response to the query
     * request it represents the current open balance (unpaid amount) for
     * that customer.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * Product: ALL
     * Specifies the open balance amount or the amount unpaid by the
     * customer. For the create operation, this represents the opening
     * balance for the customer. When returned in response to the query
     * request it represents the current open balance (unpaid amount) for
     * that customer.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $Balance
     *
     * @return CustomerModel
     */
    public function setBalance(
        $Balance
    )
    {
        $this->Balance = $Balance;
        return $this;
    }

    /**
     * Product: QBW
     * Cumulative open balance amount for the Customer (or Job) and all its
     * sub-jobs. Cannot be written to QuickBooks.
     * Product: QBO
     * Cumulative open balance amount for the Customer (or Job) and all its
     * sub-jobs.
     * Filterable: ALL
     * Non-default: ALL
     *
     * @return float
     */
    public function getBalanceWithJobs()
    {
        return $this->BalanceWithJobs;
    }

    /**
     * Product: QBW
     * Cumulative open balance amount for the Customer (or Job) and all its
     * sub-jobs. Cannot be written to QuickBooks.
     * Product: QBO
     * Cumulative open balance amount for the Customer (or Job) and all its
     * sub-jobs.
     * Filterable: ALL
     * Non-default: ALL
     *
     * @param float $BalanceWithJobs
     *
     * @return CustomerModel
     */
    public function setBalanceWithJobs(
        $BalanceWithJobs
    )
    {
        $this->BalanceWithJobs = $BalanceWithJobs;
        return $this;
    }

    /**
     * Product: ALL
     * Default billing address.
     *
     * @return PhysicalAddressModel
     */
    public function getBillAddr()
    {
        return $this->BillAddr;
    }

    /**
     * Product: ALL
     * Default billing address.
     *
     * @param PhysicalAddressModel $BillAddr
     *
     * @return CustomerModel
     */
    public function setBillAddr(
        $BillAddr
    )
    {
        $this->BillAddr = $BillAddr;
        return $this;
    }

    /**
     * Product: ALL
     * If true, this Customer is billed with its parent. If false, or null
     * the customer is not to be billed with its parent. This property is
     * valid only if this entity is a Job or sub Customer.
     *
     * @return bool
     */
    public function getBillWithParent()
    {
        return $this->BillWithParent;
    }

    /**
     * Product: ALL
     * If true, this Customer is billed with its parent. If false, or null
     * the customer is not to be billed with its parent. This property is
     * valid only if this entity is a Job or sub Customer.
     *
     * @param bool $BillWithParent
     *
     * @return CustomerModel
     */
    public function setBillWithParent(
        $BillWithParent
    )
    {
        $this->BillWithParent = $BillWithParent;
        return $this;
    }

    /**
     * Product: ALL
     * Credit-card information to request a credit card payment from a
     * merchant account service.
     *
     * @return CreditChargeInfoModel
     */
    public function getCCDetail()
    {
        return $this->CCDetail;
    }

    /**
     * Product: ALL
     * Credit-card information to request a credit card payment from a
     * merchant account service.
     *
     * @param CreditChargeInfoModel $CCDetail
     *
     * @return CustomerModel
     */
    public function setCCDetail(
        $CCDetail
    )
    {
        $this->CCDetail = $CCDetail;
        return $this;
    }

    /**
     * Product: QBW
     * Name of the Customer contact.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * Product: QBW
     * Name of the Customer contact.
     *
     * @param string $ContactName
     *
     * @return CustomerModel
     */
    public function setContactName(
        $ContactName
    )
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    /**
     * Product: QBW
     * Specifies the maximum amount of an unpaid customer balance.
     *
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->CreditLimit;
    }

    /**
     * Product: QBW
     * Specifies the maximum amount of an unpaid customer balance.
     *
     * @param float $CreditLimit
     *
     * @return CustomerModel
     */
    public function setCreditLimit(
        $CreditLimit
    )
    {
        $this->CreditLimit = $CreditLimit;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the currency code for all the business transactions
     * created for or received from the customer.
     *
     * @return ReferenceTypeModel
     */
    public function getCurrencyRef()
    {
        return $this->CurrencyRef;
    }

    /**
     * Product: ALL
     * Reference to the currency code for all the business transactions
     * created for or received from the customer.
     *
     * @param ReferenceTypeModel $CurrencyRef
     *
     * @return CustomerModel
     */
    public function setCurrencyRef(
        $CurrencyRef
    )
    {
        $this->CurrencyRef = $CurrencyRef;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for Customer.
     *
     * @return IntuitAnyTypeModel
     */
    public function getCustomerEx()
    {
        return $this->CustomerEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for Customer.
     *
     * @param IntuitAnyTypeModel $CustomerEx
     *
     * @return CustomerModel
     */
    public function setCustomerEx(
        $CustomerEx
    )
    {
        $this->CustomerEx = $CustomerEx;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to a CustomerType associated with the Customer.
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerTypeRef()
    {
        return $this->CustomerTypeRef;
    }

    /**
     * Product: QBW
     * Reference to a CustomerType associated with the Customer.
     *
     * @param ReferenceTypeModel $CustomerTypeRef
     *
     * @return CustomerModel
     */
    public function setCustomerTypeRef(
        $CustomerTypeRef
    )
    {
        $this->CustomerTypeRef = $CustomerTypeRef;
        return $this;
    }

    /**
     * Product: ALL
     * If true, this is a Job or sub-customer. If false or null, this is a
     * top level customer, not a Job or sub-customer.
     *
     * @return bool
     */
    public function getJob()
    {
        return $this->Job;
    }

    /**
     * Product: ALL
     * If true, this is a Job or sub-customer. If false or null, this is a
     * top level customer, not a Job or sub-customer.
     *
     * @param bool $Job
     *
     * @return CustomerModel
     */
    public function setJob(
        $Job
    )
    {
        $this->Job = $Job;
        return $this;
    }

    /**
     * Product: ALL
     * Information about the job. Relevant only if the Customer represents
     * the actual task or project, not just a person or organization.
     *
     * @return JobInfoModel
     */
    public function getJobInfo()
    {
        return $this->JobInfo;
    }

    /**
     * Product: ALL
     * Information about the job. Relevant only if the Customer represents
     * the actual task or project, not just a person or organization.
     *
     * @param JobInfoModel $JobInfo
     *
     * @return CustomerModel
     */
    public function setJobInfo(
        $JobInfo
    )
    {
        $this->JobInfo = $JobInfo;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the level of the hirearchy in which the entity is located.
     * Zero specifies the top level of the hierarchy; anything above will be
     * level with respect to the parent.
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Product: ALL
     * Specifies the level of the hirearchy in which the entity is located.
     * Zero specifies the top level of the hierarchy; anything above will be
     * level with respect to the parent.
     *
     * @param int $Level
     *
     * @return CustomerModel
     */
    public function setLevel(
        $Level
    )
    {
        $this->Level = $Level;
        return $this;
    }

    /**
     * Product: ALL
     * Free form text describing the Customer.Max. length: 1024 characters.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * Product: ALL
     * Free form text describing the Customer.Max. length: 1024 characters.
     *
     * @param string $Notes
     *
     * @return CustomerModel
     */
    public function setNotes(
        $Notes
    )
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * Product: ALL
     * Date of the Open Balance for the create operation.
     *
     * @return \DateTime
     */
    public function getOpenBalanceDate()
    {
        return $this->OpenBalanceDate;
    }

    /**
     * Product: ALL
     * Date of the Open Balance for the create operation.
     *
     * @param \DateTime $OpenBalanceDate
     *
     * @return CustomerModel
     */
    public function setOpenBalanceDate(
        $OpenBalanceDate
    )
    {
        $this->OpenBalanceDate = $OpenBalanceDate;
        return $this;
    }

    /**
     * Product: QBW only.
     * An address other than default billing  or shipping.
     *
     * @return PhysicalAddressModel
     */
    public function getOtherAddr()
    {
        return $this->OtherAddr;
    }

    /**
     * Product: QBW only.
     * An address other than default billing  or shipping.
     *
     * @param PhysicalAddressModel $OtherAddr
     *
     * @return CustomerModel
     */
    public function setOtherAddr(
        $OtherAddr
    )
    {
        $this->OtherAddr = $OtherAddr;
        return $this;
    }

    /**
     * Product: QBW
     * Over-due balance amount. Cannot be written to QuickBooks.
     *
     * @return float
     */
    public function getOverDueBalance()
    {
        return $this->OverDueBalance;
    }

    /**
     * Product: QBW
     * Over-due balance amount. Cannot be written to QuickBooks.
     *
     * @param float $OverDueBalance
     *
     * @return CustomerModel
     */
    public function setOverDueBalance(
        $OverDueBalance
    )
    {
        $this->OverDueBalance = $OverDueBalance;
        return $this;
    }

    /**
     * Product: ALL
     * The immediate parent of the Sub-Customer/Job in the hierarchical
     * "Customer:Job" list.Required for the create operation if the Customer
     * is a sub-customer or Job.
     *
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * Product: ALL
     * The immediate parent of the Sub-Customer/Job in the hierarchical
     * "Customer:Job" list.Required for the create operation if the Customer
     * is a sub-customer or Job.
     *
     * @param ReferenceTypeModel $ParentRef
     *
     * @return CustomerModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to a PaymentMethod associated with the Customer.
     *
     * @return ReferenceTypeModel
     */
    public function getPaymentMethodRef()
    {
        return $this->PaymentMethodRef;
    }

    /**
     * Product: ALL
     * Reference to a PaymentMethod associated with the Customer.
     *
     * @param ReferenceTypeModel $PaymentMethodRef
     *
     * @return CustomerModel
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
     * Preferred delivery method. Vales are Print, Email, or None.
     *
     * @return string
     */
    public function getPreferredDeliveryMethod()
    {
        return $this->PreferredDeliveryMethod;
    }

    /**
     * Product: ALL
     * Preferred delivery method. Vales are Print, Email, or None.
     *
     * @param string $PreferredDeliveryMethod
     *
     * @return CustomerModel
     */
    public function setPreferredDeliveryMethod(
        $PreferredDeliveryMethod
    )
    {
        $this->PreferredDeliveryMethod = $PreferredDeliveryMethod;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to a PriceLevel associated with the Customer.
     *
     * @return ReferenceTypeModel
     */
    public function getPriceLevelRef()
    {
        return $this->PriceLevelRef;
    }

    /**
     * Product: QBW
     * Reference to a PriceLevel associated with the Customer.
     *
     * @param ReferenceTypeModel $PriceLevelRef
     *
     * @return CustomerModel
     */
    public function setPriceLevelRef(
        $PriceLevelRef
    )
    {
        $this->PriceLevelRef = $PriceLevelRef;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies primary Tax ID of the Person or Organization.
     *
     * @return string
     */
    public function getPrimaryTaxIdentifier()
    {
        return $this->PrimaryTaxIdentifier;
    }

    /**
     * Product: QBO
     * Specifies primary Tax ID of the Person or Organization.
     *
     * @param string $PrimaryTaxIdentifier
     *
     * @return CustomerModel
     */
    public function setPrimaryTaxIdentifier(
        $PrimaryTaxIdentifier
    )
    {
        $this->PrimaryTaxIdentifier = $PrimaryTaxIdentifier;
        return $this;
    }

    /**
     * Product: ALL
     * Resale number or some additional info about the customer.
     *
     * @return string
     */
    public function getResaleNum()
    {
        return $this->ResaleNum;
    }

    /**
     * Product: ALL
     * Resale number or some additional info about the customer.
     *
     * @param string $ResaleNum
     *
     * @return CustomerModel
     */
    public function setResaleNum(
        $ResaleNum
    )
    {
        $this->ResaleNum = $ResaleNum;
        return $this;
    }

    /**
     * Product: QBO
     * The top level Customer in the hierarchy to which this Job or sub
     * customer belongs.
     *
     * @return ReferenceTypeModel
     */
    public function getRootCustomerRef()
    {
        return $this->RootCustomerRef;
    }

    /**
     * Product: QBO
     * The top level Customer in the hierarchy to which this Job or sub
     * customer belongs.
     *
     * @param ReferenceTypeModel $RootCustomerRef
     *
     * @return CustomerModel
     */
    public function setRootCustomerRef(
        $RootCustomerRef
    )
    {
        $this->RootCustomerRef = $RootCustomerRef;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to a SalesRep associated with the Customer.
     *
     * @return ReferenceTypeModel
     */
    public function getSalesRepRef()
    {
        return $this->SalesRepRef;
    }

    /**
     * Product: QBW
     * Reference to a SalesRep associated with the Customer.
     *
     * @param ReferenceTypeModel $SalesRepRef
     *
     * @return CustomerModel
     */
    public function setSalesRepRef(
        $SalesRepRef
    )
    {
        $this->SalesRepRef = $SalesRepRef;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to a SalesTerm associated with the Customer.
     *
     * @return ReferenceTypeModel
     */
    public function getSalesTermRef()
    {
        return $this->SalesTermRef;
    }

    /**
     * Product: ALL
     * Reference to a SalesTerm associated with the Customer.
     *
     * @param ReferenceTypeModel $SalesTermRef
     *
     * @return CustomerModel
     */
    public function setSalesTermRef(
        $SalesTermRef
    )
    {
        $this->SalesTermRef = $SalesTermRef;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies secondary Tax ID of the Person or Organization. Applicable
     * for IN companies for CST Registration No. and in future can be
     * extended to other regions.
     *
     * @return string
     */
    public function getSecondaryTaxIdentifier()
    {
        return $this->SecondaryTaxIdentifier;
    }

    /**
     * Product: QBO
     * Specifies secondary Tax ID of the Person or Organization. Applicable
     * for IN companies for CST Registration No. and in future can be
     * extended to other regions.
     *
     * @param string $SecondaryTaxIdentifier
     *
     * @return CustomerModel
     */
    public function setSecondaryTaxIdentifier(
        $SecondaryTaxIdentifier
    )
    {
        $this->SecondaryTaxIdentifier = $SecondaryTaxIdentifier;
        return $this;
    }

    /**
     * Product: ALL
     * Default shipping address.
     *
     * @return PhysicalAddressModel
     */
    public function getShipAddr()
    {
        return $this->ShipAddr;
    }

    /**
     * Product: ALL
     * Default shipping address.
     *
     * @param PhysicalAddressModel $ShipAddr
     *
     * @return CustomerModel
     */
    public function setShipAddr(
        $ShipAddr
    )
    {
        $this->ShipAddr = $ShipAddr;
        return $this;
    }

    /**
     * Product: QBO
     * True, if TDS (Tax Deducted at Source) is enabled for this customer.
     *
     * @return bool
     */
    public function getTDSEnabled()
    {
        return $this->TDSEnabled;
    }

    /**
     * Product: QBO
     * True, if TDS (Tax Deducted at Source) is enabled for this customer.
     *
     * @param bool $TDSEnabled
     *
     * @return CustomerModel
     */
    public function setTDSEnabled(
        $TDSEnabled
    )
    {
        $this->TDSEnabled = $TDSEnabled;
        return $this;
    }

    /**
     * Product: QBO only
     * True if the customer is taxable.
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * Product: QBO only
     * True if the customer is taxable.
     *
     * @param bool $Taxable
     *
     * @return CustomerModel
     */
    public function setTaxable(
        $Taxable
    )
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * Product: QBW
     * The total expense amount for the Customer. Cannot be written to
     * QuickBooks.
     *
     * @return float
     */
    public function getTotalExpense()
    {
        return $this->TotalExpense;
    }

    /**
     * Product: QBW
     * The total expense amount for the Customer. Cannot be written to
     * QuickBooks.
     *
     * @param float $TotalExpense
     *
     * @return CustomerModel
     */
    public function setTotalExpense(
        $TotalExpense
    )
    {
        $this->TotalExpense = $TotalExpense;
        return $this;
    }

    /**
     * Product: QBW
     * The total revenue amount from the Customer. Cannot be written to
     * QuickBooks.
     *
     * @return float
     */
    public function getTotalRevenue()
    {
        return $this->TotalRevenue;
    }

    /**
     * Product: QBW
     * The total revenue amount from the Customer. Cannot be written to
     * QuickBooks.
     *
     * @param float $TotalRevenue
     *
     * @return CustomerModel
     */
    public function setTotalRevenue(
        $TotalRevenue
    )
    {
        $this->TotalRevenue = $TotalRevenue;
        return $this;
    }

}