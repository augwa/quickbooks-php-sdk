<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Item based expense detail for a transaction line.
 *
 * Class ItemBasedExpenseLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class ItemBasedExpenseLineDetailModel
    extends ItemLineDetailModel
{

    /**
     * @var string
     * @see BillableStatusEnum
     */
    private $BillableStatus;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $ItemBasedExpenseLineDetailEx;

    /**
     * @var float
     */
    private $TaxInclusiveAmt;


    /**
     * Product: ALL
     * The billable status of the expense.
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
     * The billable status of the expense.
     *
     * @param string $BillableStatus
     *
     * @return ItemBasedExpenseLineDetailModel
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
     * Reference to the Customer associated with the expense.
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * Product: ALL
     * Reference to the Customer associated with the expense.
     *
     * @param ReferenceTypeModel $CustomerRef
     *
     * @return ItemBasedExpenseLineDetailModel
     */
    public function setCustomerRef(
        $CustomerRef
    )
    {
        $this->CustomerRef = $CustomerRef;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for ExpenseItemDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getItemBasedExpenseLineDetailEx()
    {
        return $this->ItemBasedExpenseLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for ExpenseItemDetail
     *
     * @param IntuitAnyTypeModel $ItemBasedExpenseLineDetailEx
     *
     * @return ItemBasedExpenseLineDetailModel
     */
    public function setItemBasedExpenseLineDetailEx(
        $ItemBasedExpenseLineDetailEx
    )
    {
        $this->ItemBasedExpenseLineDetailEx = $ItemBasedExpenseLineDetailEx;
        return $this;
    }

    /**
     * Product: QBO
     * Indicates the total amount of line item including tax.
     *
     * @return float
     */
    public function getTaxInclusiveAmt()
    {
        return $this->TaxInclusiveAmt;
    }

    /**
     * Product: QBO
     * Indicates the total amount of line item including tax.
     *
     * @param float $TaxInclusiveAmt
     *
     * @return ItemBasedExpenseLineDetailModel
     */
    public function setTaxInclusiveAmt(
        $TaxInclusiveAmt
    )
    {
        $this->TaxInclusiveAmt = $TaxInclusiveAmt;
        return $this;
    }

}