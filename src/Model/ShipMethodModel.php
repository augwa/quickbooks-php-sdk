<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Describes a method of shipping for the company
 *
 * Class ShipMethodModel
 * @package Augwa\QuickBooks\Model
 */
class ShipMethodModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var IntuitAnyTypeModel
     */
    private $ShipMethodEx;


    /**
     * Product: QBW
     * Indication of whether or not this shipping method is still used by the
     * company.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBW
     * Indication of whether or not this shipping method is still used by the
     * company.
     *
     * @param bool $Active
     *
     * @return ShipMethodModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: ALL
     * The name of the shipping method (i.e. FedEx 2-day)
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: ALL
     * The name of the shipping method (i.e. FedEx 2-day)
     *
     * @param string $Name
     *
     * @return ShipMethodModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Internal use only: extension place holder for ShipMethod
     *
     * @return IntuitAnyTypeModel
     */
    public function getShipMethodEx()
    {
        return $this->ShipMethodEx;
    }

    /**
     * Internal use only: extension place holder for ShipMethod
     *
     * @param IntuitAnyTypeModel $ShipMethodEx
     *
     * @return ShipMethodModel
     */
    public function setShipMethodEx(
        $ShipMethodEx
    )
    {
        $this->ShipMethodEx = $ShipMethodEx;
        return $this;
    }

}