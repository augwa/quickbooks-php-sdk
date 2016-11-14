<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * A custom price or percentage change from the item's base price for a
 * specific price level
 *
 * Class PriceLevelPerItemModel
 * @package Augwa\QuickBooks\Model
 */
class PriceLevelPerItemModel
    extends IntuitEntityModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $ItemRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PriceLevelPerItemEx;


    /**
     * @return ReferenceTypeModel
     */
    public function getItemRef()
    {
        return $this->ItemRef;
    }

    /**
     * @param ReferenceTypeModel $ItemRef
     *
     * @return PriceLevelPerItemModel
     */
    public function setItemRef(
        $ItemRef
    )
    {
        $this->ItemRef = $ItemRef;
        return $this;
    }

    /**
     * Internal use only: extension place holder for PriceLevelPerItem
     *
     * @return IntuitAnyTypeModel
     */
    public function getPriceLevelPerItemEx()
    {
        return $this->PriceLevelPerItemEx;
    }

    /**
     * Internal use only: extension place holder for PriceLevelPerItem
     *
     * @param IntuitAnyTypeModel $PriceLevelPerItemEx
     *
     * @return PriceLevelPerItemModel
     */
    public function setPriceLevelPerItemEx(
        $PriceLevelPerItemEx
    )
    {
        $this->PriceLevelPerItemEx = $PriceLevelPerItemEx;
        return $this;
    }

}