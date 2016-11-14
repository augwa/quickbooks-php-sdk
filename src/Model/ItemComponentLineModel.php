<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Constituent line of a group item.
 *
 * Class ItemComponentLineModel
 * @package Augwa\QuickBooks\Model
 */
class ItemComponentLineModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $ItemRef;

    /**
     * @var float
     */
    private $Qty;

    /**
     * @var UOMRefModel
     */
    private $UOMRef;


    /**
     * Product: ALL
     * Reference to an Item. For an Assembly item, this must be a reference
     * to an Inventory Item needed in the assembly.
     *
     * @return ReferenceTypeModel
     */
    public function getItemRef()
    {
        return $this->ItemRef;
    }

    /**
     * Product: ALL
     * Reference to an Item. For an Assembly item, this must be a reference
     * to an Inventory Item needed in the assembly.
     *
     * @param ReferenceTypeModel $ItemRef
     *
     * @return ItemComponentLineModel
     */
    public function setItemRef(
        $ItemRef
    )
    {
        $this->ItemRef = $ItemRef;
        return $this;
    }

    /**
     * Product: ALL
     * Quantity of items.
     *
     * @return float
     */
    public function getQty()
    {
        return $this->Qty;
    }

    /**
     * Product: ALL
     * Quantity of items.
     *
     * @param float $Qty
     *
     * @return ItemComponentLineModel
     */
    public function setQty(
        $Qty
    )
    {
        $this->Qty = $Qty;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the unit of measure (within UOMSetRef) for this line
     * item. Examples: "each" or "box".
     *
     * @return UOMRefModel
     */
    public function getUOMRef()
    {
        return $this->UOMRef;
    }

    /**
     * Product: ALL
     * Reference to the unit of measure (within UOMSetRef) for this line
     * item. Examples: "each" or "box".
     *
     * @param UOMRefModel $UOMRef
     *
     * @return ItemComponentLineModel
     */
    public function setUOMRef(
        $UOMRef
    )
    {
        $this->UOMRef = $UOMRef;
        return $this;
    }

}