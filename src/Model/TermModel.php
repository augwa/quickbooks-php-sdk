<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * The Term entity represents the terms under which a sale is made,
 * typically expressed in the form of days due after the goods are
 * received.  Optionally, a discount of the total amount may be applied
 * if payment is made within a stipulated time.  For example, net 30
 * indicates that payment is due within 30 days.  A term of 2%/15 net 60
 * indicates that payment is due within 60 days,  with a discount of 2% 
 * if payment is made within 15 days.   Term also supports: an absolute
 * due date, a number of days from a start date, a percent discount, or
 * an absolute discount.
 *
 * Class TermModel
 * @package Augwa\QuickBooks\Model
 */
class TermModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var float
     */
    private $DiscountPercent;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var IntuitAnyTypeModel
     */
    private $SalesTermEx;

    /**
     * @var string
     */
    private $Type;


    /**
     * Product: ALL
     * If true, this entity is currently enabled for use by QuickBooks.
     * Filterable: ALL
     * Default Value: true
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: ALL
     * If true, this entity is currently enabled for use by QuickBooks.
     * Filterable: ALL
     * Default Value: true
     *
     * @param bool $Active
     *
     * @return TermModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: ALL
     * Discount percentage available against an amount if paid within the
     * days specified by DiscountDays.
     * ValidRange: ALL: Min=0, Max=100
     *
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->DiscountPercent;
    }

    /**
     * Product: ALL
     * Discount percentage available against an amount if paid within the
     * days specified by DiscountDays.
     * ValidRange: ALL: Min=0, Max=100
     *
     * @param float $DiscountPercent
     *
     * @return TermModel
     */
    public function setDiscountPercent(
        $DiscountPercent
    )
    {
        $this->DiscountPercent = $DiscountPercent;
        return $this;
    }

    /**
     * Product: ALL
     * User recognizable name for the term, for example, "Net 30".
     * ValidRange: QBW: max=31
     * ValidRange: QBO: Max=31
     * Required: ALL
     * Filterable: QBO
     * Sortable: ALL
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: ALL
     * User recognizable name for the term, for example, "Net 30".
     * ValidRange: QBW: max=31
     * ValidRange: QBO: Max=31
     * Required: ALL
     * Filterable: QBO
     * Sortable: ALL
     *
     * @param string $Name
     *
     * @return TermModel
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
     * - Internal use only: extension place holder for SalesTermEx
     *
     * @return IntuitAnyTypeModel
     */
    public function getSalesTermEx()
    {
        return $this->SalesTermEx;
    }

    /**
     * Product: ALL
     * - Internal use only: extension place holder for SalesTermEx
     *
     * @param IntuitAnyTypeModel $SalesTermEx
     *
     * @return TermModel
     */
    public function setSalesTermEx(
        $SalesTermEx
    )
    {
        $this->SalesTermEx = $SalesTermEx;
        return $this;
    }

    /**
     * Product: ALL
     * Type of the Sales Term. Valid values: Standard or DateDriven, as
     * defined by SalesTermTypeEnum.  If dueDays is not null, the Type is
     * Standard else DateDriven.
     * InputType: ALL: ReadOnly
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: ALL
     * Type of the Sales Term. Valid values: Standard or DateDriven, as
     * defined by SalesTermTypeEnum.  If dueDays is not null, the Type is
     * Standard else DateDriven.
     * InputType: ALL: ReadOnly
     *
     * @param string $Type
     *
     * @return TermModel
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}