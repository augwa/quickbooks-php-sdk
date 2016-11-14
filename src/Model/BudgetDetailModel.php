<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes budget details for each budget
 *
 * Class BudgetDetailModel
 * @package Augwa\QuickBooks\Model
 */
class BudgetDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var \DateTime
     */
    private $BudgetDate;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerRef;

    /**
     * @var ReferenceTypeModel
     */
    private $DepartmentRef;


    /**
     * Product: QBO
     * Account Reference
     *
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * Product: QBO
     * Account Reference
     *
     * @param ReferenceTypeModel $AccountRef
     *
     * @return BudgetDetailModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

    /**
     * Product: QBO
     * Amount corresponding to the budget date and Account or Class Or
     * Department or Customer
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Product: QBO
     * Amount corresponding to the budget date and Account or Class Or
     * Department or Customer
     *
     * @param float $Amount
     *
     * @return BudgetDetailModel
     */
    public function setAmount(
        $Amount
    )
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * Product: QBO
     * Budget date of the budget
     *
     * @return \DateTime
     */
    public function getBudgetDate()
    {
        return $this->BudgetDate;
    }

    /**
     * Product: QBO
     * Budget date of the budget
     *
     * @param \DateTime $BudgetDate
     *
     * @return BudgetDetailModel
     */
    public function setBudgetDate(
        $BudgetDate
    )
    {
        $this->BudgetDate = $BudgetDate;
        return $this;
    }

    /**
     * Product: QBO
     * Class Reference
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: QBO
     * Class Reference
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return BudgetDetailModel
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
     * Customer Reference
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * Product: QBO
     * Customer Reference
     *
     * @param ReferenceTypeModel $CustomerRef
     *
     * @return BudgetDetailModel
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
     * Department Reference
     *
     * @return ReferenceTypeModel
     */
    public function getDepartmentRef()
    {
        return $this->DepartmentRef;
    }

    /**
     * Product: QBO
     * Department Reference
     *
     * @param ReferenceTypeModel $DepartmentRef
     *
     * @return BudgetDetailModel
     */
    public function setDepartmentRef(
        $DepartmentRef
    )
    {
        $this->DepartmentRef = $DepartmentRef;
        return $this;
    }

}