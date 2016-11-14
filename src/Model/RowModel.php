<?php

namespace Augwa\QuickBooks\Model;

/**
 * One Row can contain any number of columns
 *
 * Class RowModel
 * @package Augwa\QuickBooks\Model
 */
class RowModel
    extends Model
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $parentId;


    /**
     * @return string
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return RowModel
     */
    public function setid(
        $id
    )
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getparentId()
    {
        return $this->parentId;
    }

    /**
     * @param string $parentId
     *
     * @return RowModel
     */
    public function setparentId(
        $parentId
    )
    {
        $this->parentId = $parentId;
        return $this;
    }

}