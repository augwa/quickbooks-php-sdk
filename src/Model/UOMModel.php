<?php

namespace Augwa\QuickBooks\Model;

/**
 * The UOM type defines the data used to represent a set of equivalent
 * units and the conversion rates to other related units. It allows
 * showing what quantities, prices, rates, and costs are based on.
 *
 * Class UOMModel
 * @package Augwa\QuickBooks\Model
 */
class UOMModel
    extends IntuitEntityModel
{

    /**
     * @var string
     */
    private $Abbrv;

    /**
     * @var string
     * @see UOMBaseTypeEnum
     */
    private $BaseType;

    /**
     * @var UOMConvUnitModel
     */
    private $ConvUnit;

    /**
     * @var string
     */
    private $Name;


    /**
     * Abbreviation of the Unit of Measure.
     * 
     * Required for the create operation.
     * Max Length: 31
     *
     * @return string
     */
    public function getAbbrv()
    {
        return $this->Abbrv;
    }

    /**
     * Abbreviation of the Unit of Measure.
     * 
     * Required for the create operation.
     * Max Length: 31
     *
     * @param string $Abbrv
     *
     * @return UOMModel
     */
    public function setAbbrv(
        $Abbrv
    )
    {
        $this->Abbrv = $Abbrv;
        return $this;
    }

    /**
     * 
     * Required for the create operation.
     *
     * @return string
     *
     * @see UOMBaseTypeEnum
     */
    public function getBaseType()
    {
        return $this->BaseType;
    }

    /**
     * 
     * Required for the create operation.
     *
     * @param string $BaseType
     *
     * @return UOMModel
     *
     * @see UOMBaseTypeEnum
     */
    public function setBaseType(
        $BaseType
    )
    {
        $this->BaseType = $BaseType;
        return $this;
    }

    /**
     * @return UOMConvUnitModel
     */
    public function getConvUnit()
    {
        return $this->ConvUnit;
    }

    /**
     * @param UOMConvUnitModel $ConvUnit
     *
     * @return UOMModel
     */
    public function setConvUnit(
        $ConvUnit
    )
    {
        $this->ConvUnit = $ConvUnit;
        return $this;
    }

    /**
     * User recognizable name of the Unit of Measure.
     * 
     * Required for the create operation.
     * Max Length: 31
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * User recognizable name of the Unit of Measure.
     * 
     * Required for the create operation.
     * Max Length: 31
     *
     * @param string $Name
     *
     * @return UOMModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

}