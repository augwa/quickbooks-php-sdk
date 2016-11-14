<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Account based expense detail for a transaction line.
 *
 * Class AccountBasedExpenseLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class AccountBasedExpenseLineDetailModel
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
    private $CustomerRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $ExpenseDetailLineDetailEx;

    /**
     * @var MarkupInfoModel
     */
    private $MarkupInfo;

    /**
     * @var float
     */
    private $TaxAmount;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxCodeRef;

    /**
     * @var float
     */
    private $TaxInclusiveAmt;


    /**
     * Product: ALL
     * Reference to the Expense account associated with the
     * service/non-sellable-item billing.
     *
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * Product: ALL
     * Reference to the Expense account associated with the
     * service/non-sellable-item billing.
     *
     * @param ReferenceTypeModel $AccountRef
     *
     * @return AccountBasedExpenseLineDetailModel
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
     * @return AccountBasedExpenseLineDetailModel
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
     * Reference to the Class associated with the expense.
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: ALL
     * Reference to the Class associated with the expense.
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return AccountBasedExpenseLineDetailModel
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
     * @return AccountBasedExpenseLineDetailModel
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
     * Internal use only: extension place holder for ExpenseDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getExpenseDetailLineDetailEx()
    {
        return $this->ExpenseDetailLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for ExpenseDetail
     *
     * @param IntuitAnyTypeModel $ExpenseDetailLineDetailEx
     *
     * @return AccountBasedExpenseLineDetailModel
     */
    public function setExpenseDetailLineDetailEx(
        $ExpenseDetailLineDetailEx
    )
    {
        $this->ExpenseDetailLineDetailEx = $ExpenseDetailLineDetailEx;
        return $this;
    }

    /**
     * Product: ALL
     * Markup information for the expense.
     *
     * @return MarkupInfoModel
     */
    public function getMarkupInfo()
    {
        return $this->MarkupInfo;
    }

    /**
     * Product: ALL
     * Markup information for the expense.
     *
     * @param MarkupInfoModel $MarkupInfo
     *
     * @return AccountBasedExpenseLineDetailModel
     */
    public function setMarkupInfo(
        $MarkupInfo
    )
    {
        $this->MarkupInfo = $MarkupInfo;
        return $this;
    }

    /**
     * Product: ALL
     * Sales tax associated with the expense.
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    /**
     * Product: ALL
     * Sales tax associated with the expense.
     *
     * @param float $TaxAmount
     *
     * @return AccountBasedExpenseLineDetailModel
     */
    public function setTaxAmount(
        $TaxAmount
    )
    {
        $this->TaxAmount = $TaxAmount;
        return $this;
    }

    /**
     * Product: ALL
     * Sales tax code associated with the sales tax for the expense.
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Product: ALL
     * Sales tax code associated with the sales tax for the expense.
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return AccountBasedExpenseLineDetailModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
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
     * @return AccountBasedExpenseLineDetailModel
     */
    public function setTaxInclusiveAmt(
        $TaxInclusiveAmt
    )
    {
        $this->TaxInclusiveAmt = $TaxInclusiveAmt;
        return $this;
    }

}