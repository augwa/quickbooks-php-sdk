<?php

namespace Augwa\QuickBooks\Model;

/**
 * Related UOM
 *
 * Class UOMConvUnitModel
 * @package Augwa\QuickBooks\Model
 */
class UOMConvUnitModel
    extends Model
{

    /**
     * @var string
     */
    private $Abbrv;

    /**
     * @var float
     */
    private $ConvRatio;

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
     * @return UOMConvUnitModel
     */
    public function setAbbrv(
        $Abbrv
    )
    {
        $this->Abbrv = $Abbrv;
        return $this;
    }

    /**
     * @return float
     */
    public function getConvRatio()
    {
        return $this->ConvRatio;
    }

    /**
     * @param float $ConvRatio
     *
     * @return UOMConvUnitModel
     */
    public function setConvRatio(
        $ConvRatio
    )
    {
        $this->ConvRatio = $ConvRatio;
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
     * @return UOMConvUnitModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

}