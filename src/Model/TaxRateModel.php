<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * A sales tax rate specifies the tax rate for the specific TaxCode.See
 * Global Tax Model.
 *
 * Class TaxRateModel
 * @package Augwa\QuickBooks\Model
 */
class TaxRateModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var ReferenceTypeModel
     */
    private $AgencyRef;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     * @see TaxRateDisplayTypeEnum
     */
    private $DisplayType;

    /**
     * @var EffectiveTaxRateModel
     */
    private $EffectiveTaxRate;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var float
     */
    private $RateValue;

    /**
     * @var string
     * @see SpecialTaxTypeEnum
     */
    private $SpecialTaxType;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TaxRateEx;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxReturnLineRef;


    /**
     * Product: QBW
     * False or null if inactive. Inactive sales rate codes may be hidden
     * from display and may not be used on financial transactions.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBW
     * False or null if inactive. Inactive sales rate codes may be hidden
     * from display and may not be used on financial transactions.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return TaxRateModel
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
     * Represents Agency Reference, Vendor Reference in case of QBW, Agency
     * in case of QBO.
     *
     * @return ReferenceTypeModel
     */
    public function getAgencyRef()
    {
        return $this->AgencyRef;
    }

    /**
     * Product: ALL
     * Represents Agency Reference, Vendor Reference in case of QBW, Agency
     * in case of QBO.
     *
     * @param ReferenceTypeModel $AgencyRef
     *
     * @return TaxRateModel
     */
    public function setAgencyRef(
        $AgencyRef
    )
    {
        $this->AgencyRef = $AgencyRef;
        return $this;
    }

    /**
     * Product: QBW
     * User entered description for the tax rate.Max Length: 4000 characters.
     * ValidRange: QBW: Max=4000
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Product: QBW
     * User entered description for the tax rate.Max Length: 4000 characters.
     * ValidRange: QBW: Max=4000
     *
     * @param string $Description
     *
     * @return TaxRateModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Product: QBO
     * DisplayType of a tax rate, configuration of editability and  display
     * on forms
     *
     * @return string
     *
     * @see TaxRateDisplayTypeEnum
     */
    public function getDisplayType()
    {
        return $this->DisplayType;
    }

    /**
     * Product: QBO
     * DisplayType of a tax rate, configuration of editability and  display
     * on forms
     *
     * @param string $DisplayType
     *
     * @return TaxRateModel
     *
     * @see TaxRateDisplayTypeEnum
     */
    public function setDisplayType(
        $DisplayType
    )
    {
        $this->DisplayType = $DisplayType;
        return $this;
    }

    /**
     * Product: QBO
     * Effective list rates for different date ranges
     *
     * @return EffectiveTaxRateModel
     */
    public function getEffectiveTaxRate()
    {
        return $this->EffectiveTaxRate;
    }

    /**
     * Product: QBO
     * Effective list rates for different date ranges
     *
     * @param EffectiveTaxRateModel $EffectiveTaxRate
     *
     * @return TaxRateModel
     */
    public function setEffectiveTaxRate(
        $EffectiveTaxRate
    )
    {
        $this->EffectiveTaxRate = $EffectiveTaxRate;
        return $this;
    }

    /**
     * Product: QBW
     * User recognizable name for the tax rate.Max. Length: 31
     * characters.Required for the Create request.
     * Required: QBW
     * ValidRange: QBW: Max=31
     * Filterable: QBW
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBW
     * User recognizable name for the tax rate.Max. Length: 31
     * characters.Required for the Create request.
     * Required: QBW
     * ValidRange: QBW: Max=31
     * Filterable: QBW
     *
     * @param string $Name
     *
     * @return TaxRateModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Product: ALL
     * Represents rate value.
     * Filterable: QBW
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
     * Filterable: QBW
     *
     * @param float $RateValue
     *
     * @return TaxRateModel
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
     * Used for Zero rates for EC VAT.
     * How it is used: VAT registered Businesses who receive goods/services
     * (acquisitions) from other EU countries,
     * Will need to calculate the VAT due, but not paid, on these
     * acquisitions. The rate of VAT payable is the same that would
     * Have been paid if the goods had been supplied by a UK supplier.
     *
     * @return string
     *
     * @see SpecialTaxTypeEnum
     */
    public function getSpecialTaxType()
    {
        return $this->SpecialTaxType;
    }

    /**
     * Product: QBO
     * Used for Zero rates for EC VAT.
     * How it is used: VAT registered Businesses who receive goods/services
     * (acquisitions) from other EU countries,
     * Will need to calculate the VAT due, but not paid, on these
     * acquisitions. The rate of VAT payable is the same that would
     * Have been paid if the goods had been supplied by a UK supplier.
     *
     * @param string $SpecialTaxType
     *
     * @return TaxRateModel
     *
     * @see SpecialTaxTypeEnum
     */
    public function setSpecialTaxType(
        $SpecialTaxType
    )
    {
        $this->SpecialTaxType = $SpecialTaxType;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxRate
     *
     * @return IntuitAnyTypeModel
     */
    public function getTaxRateEx()
    {
        return $this->TaxRateEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxRate
     *
     * @param IntuitAnyTypeModel $TaxRateEx
     *
     * @return TaxRateModel
     */
    public function setTaxRateEx(
        $TaxRateEx
    )
    {
        $this->TaxRateEx = $TaxRateEx;
        return $this;
    }

    /**
     * Product: ALL
     * TaxReturnLine is representative of SalesTaxReturnLine reference
     *
     * @return ReferenceTypeModel
     */
    public function getTaxReturnLineRef()
    {
        return $this->TaxReturnLineRef;
    }

    /**
     * Product: ALL
     * TaxReturnLine is representative of SalesTaxReturnLine reference
     *
     * @param ReferenceTypeModel $TaxReturnLineRef
     *
     * @return TaxRateModel
     */
    public function setTaxReturnLineRef(
        $TaxReturnLineRef
    )
    {
        $this->TaxReturnLineRef = $TaxReturnLineRef;
        return $this;
    }

}