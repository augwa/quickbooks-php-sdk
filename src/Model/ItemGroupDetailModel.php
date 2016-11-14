<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Contains the details of a group item.
 *
 * Class ItemGroupDetailModel
 * @package Augwa\QuickBooks\Model
 */
class ItemGroupDetailModel
    extends Model
{

    /**
     * @var ItemComponentLineModel
     */
    private $ItemGroupLine;


    /**
     * Product: ALL
     * Contains the line details of a group item.
     *
     * @return ItemComponentLineModel
     */
    public function getItemGroupLine()
    {
        return $this->ItemGroupLine;
    }

    /**
     * Product: ALL
     * Contains the line details of a group item.
     *
     * @param ItemComponentLineModel $ItemGroupLine
     *
     * @return ItemGroupDetailModel
     */
    public function setItemGroupLine(
        $ItemGroupLine
    )
    {
        $this->ItemGroupLine = $ItemGroupLine;
        return $this;
    }

}