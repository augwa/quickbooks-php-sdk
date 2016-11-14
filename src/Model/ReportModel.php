<?php

namespace Augwa\QuickBooks\Model;

/**
 * Report Response Type
 *
 * Class ReportModel
 * @package Augwa\QuickBooks\Model
 */
class ReportModel
    extends Model
{

    /**
     * @var ColumnsModel
     */
    private $Columns;

    /**
     * @var ReportHeaderModel
     */
    private $Header;

    /**
     * @var RowsModel
     */
    private $Rows;


    /**
     * @return ColumnsModel
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * @param ColumnsModel $Columns
     *
     * @return ReportModel
     */
    public function setColumns(
        $Columns
    )
    {
        $this->Columns = $Columns;
        return $this;
    }

    /**
     * Report Header, contains the report options that were used to generate
     * the report
     *
     * @return ReportHeaderModel
     */
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * Report Header, contains the report options that were used to generate
     * the report
     *
     * @param ReportHeaderModel $Header
     *
     * @return ReportModel
     */
    public function setHeader(
        $Header
    )
    {
        $this->Header = $Header;
        return $this;
    }

    /**
     * @return RowsModel
     */
    public function getRows()
    {
        return $this->Rows;
    }

    /**
     * @param RowsModel $Rows
     *
     * @return ReportModel
     */
    public function setRows(
        $Rows
    )
    {
        $this->Rows = $Rows;
        return $this;
    }

}