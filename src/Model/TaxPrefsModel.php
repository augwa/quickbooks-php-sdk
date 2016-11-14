<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class TaxPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class TaxPrefsModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $NonTaxableSalesTaxCodeRef;

    /**
     * @var bool
     */
    private $PartnerTaxEnabled;

    /**
     * @var string
     * @see PaySalesTaxEnum
     */
    private $PaySalesTax;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxableSalesTaxCodeRef;

    /**
     * @var bool
     */
    private $UsingSalesTax;


    /**
     * Product: QBW
     * QuickBooks Notes
     * Max Length: 3
     *
     * @return ReferenceTypeModel
     */
    public function getNonTaxableSalesTaxCodeRef()
    {
        return $this->NonTaxableSalesTaxCodeRef;
    }

    /**
     * Product: QBW
     * QuickBooks Notes
     * Max Length: 3
     *
     * @param ReferenceTypeModel $NonTaxableSalesTaxCodeRef
     *
     * @return TaxPrefsModel
     */
    public function setNonTaxableSalesTaxCodeRef(
        $NonTaxableSalesTaxCodeRef
    )
    {
        $this->NonTaxableSalesTaxCodeRef = $NonTaxableSalesTaxCodeRef;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPartnerTaxEnabled()
    {
        return $this->PartnerTaxEnabled;
    }

    /**
     * @param bool $PartnerTaxEnabled
     *
     * @return TaxPrefsModel
     */
    public function setPartnerTaxEnabled(
        $PartnerTaxEnabled
    )
    {
        $this->PartnerTaxEnabled = $PartnerTaxEnabled;
        return $this;
    }

    /**
     * Product: QBW
     * 
     *
     * @return string
     *
     * @see PaySalesTaxEnum
     */
    public function getPaySalesTax()
    {
        return $this->PaySalesTax;
    }

    /**
     * Product: QBW
     * 
     *
     * @param string $PaySalesTax
     *
     * @return TaxPrefsModel
     *
     * @see PaySalesTaxEnum
     */
    public function setPaySalesTax(
        $PaySalesTax
    )
    {
        $this->PaySalesTax = $PaySalesTax;
        return $this;
    }

    /**
     * Product: QBW
     * QuickBooks Notes
     * Max Length: 3
     *
     * @return ReferenceTypeModel
     */
    public function getTaxableSalesTaxCodeRef()
    {
        return $this->TaxableSalesTaxCodeRef;
    }

    /**
     * Product: QBW
     * QuickBooks Notes
     * Max Length: 3
     *
     * @param ReferenceTypeModel $TaxableSalesTaxCodeRef
     *
     * @return TaxPrefsModel
     */
    public function setTaxableSalesTaxCodeRef(
        $TaxableSalesTaxCodeRef
    )
    {
        $this->TaxableSalesTaxCodeRef = $TaxableSalesTaxCodeRef;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsingSalesTax()
    {
        return $this->UsingSalesTax;
    }

    /**
     * @param bool $UsingSalesTax
     *
     * @return TaxPrefsModel
     */
    public function setUsingSalesTax(
        $UsingSalesTax
    )
    {
        $this->UsingSalesTax = $UsingSalesTax;
        return $this;
    }

}