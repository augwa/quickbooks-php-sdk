<?php

namespace Augwa\QuickBooks\Model;

/**
 * When a unit of measure is referenced, it must include the name of the
 * specific unit used as well as the unit of measure set in which that
 * unit is defined. This entity captures that concept.
 *
 * Class UOMRefModel
 * @package Augwa\QuickBooks\Model
 */
class UOMRefModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $UOMSetRef;

    /**
     * @var string
     */
    private $Unit;


    /**
     * A reference to the UOM entity that defines the set of related units
     * from which the specified Unit is used.
     *
     * @return ReferenceTypeModel
     */
    public function getUOMSetRef()
    {
        return $this->UOMSetRef;
    }

    /**
     * A reference to the UOM entity that defines the set of related units
     * from which the specified Unit is used.
     *
     * @param ReferenceTypeModel $UOMSetRef
     *
     * @return UOMRefModel
     */
    public function setUOMSetRef(
        $UOMSetRef
    )
    {
        $this->UOMSetRef = $UOMSetRef;
        return $this;
    }

    /**
     * The name of the unit selected.  Examples: inch, foot, yard.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * The name of the unit selected.  Examples: inch, foot, yard.
     *
     * @param string $Unit
     *
     * @return UOMRefModel
     */
    public function setUnit(
        $Unit
    )
    {
        $this->Unit = $Unit;
        return $this;
    }

}