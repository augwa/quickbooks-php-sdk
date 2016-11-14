<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines Company Accounting Prefs details
 *
 * Class CompanyAccountingPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class CompanyAccountingPrefsModel
    extends Model
{

    /**
     * @var bool
     */
    private $AutoJournalEntryNumber;

    /**
     * @var \DateTime
     */
    private $BookCloseDate;

    /**
     * @var bool
     */
    private $ClassTrackingPerTxn;

    /**
     * @var bool
     */
    private $ClassTrackingPerTxnLine;

    /**
     * @var string
     */
    private $CustomerTerminology;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultAPAccount;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultARAccount;

    /**
     * @var string
     */
    private $DepartmentTerminology;

    /**
     * @var string
     * @see MonthEnum
     */
    private $FirstMonthOfFiscalYear;

    /**
     * @var ContactInfoModel
     */
    private $OtherContactInfo;

    /**
     * @var bool
     */
    private $RequiresAccounts;

    /**
     * @var string
     */
    private $TaxForm;

    /**
     * @var string
     * @see MonthEnum
     */
    private $TaxYearMonth;

    /**
     * @var bool
     */
    private $TrackDepartments;

    /**
     * @var bool
     */
    private $UseAccountNumbers;


    /**
     * QBW: ONLY. Enable auto journal entry number
     *
     * @return bool
     */
    public function getAutoJournalEntryNumber()
    {
        return $this->AutoJournalEntryNumber;
    }

    /**
     * QBW: ONLY. Enable auto journal entry number
     *
     * @param bool $AutoJournalEntryNumber
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setAutoJournalEntryNumber(
        $AutoJournalEntryNumber
    )
    {
        $this->AutoJournalEntryNumber = $AutoJournalEntryNumber;
        return $this;
    }

    /**
     * Product:All
     * Book closing date, if you want to specify if not leave it as null
     *
     * @return \DateTime
     */
    public function getBookCloseDate()
    {
        return $this->BookCloseDate;
    }

    /**
     * Product:All
     * Book closing date, if you want to specify if not leave it as null
     *
     * @param \DateTime $BookCloseDate
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setBookCloseDate(
        $BookCloseDate
    )
    {
        $this->BookCloseDate = $BookCloseDate;
        return $this;
    }

    /**
     * Product:All
     * Enable Class Tracking per transaction
     *
     * @return bool
     */
    public function getClassTrackingPerTxn()
    {
        return $this->ClassTrackingPerTxn;
    }

    /**
     * Product:All
     * Enable Class Tracking per transaction
     *
     * @param bool $ClassTrackingPerTxn
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setClassTrackingPerTxn(
        $ClassTrackingPerTxn
    )
    {
        $this->ClassTrackingPerTxn = $ClassTrackingPerTxn;
        return $this;
    }

    /**
     * Product:QBO
     * Enable Class Tracking per transaction line
     *
     * @return bool
     */
    public function getClassTrackingPerTxnLine()
    {
        return $this->ClassTrackingPerTxnLine;
    }

    /**
     * Product:QBO
     * Enable Class Tracking per transaction line
     *
     * @param bool $ClassTrackingPerTxnLine
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setClassTrackingPerTxnLine(
        $ClassTrackingPerTxnLine
    )
    {
        $this->ClassTrackingPerTxnLine = $ClassTrackingPerTxnLine;
        return $this;
    }

    /**
     * Product:QBO
     * Customer Terminology
     *
     * @return string
     */
    public function getCustomerTerminology()
    {
        return $this->CustomerTerminology;
    }

    /**
     * Product:QBO
     * Customer Terminology
     *
     * @param string $CustomerTerminology
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setCustomerTerminology(
        $CustomerTerminology
    )
    {
        $this->CustomerTerminology = $CustomerTerminology;
        return $this;
    }

    /**
     * Product:QBO Default APAccount
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultAPAccount()
    {
        return $this->DefaultAPAccount;
    }

    /**
     * Product:QBO Default APAccount
     *
     * @param ReferenceTypeModel $DefaultAPAccount
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setDefaultAPAccount(
        $DefaultAPAccount
    )
    {
        $this->DefaultAPAccount = $DefaultAPAccount;
        return $this;
    }

    /**
     * Product:QBO Default ARAccount
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultARAccount()
    {
        return $this->DefaultARAccount;
    }

    /**
     * Product:QBO Default ARAccount
     *
     * @param ReferenceTypeModel $DefaultARAccount
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setDefaultARAccount(
        $DefaultARAccount
    )
    {
        $this->DefaultARAccount = $DefaultARAccount;
        return $this;
    }

    /**
     * Product: QBO
     * Department terminology
     *
     * @return string
     */
    public function getDepartmentTerminology()
    {
        return $this->DepartmentTerminology;
    }

    /**
     * Product: QBO
     * Department terminology
     *
     * @param string $DepartmentTerminology
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setDepartmentTerminology(
        $DepartmentTerminology
    )
    {
        $this->DepartmentTerminology = $DepartmentTerminology;
        return $this;
    }

    /**
     * Product:All
     * Defines first Month of physical year
     *
     * @return string
     *
     * @see MonthEnum
     */
    public function getFirstMonthOfFiscalYear()
    {
        return $this->FirstMonthOfFiscalYear;
    }

    /**
     * Product:All
     * Defines first Month of physical year
     *
     * @param string $FirstMonthOfFiscalYear
     *
     * @return CompanyAccountingPrefsModel
     *
     * @see MonthEnum
     */
    public function setFirstMonthOfFiscalYear(
        $FirstMonthOfFiscalYear
    )
    {
        $this->FirstMonthOfFiscalYear = $FirstMonthOfFiscalYear;
        return $this;
    }

    /**
     * Product: QBW
     * 
     *
     * @return ContactInfoModel
     */
    public function getOtherContactInfo()
    {
        return $this->OtherContactInfo;
    }

    /**
     * Product: QBW
     * 
     *
     * @param ContactInfoModel $OtherContactInfo
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setOtherContactInfo(
        $OtherContactInfo
    )
    {
        $this->OtherContactInfo = $OtherContactInfo;
        return $this;
    }

    /**
     * Product:QBW
     * Requires account
     *
     * @return bool
     */
    public function getRequiresAccounts()
    {
        return $this->RequiresAccounts;
    }

    /**
     * Product:QBW
     * Requires account
     *
     * @param bool $RequiresAccounts
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setRequiresAccounts(
        $RequiresAccounts
    )
    {
        $this->RequiresAccounts = $RequiresAccounts;
        return $this;
    }

    /**
     * TaxForm Number
     *
     * @return string
     */
    public function getTaxForm()
    {
        return $this->TaxForm;
    }

    /**
     * TaxForm Number
     *
     * @param string $TaxForm
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setTaxForm(
        $TaxForm
    )
    {
        $this->TaxForm = $TaxForm;
        return $this;
    }

    /**
     * Product:All
     * Defines Tax Year Month
     *
     * @return string
     *
     * @see MonthEnum
     */
    public function getTaxYearMonth()
    {
        return $this->TaxYearMonth;
    }

    /**
     * Product:All
     * Defines Tax Year Month
     *
     * @param string $TaxYearMonth
     *
     * @return CompanyAccountingPrefsModel
     *
     * @see MonthEnum
     */
    public function setTaxYearMonth(
        $TaxYearMonth
    )
    {
        $this->TaxYearMonth = $TaxYearMonth;
        return $this;
    }

    /**
     * Product:QBO
     * QBO: QBO only. Enable Department Tracking
     *
     * @return bool
     */
    public function getTrackDepartments()
    {
        return $this->TrackDepartments;
    }

    /**
     * Product:QBO
     * QBO: QBO only. Enable Department Tracking
     *
     * @param bool $TrackDepartments
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setTrackDepartments(
        $TrackDepartments
    )
    {
        $this->TrackDepartments = $TrackDepartments;
        return $this;
    }

    /**
     * QBW: Only QBW supported
     *
     * @return bool
     */
    public function getUseAccountNumbers()
    {
        return $this->UseAccountNumbers;
    }

    /**
     * QBW: Only QBW supported
     *
     * @param bool $UseAccountNumbers
     *
     * @return CompanyAccountingPrefsModel
     */
    public function setUseAccountNumbers(
        $UseAccountNumbers
    )
    {
        $this->UseAccountNumbers = $UseAccountNumbers;
        return $this;
    }

}