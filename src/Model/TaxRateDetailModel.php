<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class TaxRateDetailModel
 * @package Augwa\QuickBooks\Model
 */
class TaxRateDetailModel
    extends Model
{

    /**
     * @var int
     */
    private $TaxOnTaxOrder;

    /**
     * @var int
     */
    private $TaxOrder;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxRateRef;

    /**
     * @var string
     * @see TaxTypeApplicablityEnum
     */
    private $TaxTypeApplicable;


    /**
     * Product: QBO
     * Applicable TaxOnTaxOrder
     *
     * @return int
     */
    public function getTaxOnTaxOrder()
    {
        return $this->TaxOnTaxOrder;
    }

    /**
     * Product: QBO
     * Applicable TaxOnTaxOrder
     *
     * @param int $TaxOnTaxOrder
     *
     * @return TaxRateDetailModel
     */
    public function setTaxOnTaxOrder(
        $TaxOnTaxOrder
    )
    {
        $this->TaxOnTaxOrder = $TaxOnTaxOrder;
        return $this;
    }

    /**
     * Product: QBO
     * Applicable Tax Order
     *
     * @return int
     */
    public function getTaxOrder()
    {
        return $this->TaxOrder;
    }

    /**
     * Product: QBO
     * Applicable Tax Order
     *
     * @param int $TaxOrder
     *
     * @return TaxRateDetailModel
     */
    public function setTaxOrder(
        $TaxOrder
    )
    {
        $this->TaxOrder = $TaxOrder;
        return $this;
    }

    /**
     * Product: ALL
     * TaxRateRef
     *
     * @return ReferenceTypeModel
     */
    public function getTaxRateRef()
    {
        return $this->TaxRateRef;
    }

    /**
     * Product: ALL
     * TaxRateRef
     *
     * @param ReferenceTypeModel $TaxRateRef
     *
     * @return TaxRateDetailModel
     */
    public function setTaxRateRef(
        $TaxRateRef
    )
    {
        $this->TaxRateRef = $TaxRateRef;
        return $this;
    }

    /**
     * Product: ALL
     * Applicable TaxType enum
     *
     * @return string
     *
     * @see TaxTypeApplicablityEnum
     */
    public function getTaxTypeApplicable()
    {
        return $this->TaxTypeApplicable;
    }

    /**
     * Product: ALL
     * Applicable TaxType enum
     *
     * @param string $TaxTypeApplicable
     *
     * @return TaxRateDetailModel
     *
     * @see TaxTypeApplicablityEnum
     */
    public function setTaxTypeApplicable(
        $TaxTypeApplicable
    )
    {
        $this->TaxTypeApplicable = $TaxTypeApplicable;
        return $this;
    }

}