<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial transaction representing a request for payment for goods or
 * services that have been sold.
 *
 * Class StatementChargeModel
 * @package Augwa\QuickBooks\Model
 */
class StatementChargeModel
    extends TransactionModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $ARAccountRef;

    /**
     * @var \DateTime
     */
    private $BilledDate;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var bool
     */
    private $Credit;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerRef;

    /**
     * @var \DateTime
     */
    private $DueDate;

    /**
     * @var ReferenceTypeModel
     */
    private $RemitToRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $StatementChargeEx;

    /**
     * @var float
     */
    private $TotalAmt;


    /**
     * ARAccountReferenceGroup Identifies the AR Account to be used for this
     * Credit Memo.
     * QuickBooks Notes
     * The AR Account should always be specified or a default will be used.
     *
     * @return ReferenceTypeModel
     */
    public function getARAccountRef()
    {
        return $this->ARAccountRef;
    }

    /**
     * ARAccountReferenceGroup Identifies the AR Account to be used for this
     * Credit Memo.
     * QuickBooks Notes
     * The AR Account should always be specified or a default will be used.
     *
     * @param ReferenceTypeModel $ARAccountRef
     *
     * @return StatementChargeModel
     */
    public function setARAccountRef(
        $ARAccountRef
    )
    {
        $this->ARAccountRef = $ARAccountRef;
        return $this;
    }

    /**
     * Date when the customer Statement was created
     *
     * @return \DateTime
     */
    public function getBilledDate()
    {
        return $this->BilledDate;
    }

    /**
     * Date when the customer Statement was created
     *
     * @param \DateTime $BilledDate
     *
     * @return StatementChargeModel
     */
    public function setBilledDate(
        $BilledDate
    )
    {
        $this->BilledDate = $BilledDate;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * @param ReferenceTypeModel $ClassRef
     *
     * @return StatementChargeModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * If Credit is Null or False, it is considered as Charge. If true, the
     * StatementCharge represents a Refund
     *
     * @return bool
     */
    public function getCredit()
    {
        return $this->Credit;
    }

    /**
     * If Credit is Null or False, it is considered as Charge. If true, the
     * StatementCharge represents a Refund
     *
     * @param bool $Credit
     *
     * @return StatementChargeModel
     */
    public function setCredit(
        $Credit
    )
    {
        $this->Credit = $Credit;
        return $this;
    }

    /**
     * Represents Customer (or Job)Reference
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * Represents Customer (or Job)Reference
     *
     * @param ReferenceTypeModel $CustomerRef
     *
     * @return StatementChargeModel
     */
    public function setCustomerRef(
        $CustomerRef
    )
    {
        $this->CustomerRef = $CustomerRef;
        return $this;
    }

    /**
     * Date when the Charge is to be paid.
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * Date when the Charge is to be paid.
     *
     * @param \DateTime $DueDate
     *
     * @return StatementChargeModel
     */
    public function setDueDate(
        $DueDate
    )
    {
        $this->DueDate = $DueDate;
        return $this;
    }

    /**
     * Identifies the party or location that the payment is to be remitted to
     * or sent to.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return ReferenceTypeModel
     */
    public function getRemitToRef()
    {
        return $this->RemitToRef;
    }

    /**
     * Identifies the party or location that the payment is to be remitted to
     * or sent to.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param ReferenceTypeModel $RemitToRef
     *
     * @return StatementChargeModel
     */
    public function setRemitToRef(
        $RemitToRef
    )
    {
        $this->RemitToRef = $RemitToRef;
        return $this;
    }

    /**
     * Internal use only: extension place holder for StatementCharge
     *
     * @return IntuitAnyTypeModel
     */
    public function getStatementChargeEx()
    {
        return $this->StatementChargeEx;
    }

    /**
     * Internal use only: extension place holder for StatementCharge
     *
     * @param IntuitAnyTypeModel $StatementChargeEx
     *
     * @return StatementChargeModel
     */
    public function setStatementChargeEx(
        $StatementChargeEx
    )
    {
        $this->StatementChargeEx = $StatementChargeEx;
        return $this;
    }

    /**
     * Indicates the total amount of the entity associated. This includes the
     * total of all the charges, allowances and taxes.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }

    /**
     * Indicates the total amount of the entity associated. This includes the
     * total of all the charges, allowances and taxes.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param float $TotalAmt
     *
     * @return StatementChargeModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

}