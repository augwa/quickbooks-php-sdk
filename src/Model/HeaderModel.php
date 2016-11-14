<?php

namespace Augwa\QuickBooks\Model;

/**
 * Group Header
 *
 * Class HeaderModel
 * @package Augwa\QuickBooks\Model
 */
class HeaderModel
    extends Model
{

    /**
     * @var ColDataModel
     */
    private $ColData;


    /**
     * @return ColDataModel
     */
    public function getColData()
    {
        return $this->ColData;
    }

    /**
     * @param ColDataModel $ColData
     *
     * @return HeaderModel
     */
    public function setColData(
        $ColData
    )
    {
        $this->ColData = $ColData;
        return $this;
    }

}