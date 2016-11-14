<?php

namespace Augwa\QuickBooks\Model;

/**
 * List of columns
 *
 * Class ColumnsModel
 * @package Augwa\QuickBooks\Model
 */
class ColumnsModel
    extends Model
{

    /**
     * @var ColumnModel
     */
    private $Column;


    /**
     * Column of the report
     *
     * @return ColumnModel
     */
    public function getColumn()
    {
        return $this->Column;
    }

    /**
     * Column of the report
     *
     * @param ColumnModel $Column
     *
     * @return ColumnsModel
     */
    public function setColumn(
        $Column
    )
    {
        $this->Column = $Column;
        return $this;
    }

}