<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Base class of all Sales transaction entities.
 *
 * Class SalesTransactionModel
 * @package Augwa\QuickBooks\Model
 */
class SalesTransactionModel
    extends TransactionModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $ARAccountRef;

    /**
     * @var bool
     */
    private $ApplyTaxAfterDiscount;

    /**
     * @var bool
     */
    private $AutoDocNumber;

    /**
     * @var float
     */
    private $Balance;

    /**
     * @var PhysicalAddressModel
     */
    private $BillAddr;

    /**
     * @var EmailAddressModel
     */
    private $BillEmail;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var MemoRefModel
     */
    private $CustomerMemo;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerRef;

    /**
     * @var TransactionDeliveryInfoModel
     */
    private $DeliveryInfo;

    /**
     * @var ReferenceTypeModel
     */
    private $DepositToAccountRef;

    /**
     * @var float
     */
    private $DiscountAmt;

    /**
     * @var float
     */
    private $DiscountRate;

    /**
     * @var \DateTime
     */
    private $DueDate;

    /**
     * @var string
     * @see EmailStatusEnum
     */
    private $EmailStatus;

    /**
     * @var string
     */
    private $FOB;

    /**
     * @var bool
     */
    private $FinanceCharge;

    /**
     * @var string
     * @see GlobalTaxCalculationEnum
     */
    private $GlobalTaxCalculation;

    /**
     * @var string
     */
    private $GovtTxnRefIdentifier;

    /**
     * @var float
     */
    private $HomeBalance;

    /**
     * @var float
     */
    private $HomeTotalAmt;

    /**
     * @var string
     */
    private $PONumber;

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
     * @var ReferenceTypeModel
     */
    private $RemitToRef;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesRepRef;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesTermRef;

    /**
     * @var PhysicalAddressModel
     */
    private $ShipAddr;

    /**
     * @var \DateTime
     */
    private $ShipDate;

    /**
     * @var ReferenceTypeModel
     */
    private $ShipMethodRef;

    /**
     * @var ReferenceTypeModel
     */
    private $TemplateRef;

    /**
     * @var float
     */
    private $TotalAmt;

    /**
     * @var string
     */
    private $TrackingNum;


    /**
     * Product: QBW
     * Reference to the ARAccount (accounts receivable account) associated
     * with the transaction.
     * InputType: ReadWrite
     *
     * @return ReferenceTypeModel
     */
    public function getARAccountRef()
    {
        return $this->ARAccountRef;
    }

    /**
     * Product: QBW
     * Reference to the ARAccount (accounts receivable account) associated
     * with the transaction.
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $ARAccountRef
     *
     * @return SalesTransactionModel
     */
    public function setARAccountRef(
        $ARAccountRef
    )
    {
        $this->ARAccountRef = $ARAccountRef;
        return $this;
    }

    /**
     * Product: QBO
     * If false or null, calculate the sales tax first, and then apply the
     * discount. If true, subtract the discount first and then calculate the
     * sales tax.
     *
     * @return bool
     */
    public function getApplyTaxAfterDiscount()
    {
        return $this->ApplyTaxAfterDiscount;
    }

    /**
     * Product: QBO
     * If false or null, calculate the sales tax first, and then apply the
     * discount. If true, subtract the discount first and then calculate the
     * sales tax.
     *
     * @param bool $ApplyTaxAfterDiscount
     *
     * @return SalesTransactionModel
     */
    public function setApplyTaxAfterDiscount(
        $ApplyTaxAfterDiscount
    )
    {
        $this->ApplyTaxAfterDiscount = $ApplyTaxAfterDiscount;
        return $this;
    }

    /**
     * Product: QBO
     * If AutoDocNumber is true, DocNumber is generated automatically.  If
     * false or null, the DocNumber is generated based on preference of the
     * user.
     *
     * @return bool
     */
    public function getAutoDocNumber()
    {
        return $this->AutoDocNumber;
    }

    /**
     * Product: QBO
     * If AutoDocNumber is true, DocNumber is generated automatically.  If
     * false or null, the DocNumber is generated based on preference of the
     * user.
     *
     * @param bool $AutoDocNumber
     *
     * @return SalesTransactionModel
     */
    public function setAutoDocNumber(
        $AutoDocNumber
    )
    {
        $this->AutoDocNumber = $AutoDocNumber;
        return $this;
    }

    /**
     * Product: QBO
     * The balance reflecting any payments made against the transaction.
     * Initially this will be equal to the TotalAmt.
     * Product: QBW
     * Indicates the unpaid amount of the transaction.
     * Filterable: ALL
     * Sortable: QBW
     * InputType: ReadOnly
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * Product: QBO
     * The balance reflecting any payments made against the transaction.
     * Initially this will be equal to the TotalAmt.
     * Product: QBW
     * Indicates the unpaid amount of the transaction.
     * Filterable: ALL
     * Sortable: QBW
     * InputType: ReadOnly
     *
     * @param float $Balance
     *
     * @return SalesTransactionModel
     */
    public function setBalance(
        $Balance
    )
    {
        $this->Balance = $Balance;
        return $this;
    }

    /**
     * Product: ALL
     * QBO: Bill-to address of the Invoice.See Addresses
     * QBW: The physical (postal) address where the bill or invoice is
     * sent.See Addresses
     * InputType: ReadWrite
     *
     * @return PhysicalAddressModel
     */
    public function getBillAddr()
    {
        return $this->BillAddr;
    }

    /**
     * Product: ALL
     * QBO: Bill-to address of the Invoice.See Addresses
     * QBW: The physical (postal) address where the bill or invoice is
     * sent.See Addresses
     * InputType: ReadWrite
     *
     * @param PhysicalAddressModel $BillAddr
     *
     * @return SalesTransactionModel
     */
    public function setBillAddr(
        $BillAddr
    )
    {
        $this->BillAddr = $BillAddr;
        return $this;
    }

    /**
     * Product: QBO
     * Identifies the e-mail address where the invoice is sent. At present,
     * you can provide only one e-mail address.If the ToBeEmailed attribute
     * is true and the BillEmail attribute contains an e-mail address, the
     * user can send an e-mail message to the e-mail address that is
     * specified in the BillEmail attribute.If the BillEmail attribute
     * contains an invalid e-mail address, QBO does not send the e-mail
     * message to the invalid e-mail address. QBO also does not return any
     * error message to indicate that the e-mail address is invalid.The
     * maximum length for BillEmail is 100 characters.
     * Product: QBW
     * Identifies the email address where the bill or invoice is sent.
     * UNSUPPORTED FIELD.
     *
     * @return EmailAddressModel
     */
    public function getBillEmail()
    {
        return $this->BillEmail;
    }

    /**
     * Product: QBO
     * Identifies the e-mail address where the invoice is sent. At present,
     * you can provide only one e-mail address.If the ToBeEmailed attribute
     * is true and the BillEmail attribute contains an e-mail address, the
     * user can send an e-mail message to the e-mail address that is
     * specified in the BillEmail attribute.If the BillEmail attribute
     * contains an invalid e-mail address, QBO does not send the e-mail
     * message to the invalid e-mail address. QBO also does not return any
     * error message to indicate that the e-mail address is invalid.The
     * maximum length for BillEmail is 100 characters.
     * Product: QBW
     * Identifies the email address where the bill or invoice is sent.
     * UNSUPPORTED FIELD.
     *
     * @param EmailAddressModel $BillEmail
     *
     * @return SalesTransactionModel
     */
    public function setBillEmail(
        $BillEmail
    )
    {
        $this->BillEmail = $BillEmail;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the Class associated with the transaction.
     * InputType: ReadWrite
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: QBW
     * Reference to the Class associated with the transaction.
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return SalesTransactionModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * Product: ALL
     * QBO: For an Invoice, this is the user-entered message to the customer
     * that does appear in the invoice, and does appear in the printed
     * invoice. The maximum length for Invoice Msg is 1000 characters.For a
     * Bill, this is the memo of the transaction to provide more detail, and
     * does not appear in the printed message of the bill. The maximum length
     * for Bill Msg is 4000 characters.For a CreditCardCharge, this message
     * appears in the printed record; maximum length is 4000 characters.Not
     * supported for BillPayment, JournalEntry or Payment.
     * QBW: User-entered message to the customer; this message will be
     * visible to end user on their transactions.
     * InputType: ReadWrite
     *
     * @return MemoRefModel
     */
    public function getCustomerMemo()
    {
        return $this->CustomerMemo;
    }

    /**
     * Product: ALL
     * QBO: For an Invoice, this is the user-entered message to the customer
     * that does appear in the invoice, and does appear in the printed
     * invoice. The maximum length for Invoice Msg is 1000 characters.For a
     * Bill, this is the memo of the transaction to provide more detail, and
     * does not appear in the printed message of the bill. The maximum length
     * for Bill Msg is 4000 characters.For a CreditCardCharge, this message
     * appears in the printed record; maximum length is 4000 characters.Not
     * supported for BillPayment, JournalEntry or Payment.
     * QBW: User-entered message to the customer; this message will be
     * visible to end user on their transactions.
     * InputType: ReadWrite
     *
     * @param MemoRefModel $CustomerMemo
     *
     * @return SalesTransactionModel
     */
    public function setCustomerMemo(
        $CustomerMemo
    )
    {
        $this->CustomerMemo = $CustomerMemo;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to a Customer or job.
     * Filterable: QBW
     * InputType: ReadWrite
     * BusinessRules: QBW: CustomerRef is mandatory for some
     * SalesTransactions like Invoice
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * Product: ALL
     * Reference to a Customer or job.
     * Filterable: QBW
     * InputType: ReadWrite
     * BusinessRules: QBW: CustomerRef is mandatory for some
     * SalesTransactions like Invoice
     *
     * @param ReferenceTypeModel $CustomerRef
     *
     * @return SalesTransactionModel
     */
    public function setCustomerRef(
        $CustomerRef
    )
    {
        $this->CustomerRef = $CustomerRef;
        return $this;
    }

    /**
     * Product: QBO
     * Last delivery info of this transaction.
     *
     * @return TransactionDeliveryInfoModel
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }

    /**
     * Product: QBO
     * Last delivery info of this transaction.
     *
     * @param TransactionDeliveryInfoModel $DeliveryInfo
     *
     * @return SalesTransactionModel
     */
    public function setDeliveryInfo(
        $DeliveryInfo
    )
    {
        $this->DeliveryInfo = $DeliveryInfo;
        return $this;
    }

    /**
     * Product: ALL
     * QBW: Reference to the DepositToAccount entity. If not specified, the
     * Undeposited Funds account will be used.
     * QBO: Asset account where the payment money is deposited. If you do not
     * specify this account, QBO uses the Undeposited Funds account.
     * Supported for Payment and SalesReceipt only.
     * NotApplicableTo: QBW: Estimate, SalesOrder
     *
     * @return ReferenceTypeModel
     */
    public function getDepositToAccountRef()
    {
        return $this->DepositToAccountRef;
    }

    /**
     * Product: ALL
     * QBW: Reference to the DepositToAccount entity. If not specified, the
     * Undeposited Funds account will be used.
     * QBO: Asset account where the payment money is deposited. If you do not
     * specify this account, QBO uses the Undeposited Funds account.
     * Supported for Payment and SalesReceipt only.
     * NotApplicableTo: QBW: Estimate, SalesOrder
     *
     * @param ReferenceTypeModel $DepositToAccountRef
     *
     * @return SalesTransactionModel
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
     * Indicates the discount amount that is applied on the transaction as a
     * whole. This will be pro-rated through item lines for tax calculation.
     *
     * @return float
     */
    public function getDiscountAmt()
    {
        return $this->DiscountAmt;
    }

    /**
     * Product: QBO
     * Indicates the discount amount that is applied on the transaction as a
     * whole. This will be pro-rated through item lines for tax calculation.
     *
     * @param float $DiscountAmt
     *
     * @return SalesTransactionModel
     */
    public function setDiscountAmt(
        $DiscountAmt
    )
    {
        $this->DiscountAmt = $DiscountAmt;
        return $this;
    }

    /**
     * Product: QBO
     * Indicates the discount rate that is applied on the transaction as a
     * whole. This will be pro-rated through item lines for tax calculation.
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->DiscountRate;
    }

    /**
     * Product: QBO
     * Indicates the discount rate that is applied on the transaction as a
     * whole. This will be pro-rated through item lines for tax calculation.
     *
     * @param float $DiscountRate
     *
     * @return SalesTransactionModel
     */
    public function setDiscountRate(
        $DiscountRate
    )
    {
        $this->DiscountRate = $DiscountRate;
        return $this;
    }

    /**
     * Product: ALL
     * QBW: Date when the payment of the transaction is due.
     * QBO: Date when the invoice is to be paid, not including any
     * early-payment discount incentives, or late payment penalties. If the
     * date is not supplied, the current date on the server is used.
     * Filterable: QBW
     * InputType: ReadWrite
     * BusinessRules: QBW: Following are the BusinessRules regarding DueDate
     * of transaction
     * If DueDate is not included when creating an invoice, QuickBooks may
     * determine the due date according to the terms set for this customer.
     * If the Terms are not provided, the Due Date is set to the transaction
     * date.
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * Product: ALL
     * QBW: Date when the payment of the transaction is due.
     * QBO: Date when the invoice is to be paid, not including any
     * early-payment discount incentives, or late payment penalties. If the
     * date is not supplied, the current date on the server is used.
     * Filterable: QBW
     * InputType: ReadWrite
     * BusinessRules: QBW: Following are the BusinessRules regarding DueDate
     * of transaction
     * If DueDate is not included when creating an invoice, QuickBooks may
     * determine the due date according to the terms set for this customer.
     * If the Terms are not provided, the Due Date is set to the transaction
     * date.
     *
     * @param \DateTime $DueDate
     *
     * @return SalesTransactionModel
     */
    public function setDueDate(
        $DueDate
    )
    {
        $this->DueDate = $DueDate;
        return $this;
    }

    /**
     * Product: ALL
     * Email status of the invoice.
     * InputType: ReadWrite
     *
     * @return string
     *
     * @see EmailStatusEnum
     */
    public function getEmailStatus()
    {
        return $this->EmailStatus;
    }

    /**
     * Product: ALL
     * Email status of the invoice.
     * InputType: ReadWrite
     *
     * @param string $EmailStatus
     *
     * @return SalesTransactionModel
     *
     * @see EmailStatusEnum
     */
    public function setEmailStatus(
        $EmailStatus
    )
    {
        $this->EmailStatus = $EmailStatus;
        return $this;
    }

    /**
     * Product: ALL
     * "Free On Board", the terms between buyer and seller regarding
     * transportation costs; does not have any bookkeeping implications.
     * "Free On Board", the terms between buyer and seller regarding
     * transportation costs; does not have any bookkeeping implications.
     * ValidRange: QBW: max=13
     * ValidRange: QBO: max=15
     *
     * @return string
     */
    public function getFOB()
    {
        return $this->FOB;
    }

    /**
     * Product: ALL
     * "Free On Board", the terms between buyer and seller regarding
     * transportation costs; does not have any bookkeeping implications.
     * "Free On Board", the terms between buyer and seller regarding
     * transportation costs; does not have any bookkeeping implications.
     * ValidRange: QBW: max=13
     * ValidRange: QBO: max=15
     *
     * @param string $FOB
     *
     * @return SalesTransactionModel
     */
    public function setFOB(
        $FOB
    )
    {
        $this->FOB = $FOB;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates whether the transaction is a finance charge.
     * InputType: ReadWrite
     *
     * @return bool
     */
    public function getFinanceCharge()
    {
        return $this->FinanceCharge;
    }

    /**
     * Product: ALL
     * Indicates whether the transaction is a finance charge.
     * InputType: ReadWrite
     *
     * @param bool $FinanceCharge
     *
     * @return SalesTransactionModel
     */
    public function setFinanceCharge(
        $FinanceCharge
    )
    {
        $this->FinanceCharge = $FinanceCharge;
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
     * @return SalesTransactionModel
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
     * Product: QBO
     * This is the reference to the NotaFiscal created for the
     * salesTransaction.
     * ValidRange: QBO: max=30
     *
     * @return string
     */
    public function getGovtTxnRefIdentifier()
    {
        return $this->GovtTxnRefIdentifier;
    }

    /**
     * Product: QBO
     * This is the reference to the NotaFiscal created for the
     * salesTransaction.
     * ValidRange: QBO: max=30
     *
     * @param string $GovtTxnRefIdentifier
     *
     * @return SalesTransactionModel
     */
    public function setGovtTxnRefIdentifier(
        $GovtTxnRefIdentifier
    )
    {
        $this->GovtTxnRefIdentifier = $GovtTxnRefIdentifier;
        return $this;
    }

    /**
     * Product: QBO
     * The balance reflecting any payments made against the transaction in
     * home currency. Initially this will be equal to the
     * HomeTotalAmt.Read-only field.
     * Product: QBW
     * Indicates the unpaid amount of the transaction in home currency.Cannot
     * be written to QuickBooks.
     * Filterable: ALL
     * Sortable: QBW
     *
     * @return float
     */
    public function getHomeBalance()
    {
        return $this->HomeBalance;
    }

    /**
     * Product: QBO
     * The balance reflecting any payments made against the transaction in
     * home currency. Initially this will be equal to the
     * HomeTotalAmt.Read-only field.
     * Product: QBW
     * Indicates the unpaid amount of the transaction in home currency.Cannot
     * be written to QuickBooks.
     * Filterable: ALL
     * Sortable: QBW
     *
     * @param float $HomeBalance
     *
     * @return SalesTransactionModel
     */
    public function setHomeBalance(
        $HomeBalance
    )
    {
        $this->HomeBalance = $HomeBalance;
        return $this;
    }

    /**
     * Product: ALL
     * QBW: Total amount of the transaction in the home currency for
     * multi-currency enabled companies. Single currency companies will not
     * have this field. Includes the total of all the charges, allowances and
     * taxes. Calculated by QuickBooks business logic. Cannot be written to
     * QuickBooks.
     * InputType: QBW: ReadOnly
     *
     * @return float
     */
    public function getHomeTotalAmt()
    {
        return $this->HomeTotalAmt;
    }

    /**
     * Product: ALL
     * QBW: Total amount of the transaction in the home currency for
     * multi-currency enabled companies. Single currency companies will not
     * have this field. Includes the total of all the charges, allowances and
     * taxes. Calculated by QuickBooks business logic. Cannot be written to
     * QuickBooks.
     * InputType: QBW: ReadOnly
     *
     * @param float $HomeTotalAmt
     *
     * @return SalesTransactionModel
     */
    public function setHomeTotalAmt(
        $HomeTotalAmt
    )
    {
        $this->HomeTotalAmt = $HomeTotalAmt;
        return $this;
    }

    /**
     * Product: ALL
     * Purchase Order number.
     * ValidRange: QBW: max=25
     * ValidRange: QBO: max=15
     *
     * @return string
     */
    public function getPONumber()
    {
        return $this->PONumber;
    }

    /**
     * Product: ALL
     * Purchase Order number.
     * ValidRange: QBW: max=25
     * ValidRange: QBO: max=15
     *
     * @param string $PONumber
     *
     * @return SalesTransactionModel
     */
    public function setPONumber(
        $PONumber
    )
    {
        $this->PONumber = $PONumber;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the PaymentMethod.
     * InputType: ReadWrite
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
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $PaymentMethodRef
     *
     * @return SalesTransactionModel
     */
    public function setPaymentMethodRef(
        $PaymentMethodRef
    )
    {
        $this->PaymentMethodRef = $PaymentMethodRef;
        return $this;
    }

    /**
     * Product: QBO
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
     * Product: QBO
     * The reference number for the payment received (I.e. Check # for a
     * check, envelope # for a cash donation, CreditCardTransactionID for a
     * credit card payment)
     *
     * @param string $PaymentRefNum
     *
     * @return SalesTransactionModel
     */
    public function setPaymentRefNum(
        $PaymentRefNum
    )
    {
        $this->PaymentRefNum = $PaymentRefNum;
        return $this;
    }

    /**
     * Product: QBO
     * Valid values are Cash, Check, CreditCard, or Other. No defaults. Cash
     * based expense is not supported by QuickBooks Windows.
     * NotApplicableTo: Estimate, SalesOrder
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
     * Product: QBO
     * Valid values are Cash, Check, CreditCard, or Other. No defaults. Cash
     * based expense is not supported by QuickBooks Windows.
     * NotApplicableTo: Estimate, SalesOrder
     *
     * @param string $PaymentType
     *
     * @return SalesTransactionModel
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
     * Product: ALL
     * Printing status of the invoice.
     * InputType: ReadWrite
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
     * Product: ALL
     * Printing status of the invoice.
     * InputType: ReadWrite
     *
     * @param string $PrintStatus
     *
     * @return SalesTransactionModel
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
     * Product: QBW
     * Reference to the party receiving payment.
     * InputType: ReadOnly
     *
     * @return ReferenceTypeModel
     */
    public function getRemitToRef()
    {
        return $this->RemitToRef;
    }

    /**
     * Product: QBW
     * Reference to the party receiving payment.
     * InputType: ReadOnly
     *
     * @param ReferenceTypeModel $RemitToRef
     *
     * @return SalesTransactionModel
     */
    public function setRemitToRef(
        $RemitToRef
    )
    {
        $this->RemitToRef = $RemitToRef;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the SalesRep associated with the transaction.
     * InputType: ReadWrite
     *
     * @return ReferenceTypeModel
     */
    public function getSalesRepRef()
    {
        return $this->SalesRepRef;
    }

    /**
     * Product: QBW
     * Reference to the SalesRep associated with the transaction.
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $SalesRepRef
     *
     * @return SalesTransactionModel
     */
    public function setSalesRepRef(
        $SalesRepRef
    )
    {
        $this->SalesRepRef = $SalesRepRef;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the SalesTerm associated with the transaction.
     * InputType: ReadWrite
     *
     * @return ReferenceTypeModel
     */
    public function getSalesTermRef()
    {
        return $this->SalesTermRef;
    }

    /**
     * Product: QBW
     * Reference to the SalesTerm associated with the transaction.
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $SalesTermRef
     *
     * @return SalesTransactionModel
     */
    public function setSalesTermRef(
        $SalesTermRef
    )
    {
        $this->SalesTermRef = $SalesTermRef;
        return $this;
    }

    /**
     * Product: ALL
     * QBO: Shipping address of the Invoice.See Addresses
     * QBW: Identifies the address where the goods must be shipped.
     * QuickBooks Note: If ShipAddr is not specified, and a default ship-to
     * address is specified in QuickBooks for this customer, the default
     * ship-to address will be used by QuickBooks.See Addresses
     *
     * @return PhysicalAddressModel
     */
    public function getShipAddr()
    {
        return $this->ShipAddr;
    }

    /**
     * Product: ALL
     * QBO: Shipping address of the Invoice.See Addresses
     * QBW: Identifies the address where the goods must be shipped.
     * QuickBooks Note: If ShipAddr is not specified, and a default ship-to
     * address is specified in QuickBooks for this customer, the default
     * ship-to address will be used by QuickBooks.See Addresses
     *
     * @param PhysicalAddressModel $ShipAddr
     *
     * @return SalesTransactionModel
     */
    public function setShipAddr(
        $ShipAddr
    )
    {
        $this->ShipAddr = $ShipAddr;
        return $this;
    }

    /**
     * Product: QBW
     * Date for delivery of goods or services.
     * InputType: ReadWrite
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }

    /**
     * Product: QBW
     * Date for delivery of goods or services.
     * InputType: ReadWrite
     *
     * @param \DateTime $ShipDate
     *
     * @return SalesTransactionModel
     */
    public function setShipDate(
        $ShipDate
    )
    {
        $this->ShipDate = $ShipDate;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the ShipMethod associated with the transaction.
     * InputType: ReadWrite
     *
     * @return ReferenceTypeModel
     */
    public function getShipMethodRef()
    {
        return $this->ShipMethodRef;
    }

    /**
     * Product: QBW
     * Reference to the ShipMethod associated with the transaction.
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $ShipMethodRef
     *
     * @return SalesTransactionModel
     */
    public function setShipMethodRef(
        $ShipMethodRef
    )
    {
        $this->ShipMethodRef = $ShipMethodRef;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the Template for the invoice form.
     * InputType: ReadWrite
     *
     * @return ReferenceTypeModel
     */
    public function getTemplateRef()
    {
        return $this->TemplateRef;
    }

    /**
     * Product: QBW
     * Reference to the Template for the invoice form.
     * InputType: ReadWrite
     *
     * @param ReferenceTypeModel $TemplateRef
     *
     * @return SalesTransactionModel
     */
    public function setTemplateRef(
        $TemplateRef
    )
    {
        $this->TemplateRef = $TemplateRef;
        return $this;
    }

    /**
     * Product: All
     * QBO: Indicates the total amount of the transaction. This includes the
     * total of all the charges, allowances and taxes. By default, this is
     * recalculated based on sub items total and overridden.
     * QBW: Indicates the total amount of the transaction. This includes the
     * total of all the charges, allowances and taxes.Calculated by
     * QuickBooks business logic; cannot be written to QuickBooks.
     * Filterable: QBW
     * Sortable: QBW
     * InputType: QBW: OverrideOnSync
     *
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }

    /**
     * Product: All
     * QBO: Indicates the total amount of the transaction. This includes the
     * total of all the charges, allowances and taxes. By default, this is
     * recalculated based on sub items total and overridden.
     * QBW: Indicates the total amount of the transaction. This includes the
     * total of all the charges, allowances and taxes.Calculated by
     * QuickBooks business logic; cannot be written to QuickBooks.
     * Filterable: QBW
     * Sortable: QBW
     * InputType: QBW: OverrideOnSync
     *
     * @param float $TotalAmt
     *
     * @return SalesTransactionModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

    /**
     * Product: QBW
     * Shipping provider's tracking number for the delivery of the goods
     * associated with the transaction.
     *
     * @return string
     */
    public function getTrackingNum()
    {
        return $this->TrackingNum;
    }

    /**
     * Product: QBW
     * Shipping provider's tracking number for the delivery of the goods
     * associated with the transaction.
     *
     * @param string $TrackingNum
     *
     * @return SalesTransactionModel
     */
    public function setTrackingNum(
        $TrackingNum
    )
    {
        $this->TrackingNum = $TrackingNum;
        return $this;
    }

}