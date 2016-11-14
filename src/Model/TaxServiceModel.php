<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes SalesTax details
 *
 * Class TaxServiceModel
 * @package Augwa\QuickBooks\Model
 */
class TaxServiceModel
    extends IntuitEntityModel
{

    /**
     * @var FaultModel
     */
    private $Fault;

    /**
     * @var string
     */
    private $TaxCode;

    /**
     * @var string
     */
    private $TaxCodeId;

    /**
     * @var TaxRateDetailsModel
     */
    private $TaxRateDetails;


    /**
     * Fault or Object should be returned
     *
     * @return FaultModel
     */
    public function getFault()
    {
        return $this->Fault;
    }

    /**
     * Fault or Object should be returned
     *
     * @param FaultModel $Fault
     *
     * @return TaxServiceModel
     */
    public function setFault(
        $Fault
    )
    {
        $this->Fault = $Fault;
        return $this;
    }

    /**
     * Product: QBO
     * Describes the taxcode
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }

    /**
     * Product: QBO
     * Describes the taxcode
     *
     * @param string $TaxCode
     *
     * @return TaxServiceModel
     */
    public function setTaxCode(
        $TaxCode
    )
    {
        $this->TaxCode = $TaxCode;
        return $this;
    }

    /**
     * Product: QBO
     * Describes the taxcode Id, this is output only
     *
     * @return string
     */
    public function getTaxCodeId()
    {
        return $this->TaxCodeId;
    }

    /**
     * Product: QBO
     * Describes the taxcode Id, this is output only
     *
     * @param string $TaxCodeId
     *
     * @return TaxServiceModel
     */
    public function setTaxCodeId(
        $TaxCodeId
    )
    {
        $this->TaxCodeId = $TaxCodeId;
        return $this;
    }

    /**
     * Product: QBO
     * TaxRate details
     *
     * @return TaxRateDetailsModel
     */
    public function getTaxRateDetails()
    {
        return $this->TaxRateDetails;
    }

    /**
     * Product: QBO
     * TaxRate details
     *
     * @param TaxRateDetailsModel $TaxRateDetails
     *
     * @return TaxServiceModel
     */
    public function setTaxRateDetails(
        $TaxRateDetails
    )
    {
        $this->TaxRateDetails = $TaxRateDetails;
        return $this;
    }

}