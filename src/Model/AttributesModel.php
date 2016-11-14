<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class AttributesModel
 * @package Augwa\QuickBooks\Model
 */
class AttributesModel
    extends Model
{

    /**
     * @var AttributeModel
     */
    private $Attribute;


    /**
     * Describes the type
     *
     * @return AttributeModel
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }

    /**
     * Describes the type
     *
     * @param AttributeModel $Attribute
     *
     * @return AttributesModel
     */
    public function setAttribute(
        $Attribute
    )
    {
        $this->Attribute = $Attribute;
        return $this;
    }

}