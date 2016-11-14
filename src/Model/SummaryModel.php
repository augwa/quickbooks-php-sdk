<?php

namespace Augwa\QuickBooks\Model;

/**
 * Group Summary
 *
 * Class SummaryModel
 * @package Augwa\QuickBooks\Model
 */
class SummaryModel
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
     * @return SummaryModel
     */
    public function setColData(
        $ColData
    )
    {
        $this->ColData = $ColData;
        return $this;
    }

}