<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Detail for a group item line, including the lines expanded from the
 * group item.
 *
 * Class GroupLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class GroupLineDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $GroupItemRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $GroupLineDetailEx;

    /**
     * @var LineModel
     */
    private $Line;

    /**
     * @var float
     */
    private $Quantity;

    /**
     * @var \DateTime
     */
    private $ServiceDate;

    /**
     * @var UOMRefModel
     */
    private $UOMRef;


    /**
     * Product: ALL
     * Reference to a group item for all the lines that belong to the group.
     *
     * @return ReferenceTypeModel
     */
    public function getGroupItemRef()
    {
        return $this->GroupItemRef;
    }

    /**
     * Product: ALL
     * Reference to a group item for all the lines that belong to the group.
     *
     * @param ReferenceTypeModel $GroupItemRef
     *
     * @return GroupLineDetailModel
     */
    public function setGroupItemRef(
        $GroupItemRef
    )
    {
        $this->GroupItemRef = $GroupItemRef;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for GroupLineDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getGroupLineDetailEx()
    {
        return $this->GroupLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for GroupLineDetail
     *
     * @param IntuitAnyTypeModel $GroupLineDetailEx
     *
     * @return GroupLineDetailModel
     */
    public function setGroupLineDetailEx(
        $GroupLineDetailEx
    )
    {
        $this->GroupLineDetailEx = $GroupLineDetailEx;
        return $this;
    }

    /**
     * Product: ALL
     * The list of lines expanded from the group item. Note that a group line
     * cannot itself contain group lines.
     *
     * @return LineModel
     */
    public function getLine()
    {
        return $this->Line;
    }

    /**
     * Product: ALL
     * The list of lines expanded from the group item. Note that a group line
     * cannot itself contain group lines.
     *
     * @param LineModel $Line
     *
     * @return GroupLineDetailModel
     */
    public function setLine(
        $Line
    )
    {
        $this->Line = $Line;
        return $this;
    }

    /**
     * Product: ALL
     * Quantity of the group item.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * Product: ALL
     * Quantity of the group item.
     *
     * @param float $Quantity
     *
     * @return GroupLineDetailModel
     */
    public function setQuantity(
        $Quantity
    )
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * Product: ALL
     * Date when the service is performed.
     *
     * @return \DateTime
     */
    public function getServiceDate()
    {
        return $this->ServiceDate;
    }

    /**
     * Product: ALL
     * Date when the service is performed.
     *
     * @param \DateTime $ServiceDate
     *
     * @return GroupLineDetailModel
     */
    public function setServiceDate(
        $ServiceDate
    )
    {
        $this->ServiceDate = $ServiceDate;
        return $this;
    }

    /**
     * Product: ALL
     * Unit of Measure reference.
     *
     * @return UOMRefModel
     */
    public function getUOMRef()
    {
        return $this->UOMRef;
    }

    /**
     * Product: ALL
     * Unit of Measure reference.
     *
     * @param UOMRefModel $UOMRef
     *
     * @return GroupLineDetailModel
     */
    public function setUOMRef(
        $UOMRef
    )
    {
        $this->UOMRef = $UOMRef;
        return $this;
    }

}