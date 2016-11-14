<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Contains the details of an inventory assembly item.
 *
 * Class ItemAssemblyDetailModel
 * @package Augwa\QuickBooks\Model
 */
class ItemAssemblyDetailModel
    extends Model
{

    /**
     * @var ItemComponentLineModel
     */
    private $ItemAssemblyLine;


    /**
     * Product: ALL
     * Contains the line details of an inventory assembly item.
     *
     * @return ItemComponentLineModel
     */
    public function getItemAssemblyLine()
    {
        return $this->ItemAssemblyLine;
    }

    /**
     * Product: ALL
     * Contains the line details of an inventory assembly item.
     *
     * @param ItemComponentLineModel $ItemAssemblyLine
     *
     * @return ItemAssemblyDetailModel
     */
    public function setItemAssemblyLine(
        $ItemAssemblyLine
    )
    {
        $this->ItemAssemblyLine = $ItemAssemblyLine;
        return $this;
    }

}