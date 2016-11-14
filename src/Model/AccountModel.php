<?php

namespace Augwa\QuickBooks\Model;

/**
 * Account is a component of a Chart Of Accounts, and is part of a
 * Ledger.  Used to record a total monetary amount allocated against a
 * specific use.
 * Accounts are one of five basic types: asset, liability, revenue
 * (income), expenses, or equity.
 *
 * Class AccountModel
 * @package Augwa\QuickBooks\Model
 */
class AccountModel
    extends IntuitEntityModel
{

    /**
     * @var string
     */
    private $AccountAlias;

    /**
     * @var IntuitAnyTypeModel
     */
    private $AccountEx;

    /**
     * @var string
     */
    private $AccountSubType;

    /**
     * @var string
     * @see AccountTypeEnum
     */
    private $AccountType;

    /**
     * @var string
     */
    private $AcctNum;

    /**
     * @var string
     */
    private $AcctNumExtn;

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $BankNum;

    /**
     * @var string
     * @see AccountClassificationEnum
     */
    private $Classification;

    /**
     * @var ReferenceTypeModel
     */
    private $CurrencyRef;

    /**
     * @var float
     */
    private $CurrentBalance;

    /**
     * @var float
     */
    private $CurrentBalanceWithSubAccounts;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $FIName;

    /**
     * @var string
     */
    private $FullyQualifiedName;

    /**
     * @var ReferenceTypeModel
     */
    private $JournalCodeRef;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var bool
     */
    private $OnlineBankingEnabled;

    /**
     * @var float
     */
    private $OpeningBalance;

    /**
     * @var \DateTime
     */
    private $OpeningBalanceDate;

    /**
     * @var ReferenceTypeModel
     */
    private $ParentRef;

    /**
     * @var bool
     */
    private $SubAccount;

    /**
     * @var bool
     */
    private $TaxAccount;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxCodeRef;

    /**
     * @var string
     */
    private $TxnLocationType;


    /**
     * Product: ALL
     * Display Name of the account that will be shown in Transaction Forms
     * based on Account Category
     * ValidRange: QBO: Max=100
     *
     * @return string
     */
    public function getAccountAlias()
    {
        return $this->AccountAlias;
    }

    /**
     * Product: ALL
     * Display Name of the account that will be shown in Transaction Forms
     * based on Account Category
     * ValidRange: QBO: Max=100
     *
     * @param string $AccountAlias
     *
     * @return AccountModel
     */
    public function setAccountAlias(
        $AccountAlias
    )
    {
        $this->AccountAlias = $AccountAlias;
        return $this;
    }

    /**
     * Product: ALL
     * Extension place holder for Account.
     *
     * @return IntuitAnyTypeModel
     */
    public function getAccountEx()
    {
        return $this->AccountEx;
    }

    /**
     * Product: ALL
     * Extension place holder for Account.
     *
     * @param IntuitAnyTypeModel $AccountEx
     *
     * @return AccountModel
     */
    public function setAccountEx(
        $AccountEx
    )
    {
        $this->AccountEx = $AccountEx;
        return $this;
    }

    /**
     * Product: QBO
     * AccountSubTypeEnum specificies QBO on detail type. If not specified
     * default value are listed for each SubType
     *
     * @return string
     */
    public function getAccountSubType()
    {
        return $this->AccountSubType;
    }

    /**
     * Product: QBO
     * AccountSubTypeEnum specificies QBO on detail type. If not specified
     * default value are listed for each SubType
     *
     * @param string $AccountSubType
     *
     * @return AccountModel
     */
    public function setAccountSubType(
        $AccountSubType
    )
    {
        $this->AccountSubType = $AccountSubType;
        return $this;
    }

    /**
     * Product: ALL
     * Type is a detailed account classification that specifies the use of
     * this account. 16 type of account subtypes available in AccountTypeEnum
     * Filterable: QBW
     * Required: ALL
     *
     * @return string
     *
     * @see AccountTypeEnum
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }

    /**
     * Product: ALL
     * Type is a detailed account classification that specifies the use of
     * this account. 16 type of account subtypes available in AccountTypeEnum
     * Filterable: QBW
     * Required: ALL
     *
     * @param string $AccountType
     *
     * @return AccountModel
     *
     * @see AccountTypeEnum
     */
    public function setAccountType(
        $AccountType
    )
    {
        $this->AccountType = $AccountType;
        return $this;
    }

    /**
     * Product: ALL
     * User entered/specified account number to help the user in identifying
     * the account within the chart-of-accounts and in  deciding what should
     * be posted to the account.  Examples of numbering accounts:
     * 1000s: Assets
     * 2000s: Liabilities
     * 3000s: Equity
     * 4000s: Income
     * 5000s: Cost of Sales
     * 6000s, 7000s: Other operating expenses
     * 8000s: Other income
     * 9000s: Other expenses
     * ValidRange: QBW: max=7
     *
     * @return string
     */
    public function getAcctNum()
    {
        return $this->AcctNum;
    }

    /**
     * Product: ALL
     * User entered/specified account number to help the user in identifying
     * the account within the chart-of-accounts and in  deciding what should
     * be posted to the account.  Examples of numbering accounts:
     * 1000s: Assets
     * 2000s: Liabilities
     * 3000s: Equity
     * 4000s: Income
     * 5000s: Cost of Sales
     * 6000s, 7000s: Other operating expenses
     * 8000s: Other income
     * 9000s: Other expenses
     * ValidRange: QBW: max=7
     *
     * @param string $AcctNum
     *
     * @return AccountModel
     */
    public function setAcctNum(
        $AcctNum
    )
    {
        $this->AcctNum = $AcctNum;
        return $this;
    }

    /**
     * Product: QBO
     * An extension to the base account number that can be added to Customer
     * A/R or Supplier A/P accounts.
     *
     * @return string
     */
    public function getAcctNumExtn()
    {
        return $this->AcctNumExtn;
    }

    /**
     * Product: QBO
     * An extension to the base account number that can be added to Customer
     * A/R or Supplier A/P accounts.
     *
     * @param string $AcctNumExtn
     *
     * @return AccountModel
     */
    public function setAcctNumExtn(
        $AcctNumExtn
    )
    {
        $this->AcctNumExtn = $AcctNumExtn;
        return $this;
    }

    /**
     * Product: ALL
     * Whether or not active inactive accounts may be hidden from most
     * display purposes and may not be posted to.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: ALL
     * Whether or not active inactive accounts may be hidden from most
     * display purposes and may not be posted to.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return AccountModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: QBW
     * Bank Account Number, should include routing number whatever else
     * depending upon the context, this may be the credit card number or the
     * checking account number, etc.
     * ValidRange: QBW: max=25
     *
     * @return string
     */
    public function getBankNum()
    {
        return $this->BankNum;
    }

    /**
     * Product: QBW
     * Bank Account Number, should include routing number whatever else
     * depending upon the context, this may be the credit card number or the
     * checking account number, etc.
     * ValidRange: QBW: max=25
     *
     * @param string $BankNum
     *
     * @return AccountModel
     */
    public function setBankNum(
        $BankNum
    )
    {
        $this->BankNum = $BankNum;
        return $this;
    }

    /**
     * Product: ALL
     * 5 types of classification an account classified.  Suggested examples
     * of account type are Asset, Equity, Expense, Liability, Revenue
     * Filterable: QBW
     *
     * @return string
     *
     * @see AccountClassificationEnum
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * Product: ALL
     * 5 types of classification an account classified.  Suggested examples
     * of account type are Asset, Equity, Expense, Liability, Revenue
     * Filterable: QBW
     *
     * @param string $Classification
     *
     * @return AccountModel
     *
     * @see AccountClassificationEnum
     */
    public function setClassification(
        $Classification
    )
    {
        $this->Classification = $Classification;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Currency that this account will hold the amounts in.
     *
     * @return ReferenceTypeModel
     */
    public function getCurrencyRef()
    {
        return $this->CurrencyRef;
    }

    /**
     * Product: ALL
     * Reference to the Currency that this account will hold the amounts in.
     *
     * @param ReferenceTypeModel $CurrencyRef
     *
     * @return AccountModel
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
     * Specifies the balance amount for the current Account. Valid for
     * Balance Sheet accounts.
     * InputType: QBW: ReadOnly
     *
     * @return float
     */
    public function getCurrentBalance()
    {
        return $this->CurrentBalance;
    }

    /**
     * Product: ALL
     * Specifies the balance amount for the current Account. Valid for
     * Balance Sheet accounts.
     * InputType: QBW: ReadOnly
     *
     * @param float $CurrentBalance
     *
     * @return AccountModel
     */
    public function setCurrentBalance(
        $CurrentBalance
    )
    {
        $this->CurrentBalance = $CurrentBalance;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the cumulative balance amount for the current Account and
     * all its sub-accounts.
     * InputType: QBW: ReadOnly
     *
     * @return float
     */
    public function getCurrentBalanceWithSubAccounts()
    {
        return $this->CurrentBalanceWithSubAccounts;
    }

    /**
     * Product: ALL
     * Specifies the cumulative balance amount for the current Account and
     * all its sub-accounts.
     * InputType: QBW: ReadOnly
     *
     * @param float $CurrentBalanceWithSubAccounts
     *
     * @return AccountModel
     */
    public function setCurrentBalanceWithSubAccounts(
        $CurrentBalanceWithSubAccounts
    )
    {
        $this->CurrentBalanceWithSubAccounts = $CurrentBalanceWithSubAccounts;
        return $this;
    }

    /**
     * Product: ALL
     * User entered description for the account, which may include user
     * entered information to guide bookkeepers/accountants in deciding what
     * journal entries to post to the account.
     * ValidRange: QBW: Max=200
     * ValidRange: QBO: Max=100
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Product: ALL
     * User entered description for the account, which may include user
     * entered information to guide bookkeepers/accountants in deciding what
     * journal entries to post to the account.
     * ValidRange: QBW: Max=200
     * ValidRange: QBO: Max=100
     *
     * @param string $Description
     *
     * @return AccountModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates the name of financial institution name if Account is linked
     * with Online banking. Valid only if account is online banking enabled.
     * This is optional and read-only.
     * InputType: ALL: ReadOnly
     *
     * @return string
     */
    public function getFIName()
    {
        return $this->FIName;
    }

    /**
     * Product: ALL
     * Indicates the name of financial institution name if Account is linked
     * with Online banking. Valid only if account is online banking enabled.
     * This is optional and read-only.
     * InputType: ALL: ReadOnly
     *
     * @param string $FIName
     *
     * @return AccountModel
     */
    public function setFIName(
        $FIName
    )
    {
        $this->FIName = $FIName;
        return $this;
    }

    /**
     * Product: ALL
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of:  Parent:Account1:SubAccount1:SubAccount2
     * InputType: ReadOnly
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->FullyQualifiedName;
    }

    /**
     * Product: ALL
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of:  Parent:Account1:SubAccount1:SubAccount2
     * InputType: ReadOnly
     *
     * @param string $FullyQualifiedName
     *
     * @return AccountModel
     */
    public function setFullyQualifiedName(
        $FullyQualifiedName
    )
    {
        $this->FullyQualifiedName = $FullyQualifiedName;
        return $this;
    }

    /**
     * Product: QBO
     * The Journal Code that is associated with the account. This is required
     * only for Bank accounts. This is applicable only in FR.
     * InputType: ALL: ReadOnly
     *
     * @return ReferenceTypeModel
     */
    public function getJournalCodeRef()
    {
        return $this->JournalCodeRef;
    }

    /**
     * Product: QBO
     * The Journal Code that is associated with the account. This is required
     * only for Bank accounts. This is applicable only in FR.
     * InputType: ALL: ReadOnly
     *
     * @param ReferenceTypeModel $JournalCodeRef
     *
     * @return AccountModel
     */
    public function setJournalCodeRef(
        $JournalCodeRef
    )
    {
        $this->JournalCodeRef = $JournalCodeRef;
        return $this;
    }

    /**
     * User recognizable name for the Account.
     * Product: ALL
     * Required: ALL
     * Filterable: QBW
     * ValidRange: QBW: Max=31
     * ValidRange: QBO: Max=100
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * User recognizable name for the Account.
     * Product: ALL
     * Required: ALL
     * Filterable: QBW
     * ValidRange: QBW: Max=31
     * ValidRange: QBO: Max=100
     *
     * @param string $Name
     *
     * @return AccountModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates if the Account is linked with Online Banking feature
     * (automatically download transactions) of QuickBooks Online or
     * QuickBooks Desktop. Null or false indicates not linked with online
     * banking. True if Online banking based download is enabled for this
     * account.
     * InputType: ALL: ReadOnly
     *
     * @return bool
     */
    public function getOnlineBankingEnabled()
    {
        return $this->OnlineBankingEnabled;
    }

    /**
     * Product: ALL
     * Indicates if the Account is linked with Online Banking feature
     * (automatically download transactions) of QuickBooks Online or
     * QuickBooks Desktop. Null or false indicates not linked with online
     * banking. True if Online banking based download is enabled for this
     * account.
     * InputType: ALL: ReadOnly
     *
     * @param bool $OnlineBankingEnabled
     *
     * @return AccountModel
     */
    public function setOnlineBankingEnabled(
        $OnlineBankingEnabled
    )
    {
        $this->OnlineBankingEnabled = $OnlineBankingEnabled;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the Opening Balance amount when creating a new Balance Sheet
     * account.
     *
     * @return float
     */
    public function getOpeningBalance()
    {
        return $this->OpeningBalance;
    }

    /**
     * Product: ALL
     * Specifies the Opening Balance amount when creating a new Balance Sheet
     * account.
     *
     * @param float $OpeningBalance
     *
     * @return AccountModel
     */
    public function setOpeningBalance(
        $OpeningBalance
    )
    {
        $this->OpeningBalance = $OpeningBalance;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the Date of the Opening Balance amount when creating a new
     * Balance Sheet account.
     *
     * @return \DateTime
     */
    public function getOpeningBalanceDate()
    {
        return $this->OpeningBalanceDate;
    }

    /**
     * Product: ALL
     * Specifies the Date of the Opening Balance amount when creating a new
     * Balance Sheet account.
     *
     * @param \DateTime $OpeningBalanceDate
     *
     * @return AccountModel
     */
    public function setOpeningBalanceDate(
        $OpeningBalanceDate
    )
    {
        $this->OpeningBalanceDate = $OpeningBalanceDate;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the Parent AccountId if this represents a SubAccount. Else
     * null or empty
     *
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * Product: ALL
     * Specifies the Parent AccountId if this represents a SubAccount. Else
     * null or empty
     *
     * @param ReferenceTypeModel $ParentRef
     *
     * @return AccountModel
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
     * Specifies the Account is a SubAccount or Not. True if subaccount,
     * false or null if it is top-level account
     *
     * @return bool
     */
    public function getSubAccount()
    {
        return $this->SubAccount;
    }

    /**
     * Product: ALL
     * Specifies the Account is a SubAccount or Not. True if subaccount,
     * false or null if it is top-level account
     *
     * @param bool $SubAccount
     *
     * @return AccountModel
     */
    public function setSubAccount(
        $SubAccount
    )
    {
        $this->SubAccount = $SubAccount;
        return $this;
    }

    /**
     * Product: ALL
     * Describes if the account is taxable
     *
     * @return bool
     */
    public function getTaxAccount()
    {
        return $this->TaxAccount;
    }

    /**
     * Product: ALL
     * Describes if the account is taxable
     *
     * @param bool $TaxAccount
     *
     * @return AccountModel
     */
    public function setTaxAccount(
        $TaxAccount
    )
    {
        $this->TaxAccount = $TaxAccount;
        return $this;
    }

    /**
     * Product: QBW
     * If the account is taxable, refers to taxcode reference if applicable
     * I18n: QBW: GlobalOnly
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Product: QBW
     * If the account is taxable, refers to taxcode reference if applicable
     * I18n: QBW: GlobalOnly
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return AccountModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
        return $this;
    }

    /**
     * Product: ALL
     * Location Type for the Transaction.
     * ValidRange: QBO: Max=50
     *
     * @return string
     */
    public function getTxnLocationType()
    {
        return $this->TxnLocationType;
    }

    /**
     * Product: ALL
     * Location Type for the Transaction.
     * ValidRange: QBO: Max=50
     *
     * @param string $TxnLocationType
     *
     * @return AccountModel
     */
    public function setTxnLocationType(
        $TxnLocationType
    )
    {
        $this->TxnLocationType = $TxnLocationType;
        return $this;
    }

}