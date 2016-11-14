<?php

namespace Augwa\QuickBooks\Model;

/**
 * List of rows
 *
 * Class RowsModel
 * @package Augwa\QuickBooks\Model
 */
class RowsModel
    extends Model
{

    /**
     * @var RowModel
     */
    private $Row;


    /**
     * @return RowModel
     */
    public function getRow()
    {
        return $this->Row;
    }

    /**
     * @param RowModel $Row
     *
     * @return RowsModel
     */
    public function setRow(
        $Row
    )
    {
        $this->Row = $Row;
        return $this;
    }

}