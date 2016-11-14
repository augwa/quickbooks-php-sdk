<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * JournalEntry detail for a transaction line.
 *
 * Class JournalEntryLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class JournalEntryLineDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;

    /**
     * @var string
     * @see BillableStatusEnum
     */
    private $BillableStatus;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var ReferenceTypeModel
     */
    private $DepartmentRef;

    /**
     * @var EntityTypeRefModel
     */
    private $Entity;

    /**
     * @var ReferenceTypeModel
     */
    private $JournalCodeRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $JournalEntryLineDetailEx;

    /**
     * @var string
     * @see PostingTypeEnum
     */
    private $PostingType;

    /**
     * @var float
     */
    private $TaxAmount;

    /**
     * @var string
     * @see TaxApplicableOnEnum
     */
    private $TaxApplicableOn;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxCodeRef;


    /**
     * Product: ALL
     * Reference to the Account associated with the JournalEntry line.
     *
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * Product: ALL
     * Reference to the Account associated with the JournalEntry line.
     *
     * @param ReferenceTypeModel $AccountRef
     *
     * @return JournalEntryLineDetailModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * The billable status of the journal entry line. The line is to be
     * billed to a customer if the account is an expense account and the
     * Entity Reference specifies a Customer or a Job.
     *
     * @return string
     *
     * @see BillableStatusEnum
     */
    public function getBillableStatus()
    {
        return $this->BillableStatus;
    }

    /**
     * Product: ALL
     * The billable status of the journal entry line. The line is to be
     * billed to a customer if the account is an expense account and the
     * Entity Reference specifies a Customer or a Job.
     *
     * @param string $BillableStatus
     *
     * @return JournalEntryLineDetailModel
     *
     * @see BillableStatusEnum
     */
    public function setBillableStatus(
        $BillableStatus
    )
    {
        $this->BillableStatus = $BillableStatus;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Class associated with the JournalEntry line.
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: ALL
     * Reference to the Class associated with the JournalEntry line.
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return JournalEntryLineDetailModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * Product: QBO
     * Represents Department Reference associated with the JournalEntry line.
     *
     * @return ReferenceTypeModel
     */
    public function getDepartmentRef()
    {
        return $this->DepartmentRef;
    }

    /**
     * Product: QBO
     * Represents Department Reference associated with the JournalEntry line.
     *
     * @param ReferenceTypeModel $DepartmentRef
     *
     * @return JournalEntryLineDetailModel
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
     * Reference information for the Entity (Customer/Vendor/Employee)
     * associated with the JournalEntry line.
     *
     * @return EntityTypeRefModel
     */
    public function getEntity()
    {
        return $this->Entity;
    }

    /**
     * Product: ALL
     * Reference information for the Entity (Customer/Vendor/Employee)
     * associated with the JournalEntry line.
     *
     * @param EntityTypeRefModel $Entity
     *
     * @return JournalEntryLineDetailModel
     */
    public function setEntity(
        $Entity
    )
    {
        $this->Entity = $Entity;
        return $this;
    }

    /**
     * Product: QBO
     * The Journal Code that should be associated for every journal entry
     * line. This is applicable only for FR.
     *
     * @return ReferenceTypeModel
     */
    public function getJournalCodeRef()
    {
        return $this->JournalCodeRef;
    }

    /**
     * Product: QBO
     * The Journal Code that should be associated for every journal entry
     * line. This is applicable only for FR.
     *
     * @param ReferenceTypeModel $JournalCodeRef
     *
     * @return JournalEntryLineDetailModel
     */
    public function setJournalCodeRef(
        $JournalCodeRef
    )
    {
        $this->JournalCodeRef = $JournalCodeRef;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for JournalEntryDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getJournalEntryLineDetailEx()
    {
        return $this->JournalEntryLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for JournalEntryDetail
     *
     * @param IntuitAnyTypeModel $JournalEntryLineDetailEx
     *
     * @return JournalEntryLineDetailModel
     */
    public function setJournalEntryLineDetailEx(
        $JournalEntryLineDetailEx
    )
    {
        $this->JournalEntryLineDetailEx = $JournalEntryLineDetailEx;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates whether the JournalEntry line is a Debit or Credit.
     *
     * @return string
     *
     * @see PostingTypeEnum
     */
    public function getPostingType()
    {
        return $this->PostingType;
    }

    /**
     * Product: ALL
     * Indicates whether the JournalEntry line is a Debit or Credit.
     *
     * @param string $PostingType
     *
     * @return JournalEntryLineDetailModel
     *
     * @see PostingTypeEnum
     */
    public function setPostingType(
        $PostingType
    )
    {
        $this->PostingType = $PostingType;
        return $this;
    }

    /**
     * Product: QBO
     * Tax applicable for this line transaction line
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    /**
     * Product: QBO
     * Tax applicable for this line transaction line
     *
     * @param float $TaxAmount
     *
     * @return JournalEntryLineDetailModel
     */
    public function setTaxAmount(
        $TaxAmount
    )
    {
        $this->TaxAmount = $TaxAmount;
        return $this;
    }

    /**
     * Product: QBO
     * Indicates whether the tax applicable on the line is sales or purchase
     *
     * @return string
     *
     * @see TaxApplicableOnEnum
     */
    public function getTaxApplicableOn()
    {
        return $this->TaxApplicableOn;
    }

    /**
     * Product: QBO
     * Indicates whether the tax applicable on the line is sales or purchase
     *
     * @param string $TaxApplicableOn
     *
     * @return JournalEntryLineDetailModel
     *
     * @see TaxApplicableOnEnum
     */
    public function setTaxApplicableOn(
        $TaxApplicableOn
    )
    {
        $this->TaxApplicableOn = $TaxApplicableOn;
        return $this;
    }

    /**
     * Product: QBO
     * Sales/Purchase tax code associated with the JournalEntry Line. For Non
     * US/CA Companies
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Product: QBO
     * Sales/Purchase tax code associated with the JournalEntry Line. For Non
     * US/CA Companies
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return JournalEntryLineDetailModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
        return $this;
    }

}