<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes Budget specifications
 *
 * Class BudgetModel
 * @package Augwa\QuickBooks\Model
 */
class BudgetModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var BudgetDetailModel
     */
    private $BudgetDetail;

    /**
     * @var string
     * @see BudgetEntryTypeEnum
     */
    private $BudgetEntryType;

    /**
     * @var string
     * @see BudgetTypeEnum
     */
    private $BudgetType;

    /**
     * @var \DateTime
     */
    private $EndDate;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var \DateTime
     */
    private $StartDate;


    /**
     * Product: QBO
     * Active budget or inactive
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBO
     * Active budget or inactive
     *
     * @param bool $Active
     *
     * @return BudgetModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: QBO
     * Budget details are here
     *
     * @return BudgetDetailModel
     */
    public function getBudgetDetail()
    {
        return $this->BudgetDetail;
    }

    /**
     * Product: QBO
     * Budget details are here
     *
     * @param BudgetDetailModel $BudgetDetail
     *
     * @return BudgetModel
     */
    public function setBudgetDetail(
        $BudgetDetail
    )
    {
        $this->BudgetDetail = $BudgetDetail;
        return $this;
    }

    /**
     * Product: QBO
     * Budget Entry Type
     *
     * @return string
     *
     * @see BudgetEntryTypeEnum
     */
    public function getBudgetEntryType()
    {
        return $this->BudgetEntryType;
    }

    /**
     * Product: QBO
     * Budget Entry Type
     *
     * @param string $BudgetEntryType
     *
     * @return BudgetModel
     *
     * @see BudgetEntryTypeEnum
     */
    public function setBudgetEntryType(
        $BudgetEntryType
    )
    {
        $this->BudgetEntryType = $BudgetEntryType;
        return $this;
    }

    /**
     * Product: QBO
     * Budget Type
     *
     * @return string
     *
     * @see BudgetTypeEnum
     */
    public function getBudgetType()
    {
        return $this->BudgetType;
    }

    /**
     * Product: QBO
     * Budget Type
     *
     * @param string $BudgetType
     *
     * @return BudgetModel
     *
     * @see BudgetTypeEnum
     */
    public function setBudgetType(
        $BudgetType
    )
    {
        $this->BudgetType = $BudgetType;
        return $this;
    }

    /**
     * Product: QBO
     * End date of the budget
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Product: QBO
     * End date of the budget
     *
     * @param \DateTime $EndDate
     *
     * @return BudgetModel
     */
    public function setEndDate(
        $EndDate
    )
    {
        $this->EndDate = $EndDate;
        return $this;
    }

    /**
     * Product: QBO
     * Name of the budget
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBO
     * Name of the budget
     *
     * @param string $Name
     *
     * @return BudgetModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Product: QBO
     * Starting date of the budget
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Product: QBO
     * Starting date of the budget
     *
     * @param \DateTime $StartDate
     *
     * @return BudgetModel
     */
    public function setStartDate(
        $StartDate
    )
    {
        $this->StartDate = $StartDate;
        return $this;
    }

}