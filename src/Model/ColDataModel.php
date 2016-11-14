<?php

namespace Augwa\QuickBooks\Model;

/**
 * One ColData can contain one column
 *
 * Class ColDataModel
 * @package Augwa\QuickBooks\Model
 */
class ColDataModel
    extends Model
{

    /**
     * @var AttributesModel
     */
    private $Attributes;


    /**
     * Describes the column attributes
     *
     * @return AttributesModel
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * Describes the column attributes
     *
     * @param AttributesModel $Attributes
     *
     * @return ColDataModel
     */
    public function setAttributes(
        $Attributes
    )
    {
        $this->Attributes = $Attributes;
        return $this;
    }

}