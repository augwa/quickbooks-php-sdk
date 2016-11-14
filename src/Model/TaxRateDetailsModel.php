<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * TaxRate details
 *
 * Class TaxRateDetailsModel
 * @package Augwa\QuickBooks\Model
 */
class TaxRateDetailsModel
    extends Model
{

    /**
     * @var float
     */
    private $RateValue;

    /**
     * @var string
     */
    private $TaxAgencyId;

    /**
     * @var string
     * @see TaxRateApplicableOnEnum
     */
    private $TaxApplicableOn;

    /**
     * @var string
     */
    private $TaxRateId;

    /**
     * @var string
     */
    private $TaxRateName;


    /**
     * Product: QBO
     * TaxRate value
     *
     * @return float
     */
    public function getRateValue()
    {
        return $this->RateValue;
    }

    /**
     * Product: QBO
     * TaxRate value
     *
     * @param float $RateValue
     *
     * @return TaxRateDetailsModel
     */
    public function setRateValue(
        $RateValue
    )
    {
        $this->RateValue = $RateValue;
        return $this;
    }

    /**
     * Product: QBO
     * TaxAgency details
     *
     * @return string
     */
    public function getTaxAgencyId()
    {
        return $this->TaxAgencyId;
    }

    /**
     * Product: QBO
     * TaxAgency details
     *
     * @param string $TaxAgencyId
     *
     * @return TaxRateDetailsModel
     */
    public function setTaxAgencyId(
        $TaxAgencyId
    )
    {
        $this->TaxAgencyId = $TaxAgencyId;
        return $this;
    }

    /**
     * Product: QBO
     * Default is SalesTax
     *
     * @return string
     *
     * @see TaxRateApplicableOnEnum
     */
    public function getTaxApplicableOn()
    {
        return $this->TaxApplicableOn;
    }

    /**
     * Product: QBO
     * Default is SalesTax
     *
     * @param string $TaxApplicableOn
     *
     * @return TaxRateDetailsModel
     *
     * @see TaxRateApplicableOnEnum
     */
    public function setTaxApplicableOn(
        $TaxApplicableOn
    )
    {
        $this->TaxApplicableOn = $TaxApplicableOn;
        return $this;
    }

    /**
     * Product: QBO
     * TaxRate details
     *
     * @return string
     */
    public function getTaxRateId()
    {
        return $this->TaxRateId;
    }

    /**
     * Product: QBO
     * TaxRate details
     *
     * @param string $TaxRateId
     *
     * @return TaxRateDetailsModel
     */
    public function setTaxRateId(
        $TaxRateId
    )
    {
        $this->TaxRateId = $TaxRateId;
        return $this;
    }

    /**
     * Product: QBO
     * TaxRate details
     *
     * @return string
     */
    public function getTaxRateName()
    {
        return $this->TaxRateName;
    }

    /**
     * Product: QBO
     * TaxRate details
     *
     * @param string $TaxRateName
     *
     * @return TaxRateDetailsModel
     */
    public function setTaxRateName(
        $TaxRateName
    )
    {
        $this->TaxRateName = $TaxRateName;
        return $this;
    }

}