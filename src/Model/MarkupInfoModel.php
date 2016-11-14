<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Markup information.
 *
 * Class MarkupInfoModel
 * @package Augwa\QuickBooks\Model
 */
class MarkupInfoModel
    extends Model
{

    /**
     * @var float
     */
    private $Percent;

    /**
     * @var bool
     */
    private $PercentBased;

    /**
     * @var ReferenceTypeModel
     */
    private $PriceLevelRef;

    /**
     * @var float
     */
    private $Value;


    /**
     * Product: ALL
     * Markup amount expressed as a percent of charges already entered in the
     * current transaction. To enter a rate of 10% use 10.0, not 0.01.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->Percent;
    }

    /**
     * Product: ALL
     * Markup amount expressed as a percent of charges already entered in the
     * current transaction. To enter a rate of 10% use 10.0, not 0.01.
     *
     * @param float $Percent
     *
     * @return MarkupInfoModel
     */
    public function setPercent(
        $Percent
    )
    {
        $this->Percent = $Percent;
        return $this;
    }

    /**
     * Product: ALL
     * True if the markup is expressed as a percentage.
     *
     * @return bool
     */
    public function getPercentBased()
    {
        return $this->PercentBased;
    }

    /**
     * Product: ALL
     * True if the markup is expressed as a percentage.
     *
     * @param bool $PercentBased
     *
     * @return MarkupInfoModel
     */
    public function setPercentBased(
        $PercentBased
    )
    {
        $this->PercentBased = $PercentBased;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to a PriceLevel for the markup.
     *
     * @return ReferenceTypeModel
     */
    public function getPriceLevelRef()
    {
        return $this->PriceLevelRef;
    }

    /**
     * Product: ALL
     * Reference to a PriceLevel for the markup.
     *
     * @param ReferenceTypeModel $PriceLevelRef
     *
     * @return MarkupInfoModel
     */
    public function setPriceLevelRef(
        $PriceLevelRef
    )
    {
        $this->PriceLevelRef = $PriceLevelRef;
        return $this;
    }

    /**
     * Product: ALL
     * Markup value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Product: ALL
     * Markup value.
     *
     * @param float $Value
     *
     * @return MarkupInfoModel
     */
    public function setValue(
        $Value
    )
    {
        $this->Value = $Value;
        return $this;
    }

}