<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * EffectiveTaxRate detail
 *
 * Class EffectiveTaxRateModel
 * @package Augwa\QuickBooks\Model
 */
class EffectiveTaxRateModel
    extends Model
{

    /**
     * @var \DateTime
     */
    private $EffectiveDate;

    /**
     * @var IntuitAnyTypeModel
     */
    private $EffectiveTaxRateEx;

    /**
     * @var \DateTime
     */
    private $EndDate;

    /**
     * @var float
     */
    private $RateValue;


    /**
     * Product: QBO
     * Effective starting date for which this taxrate is applicable
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }

    /**
     * Product: QBO
     * Effective starting date for which this taxrate is applicable
     *
     * @param \DateTime $EffectiveDate
     *
     * @return EffectiveTaxRateModel
     */
    public function setEffectiveDate(
        $EffectiveDate
    )
    {
        $this->EffectiveDate = $EffectiveDate;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxLine.
     *
     * @return IntuitAnyTypeModel
     */
    public function getEffectiveTaxRateEx()
    {
        return $this->EffectiveTaxRateEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxLine.
     *
     * @param IntuitAnyTypeModel $EffectiveTaxRateEx
     *
     * @return EffectiveTaxRateModel
     */
    public function setEffectiveTaxRateEx(
        $EffectiveTaxRateEx
    )
    {
        $this->EffectiveTaxRateEx = $EffectiveTaxRateEx;
        return $this;
    }

    /**
     * Product: QBO
     * End date of this taxrate applicability
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Product: QBO
     * End date of this taxrate applicability
     *
     * @param \DateTime $EndDate
     *
     * @return EffectiveTaxRateModel
     */
    public function setEndDate(
        $EndDate
    )
    {
        $this->EndDate = $EndDate;
        return $this;
    }

    /**
     * Product: ALL
     * Represents rate value.
     *
     * @return float
     */
    public function getRateValue()
    {
        return $this->RateValue;
    }

    /**
     * Product: ALL
     * Represents rate value.
     *
     * @param float $RateValue
     *
     * @return EffectiveTaxRateModel
     */
    public function setRateValue(
        $RateValue
    )
    {
        $this->RateValue = $RateValue;
        return $this;
    }

}