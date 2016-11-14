<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Transaction is the base class of all transactions.
 *
 * Class TransactionModel
 * @package Augwa\QuickBooks\Model
 */
class TransactionModel
    extends IntuitEntityModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $CurrencyRef;

    /**
     * @var ReferenceTypeModel
     */
    private $DepartmentRef;

    /**
     * @var string
     */
    private $DocNumber;

    /**
     * @var float
     */
    private $ExchangeRate;

    /**
     * @var LineModel
     */
    private $Line;

    /**
     * @var LinkedTxnModel
     */
    private $LinkedTxn;

    /**
     * @var string
     */
    private $PrivateNote;

    /**
     * @var string
     */
    private $TaxFormNum;

    /**
     * @var string
     */
    private $TaxFormType;

    /**
     * @var string
     */
    private $TransactionLocationType;

    /**
     * @var \DateTime
     */
    private $TxnDate;

    /**
     * @var string
     */
    private $TxnSource;

    /**
     * @var string
     */
    private $TxnStatus;

    /**
     * @var TxnTaxDetailModel
     */
    private $TxnTaxDetail;


    /**
     * Product: ALL
     * Reference to the Currency in which all amounts on the associated
     * transaction are expressed.
     * InputType: ReadWrite
     *
     * @return ReferenceTypeModel
     */
    public function getCurrencyRef()
    {
        return $this->CurrencyRef;
    }

    /**
     * Product: ALL
     * Reference to the Currency in which all amounts on the associated
     * transaction are expressed.
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $CurrencyRef
     *
     * @return TransactionModel
     */
    public function setCurrencyRef(
        $CurrencyRef
    )
    {
        $this->CurrencyRef = $CurrencyRef;
        return $this;
    }

    /**
     * Product: QBO
     * Location of the transaction, as defined using location tracking in
     * QuickBooks Online.
     *
     * @return ReferenceTypeModel
     */
    public function getDepartmentRef()
    {
        return $this->DepartmentRef;
    }

    /**
     * Product: QBO
     * Location of the transaction, as defined using location tracking in
     * QuickBooks Online.
     *
     * @param ReferenceTypeModel $DepartmentRef
     *
     * @return TransactionModel
     */
    public function setDepartmentRef(
        $DepartmentRef
    )
    {
        $this->DepartmentRef = $DepartmentRef;
        return $this;
    }

    /**
     * Product: ALL
     * QBO: Reference number for the transaction. If DocNumber is not
     * provided, and the Custom Transaction Number is set to "Off", QBO
     * assigns a document number using the next-in-sequence algorithm for
     * Sales transactions. Otherwise the value will remaing null.
     * Alternatively, you can also pass in "AUTO_GENERATE" in this field to
     * force QBO to auto-sequence the document number for Invoices, Estimates
     * and Sales Receipt.The maximum length for DocNumber is 21 characters.
     * The default value is an empty String. Filter support not provided for
     * Payment.
     * QBW: The primary document number for this transaction.  DocNumber is
     * exposed to end users.If it is not provided, QuickBooks business logic
     * will assign the document number using the "next in sequence"
     * algorithm.Max. length is 11 characters for Payment, Bill, ItemReceipt
     * and VendorCredit.  Max. length is 20 characters for other entities.
     * Filterable: QBO
     * InputType: ReadWrite
     * ValidRange: QBW: max=11
     * ValidRange: QBO: max=21
     *
     * @return string
     */
    public function getDocNumber()
    {
        return $this->DocNumber;
    }

    /**
     * Product: ALL
     * QBO: Reference number for the transaction. If DocNumber is not
     * provided, and the Custom Transaction Number is set to "Off", QBO
     * assigns a document number using the next-in-sequence algorithm for
     * Sales transactions. Otherwise the value will remaing null.
     * Alternatively, you can also pass in "AUTO_GENERATE" in this field to
     * force QBO to auto-sequence the document number for Invoices, Estimates
     * and Sales Receipt.The maximum length for DocNumber is 21 characters.
     * The default value is an empty String. Filter support not provided for
     * Payment.
     * QBW: The primary document number for this transaction.  DocNumber is
     * exposed to end users.If it is not provided, QuickBooks business logic
     * will assign the document number using the "next in sequence"
     * algorithm.Max. length is 11 characters for Payment, Bill, ItemReceipt
     * and VendorCredit.  Max. length is 20 characters for other entities.
     * Filterable: QBO
     * InputType: ReadWrite
     * ValidRange: QBW: max=11
     * ValidRange: QBO: max=21
     *
     * @param string $DocNumber
     *
     * @return TransactionModel
     */
    public function setDocNumber(
        $DocNumber
    )
    {
        $this->DocNumber = $DocNumber;
        return $this;
    }

    /**
     * Product: ALL
     * Currency exchange rate. Valid only if the company file is set up to
     * use Multi-Currency feature. In QuickBooks, exchange rates are always
     * recorded as the number of home currency units it takes to equal one
     * foreign currency unit. The foreign unit is always 1 and the amount of
     * home units that equal that 1 foreign unit is what QuickBooks uses as
     * the exchange rate.
     * InputType: ReadWrite
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }

    /**
     * Product: ALL
     * Currency exchange rate. Valid only if the company file is set up to
     * use Multi-Currency feature. In QuickBooks, exchange rates are always
     * recorded as the number of home currency units it takes to equal one
     * foreign currency unit. The foreign unit is always 1 and the amount of
     * home units that equal that 1 foreign unit is what QuickBooks uses as
     * the exchange rate.
     * InputType: ReadWrite
     *
     * @param float $ExchangeRate
     *
     * @return TransactionModel
     */
    public function setExchangeRate(
        $ExchangeRate
    )
    {
        $this->ExchangeRate = $ExchangeRate;
        return $this;
    }

    /**
     * Product: QBW
     * A line item of a transaction.
     * Product: QBO
     * A line item of a transaction. QuickBooks Online does not support tax
     * lines in the main transaction body, only in the TxnTaxDetail section.
     *
     * @return LineModel
     */
    public function getLine()
    {
        return $this->Line;
    }

    /**
     * Product: QBW
     * A line item of a transaction.
     * Product: QBO
     * A line item of a transaction. QuickBooks Online does not support tax
     * lines in the main transaction body, only in the TxnTaxDetail section.
     *
     * @param LineModel $Line
     *
     * @return TransactionModel
     */
    public function setLine(
        $Line
    )
    {
        $this->Line = $Line;
        return $this;
    }

    /**
     * Product: ALL
     * A linked (related) transaction.  More than one transaction can be
     * linked.
     *
     * @return LinkedTxnModel
     */
    public function getLinkedTxn()
    {
        return $this->LinkedTxn;
    }

    /**
     * Product: ALL
     * A linked (related) transaction.  More than one transaction can be
     * linked.
     *
     * @param LinkedTxnModel $LinkedTxn
     *
     * @return TransactionModel
     */
    public function setLinkedTxn(
        $LinkedTxn
    )
    {
        $this->LinkedTxn = $LinkedTxn;
        return $this;
    }

    /**
     * Product: ALL
     * User entered, organization-private note about the transaction. This
     * note will not appear on the transaction records by default.
     * InputType: ReadWrite
     *
     * @return string
     */
    public function getPrivateNote()
    {
        return $this->PrivateNote;
    }

    /**
     * Product: ALL
     * User entered, organization-private note about the transaction. This
     * note will not appear on the transaction records by default.
     * InputType: ReadWrite
     *
     * @param string $PrivateNote
     *
     * @return TransactionModel
     */
    public function setPrivateNote(
        $PrivateNote
    )
    {
        $this->PrivateNote = $PrivateNote;
        return $this;
    }

    /**
     * Tax Form Num holds data related to Tax Information based on Regional
     * compliance laws.This is applicable for IN region and can be extended
     * to other regions in future.
     *
     * @return string
     */
    public function getTaxFormNum()
    {
        return $this->TaxFormNum;
    }

    /**
     * Tax Form Num holds data related to Tax Information based on Regional
     * compliance laws.This is applicable for IN region and can be extended
     * to other regions in future.
     *
     * @param string $TaxFormNum
     *
     * @return TransactionModel
     */
    public function setTaxFormNum(
        $TaxFormNum
    )
    {
        $this->TaxFormNum = $TaxFormNum;
        return $this;
    }

    /**
     * Refer TaxFormTypeEnum. Tax Form Type holds data related to Tax
     * Information, values based on
     * Regional compliance laws. Applicable for IN Region and can be extended
     * for other Regions.
     *
     * @return string
     */
    public function getTaxFormType()
    {
        return $this->TaxFormType;
    }

    /**
     * Refer TaxFormTypeEnum. Tax Form Type holds data related to Tax
     * Information, values based on
     * Regional compliance laws. Applicable for IN Region and can be extended
     * for other Regions.
     *
     * @param string $TaxFormType
     *
     * @return TransactionModel
     */
    public function setTaxFormType(
        $TaxFormType
    )
    {
        $this->TaxFormType = $TaxFormType;
        return $this;
    }

    /**
     * Product: QBO
     * Location of the purchase or sale transaction. The applicable values
     * are those exposed through the TransactionLocationTypeEnum. This is
     * currently applicable only for the FR region.
     *
     * @return string
     */
    public function getTransactionLocationType()
    {
        return $this->TransactionLocationType;
    }

    /**
     * Product: QBO
     * Location of the purchase or sale transaction. The applicable values
     * are those exposed through the TransactionLocationTypeEnum. This is
     * currently applicable only for the FR region.
     *
     * @param string $TransactionLocationType
     *
     * @return TransactionModel
     */
    public function setTransactionLocationType(
        $TransactionLocationType
    )
    {
        $this->TransactionLocationType = $TransactionLocationType;
        return $this;
    }

    /**
     * Product: ALL
     * QBO: The date entered by the user when this transaction occurred.
     * Often, it is the date when the transaction is created in the system.
     * For "posting" transactions, this is the posting date that affects the
     * financial statements. If the date is not supplied, the current date on
     * the server is used.
     * QBW: The nominal, user entered, date of the transaction.  Often, but
     * not required to be, the date the transaction was created in the
     * system. For "posting" transactions, this is the posting date that
     * affects financial statements.
     * Filterable: ALL
     * Sortable: ALL
     * InputType: ReadWrite
     *
     * @return \DateTime
     */
    public function getTxnDate()
    {
        return $this->TxnDate;
    }

    /**
     * Product: ALL
     * QBO: The date entered by the user when this transaction occurred.
     * Often, it is the date when the transaction is created in the system.
     * For "posting" transactions, this is the posting date that affects the
     * financial statements. If the date is not supplied, the current date on
     * the server is used.
     * QBW: The nominal, user entered, date of the transaction.  Often, but
     * not required to be, the date the transaction was created in the
     * system. For "posting" transactions, this is the posting date that
     * affects financial statements.
     * Filterable: ALL
     * Sortable: ALL
     * InputType: ReadWrite
     *
     * @param \DateTime $TxnDate
     *
     * @return TransactionModel
     */
    public function setTxnDate(
        $TxnDate
    )
    {
        $this->TxnDate = $TxnDate;
        return $this;
    }

    /**
     * Product: QBO
     * Originating source of the Transaction. Valid values are defined in
     * TxnSourceEnum: QBMobile.
     *
     * @return string
     */
    public function getTxnSource()
    {
        return $this->TxnSource;
    }

    /**
     * Product: QBO
     * Originating source of the Transaction. Valid values are defined in
     * TxnSourceEnum: QBMobile.
     *
     * @param string $TxnSource
     *
     * @return TransactionModel
     */
    public function setTxnSource(
        $TxnSource
    )
    {
        $this->TxnSource = $TxnSource;
        return $this;
    }

    /**
     * Product: ALL
     * QBW: The status of the transaction. Depending on the transaction type
     * it may have different values.For Sales Transactions acceptable values
     * are defined in PaymentStatusEnum. For Estimate, the values accepted
     * are defined in EstimateStatusEnum.
     * QBO: The status of the transaction. Depending on the transaction type
     * it may have different values.For Sales Transactions acceptable values
     * are defined in PaymentStatusEnum. For Estimate, the values accepted
     * are defined in QboEstimateStatusEnum.
     * Filterable:QBW
     *
     * @return string
     */
    public function getTxnStatus()
    {
        return $this->TxnStatus;
    }

    /**
     * Product: ALL
     * QBW: The status of the transaction. Depending on the transaction type
     * it may have different values.For Sales Transactions acceptable values
     * are defined in PaymentStatusEnum. For Estimate, the values accepted
     * are defined in EstimateStatusEnum.
     * QBO: The status of the transaction. Depending on the transaction type
     * it may have different values.For Sales Transactions acceptable values
     * are defined in PaymentStatusEnum. For Estimate, the values accepted
     * are defined in QboEstimateStatusEnum.
     * Filterable:QBW
     *
     * @param string $TxnStatus
     *
     * @return TransactionModel
     */
    public function setTxnStatus(
        $TxnStatus
    )
    {
        $this->TxnStatus = $TxnStatus;
        return $this;
    }

    /**
     * Product: ALL
     * Details of taxes charged on the transaction as a whole. For US
     * versions of QuickBooks, tax rates used in the detail section must not
     * be used in any tax line appearing in the main transaction body. For
     * international versions of QuickBooks, the TxnTaxDetail should provide
     * the details of all taxes (sales or purchase) calculated for the
     * transaction based on the tax codes referenced by the transaction. This
     * can be calculated by QuickBooks business logic or you may supply it
     * when adding a transaction. For US versions of QuickBooks you need only
     * supply the tax code for the customer and the tax code (in the case of
     * multiple rates) or tax rate (for a single rate) to apply for the
     * transaction as a whole.See Global Tax Model.
     *
     * @return TxnTaxDetailModel
     */
    public function getTxnTaxDetail()
    {
        return $this->TxnTaxDetail;
    }

    /**
     * Product: ALL
     * Details of taxes charged on the transaction as a whole. For US
     * versions of QuickBooks, tax rates used in the detail section must not
     * be used in any tax line appearing in the main transaction body. For
     * international versions of QuickBooks, the TxnTaxDetail should provide
     * the details of all taxes (sales or purchase) calculated for the
     * transaction based on the tax codes referenced by the transaction. This
     * can be calculated by QuickBooks business logic or you may supply it
     * when adding a transaction. For US versions of QuickBooks you need only
     * supply the tax code for the customer and the tax code (in the case of
     * multiple rates) or tax rate (for a single rate) to apply for the
     * transaction as a whole.See Global Tax Model.
     *
     * @param TxnTaxDetailModel $TxnTaxDetail
     *
     * @return TransactionModel
     */
    public function setTxnTaxDetail(
        $TxnTaxDetail
    )
    {
        $this->TxnTaxDetail = $TxnTaxDetail;
        return $this;
    }

}