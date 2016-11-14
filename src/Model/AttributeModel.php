<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class AttributeModel
 * @package Augwa\QuickBooks\Model
 */
class AttributeModel
    extends Model
{

    /**
     * @var string
     */
    private $Type;

    /**
     * @var string
     */
    private $Value;


    /**
     * Describes the Name
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Describes the Name
     *
     * @param string $Type
     *
     * @return AttributeModel
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * Describes the Value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Describes the Value
     *
     * @param string $Value
     *
     * @return AttributeModel
     */
    public function setValue(
        $Value
    )
    {
        $this->Value = $Value;
        return $this;
    }

}