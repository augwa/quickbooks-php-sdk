<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes a column
 *
 * Class ColumnModel
 * @package Augwa\QuickBooks\Model
 */
class ColumnModel
    extends Model
{

    /**
     * @var string
     */
    private $ColTitle;

    /**
     * @var string
     */
    private $ColType;

    /**
     * @var ColumnsModel
     */
    private $Columns;

    /**
     * @var NameValueModel
     */
    private $MetaData;


    /**
     * Describes the column title name
     *
     * @return string
     */
    public function getColTitle()
    {
        return $this->ColTitle;
    }

    /**
     * Describes the column title name
     *
     * @param string $ColTitle
     *
     * @return ColumnModel
     */
    public function setColTitle(
        $ColTitle
    )
    {
        $this->ColTitle = $ColTitle;
        return $this;
    }

    /**
     * Describes the column type enumeration
     *
     * @return string
     */
    public function getColType()
    {
        return $this->ColType;
    }

    /**
     * Describes the column type enumeration
     *
     * @param string $ColType
     *
     * @return ColumnModel
     */
    public function setColType(
        $ColType
    )
    {
        $this->ColType = $ColType;
        return $this;
    }

    /**
     * Subcolumns of the column
     *
     * @return ColumnsModel
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * Subcolumns of the column
     *
     * @param ColumnsModel $Columns
     *
     * @return ColumnModel
     */
    public function setColumns(
        $Columns
    )
    {
        $this->Columns = $Columns;
        return $this;
    }

    /**
     * Column Metadata
     *
     * @return NameValueModel
     */
    public function getMetaData()
    {
        return $this->MetaData;
    }

    /**
     * Column Metadata
     *
     * @param NameValueModel $MetaData
     *
     * @return ColumnModel
     */
    public function setMetaData(
        $MetaData
    )
    {
        $this->MetaData = $MetaData;
        return $this;
    }

}