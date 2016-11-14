<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial transaction representing a request for credit on payment for
 * Goods or services that have been sold.
 *
 * Class ChargeCreditModel
 * @package Augwa\QuickBooks\Model
 */
class ChargeCreditModel
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
     * @var IntuitAnyTypeModel
     */
    private $ChargeCreditEx;

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
     * @var float
     */
    private $TotalAmt;


    /**
     * ARAccountReferenceGroup Identifies the AR Account to
     * Be used for this Credit Memo. QuickBooks Notes The AR
     * Account should always be specified or a default will be used.
     *
     * @return ReferenceTypeModel
     */
    public function getARAccountRef()
    {
        return $this->ARAccountRef;
    }

    /**
     * ARAccountReferenceGroup Identifies the AR Account to
     * Be used for this Credit Memo. QuickBooks Notes The AR
     * Account should always be specified or a default will be used.
     *
     * @param ReferenceTypeModel $ARAccountRef
     *
     * @return ChargeCreditModel
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
     * @return ChargeCreditModel
     */
    public function setBilledDate(
        $BilledDate
    )
    {
        $this->BilledDate = $BilledDate;
        return $this;
    }

    /**
     * Internal use only: extension place holder for
     * ChargeCredit
     *
     * @return IntuitAnyTypeModel
     */
    public function getChargeCreditEx()
    {
        return $this->ChargeCreditEx;
    }

    /**
     * Internal use only: extension place holder for
     * ChargeCredit
     *
     * @param IntuitAnyTypeModel $ChargeCreditEx
     *
     * @return ChargeCreditModel
     */
    public function setChargeCreditEx(
        $ChargeCreditEx
    )
    {
        $this->ChargeCreditEx = $ChargeCreditEx;
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
     * @return ChargeCreditModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * If Credit is Null or False, it is considered as
     * Charge. If true, the ChargeCredit represents a Refund
     *
     * @return bool
     */
    public function getCredit()
    {
        return $this->Credit;
    }

    /**
     * If Credit is Null or False, it is considered as
     * Charge. If true, the ChargeCredit represents a Refund
     *
     * @param bool $Credit
     *
     * @return ChargeCreditModel
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
     * @return ChargeCreditModel
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
     * @return ChargeCreditModel
     */
    public function setDueDate(
        $DueDate
    )
    {
        $this->DueDate = $DueDate;
        return $this;
    }

    /**
     * Identifies the party or location that the payment is
     * To be remitted to or sent to. QuickBooks Notes Non
     * QB-writable.
     *
     * @return ReferenceTypeModel
     */
    public function getRemitToRef()
    {
        return $this->RemitToRef;
    }

    /**
     * Identifies the party or location that the payment is
     * To be remitted to or sent to. QuickBooks Notes Non
     * QB-writable.
     *
     * @param ReferenceTypeModel $RemitToRef
     *
     * @return ChargeCreditModel
     */
    public function setRemitToRef(
        $RemitToRef
    )
    {
        $this->RemitToRef = $RemitToRef;
        return $this;
    }

    /**
     * Indicates the total amount of the entity associated.
     * This includes the total of all the charges, allowances and taxes.
     * QuickBooks Notes Non QB-writable.
     *
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }

    /**
     * Indicates the total amount of the entity associated.
     * This includes the total of all the charges, allowances and taxes.
     * QuickBooks Notes Non QB-writable.
     *
     * @param float $TotalAmt
     *
     * @return ChargeCreditModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

}