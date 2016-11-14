<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * The SalesRep entity allows you to identify sales representatives and
 * track their transactions. A sales representative can be an employee, a
 * vendor, or an independent contractor. You can associate sales
 * representatives with sales deals to track their transactions.
 *
 * Class SalesRepModel
 * @package Augwa\QuickBooks\Model
 */
class SalesRepModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $Initials;

    /**
     * @var string
     * @see SalesRepTypeEnum
     */
    private $NameOf;

    /**
     * @var IntuitAnyTypeModel
     */
    private $SalesRepEx;


    /**
     * Product: QBW
     * True if active. Inactive sales reps may be hidden from display and may
     * not be used on financial transactions.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBW
     * True if active. Inactive sales reps may be hidden from display and may
     * not be used on financial transactions.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return SalesRepModel
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
     * User recognizable initials of the Sales Rep.Required for the Create
     * request. Max Length: 5 characters.
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * Product: QBW
     * User recognizable initials of the Sales Rep.Required for the Create
     * request. Max Length: 5 characters.
     *
     * @param string $Initials
     *
     * @return SalesRepModel
     */
    public function setInitials(
        $Initials
    )
    {
        $this->Initials = $Initials;
        return $this;
    }

    /**
     * Product: QBW
     * The SalesRep type. Also, one of the three entity references (either
     * the Name or the ID of the Employee, OtherName, or Vendor) is required
     * for the Create request.
     * Required: QBW
     *
     * @return string
     *
     * @see SalesRepTypeEnum
     */
    public function getNameOf()
    {
        return $this->NameOf;
    }

    /**
     * Product: QBW
     * The SalesRep type. Also, one of the three entity references (either
     * the Name or the ID of the Employee, OtherName, or Vendor) is required
     * for the Create request.
     * Required: QBW
     *
     * @param string $NameOf
     *
     * @return SalesRepModel
     *
     * @see SalesRepTypeEnum
     */
    public function setNameOf(
        $NameOf
    )
    {
        $this->NameOf = $NameOf;
        return $this;
    }

    /**
     * Product: QBW
     * Internal use only: extension place holder for SalesRep
     *
     * @return IntuitAnyTypeModel
     */
    public function getSalesRepEx()
    {
        return $this->SalesRepEx;
    }

    /**
     * Product: QBW
     * Internal use only: extension place holder for SalesRep
     *
     * @param IntuitAnyTypeModel $SalesRepEx
     *
     * @return SalesRepModel
     */
    public function setSalesRepEx(
        $SalesRepEx
    )
    {
        $this->SalesRepEx = $SalesRepEx;
        return $this;
    }

}