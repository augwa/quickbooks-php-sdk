<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * A tax code is used to track the taxable or non-taxable status of
 * products, services, and customers. You can assign a sales tax code to
 * each of your products, services, and customers based on their taxable
 * or non-taxable status. You can then use these codes to generate
 * reports that provide information to the tax agencies about the taxable
 * or non-taxable status of certain sales. See Global Tax Model.
 *
 * Class TaxCodeModel
 * @package Augwa\QuickBooks\Model
 */
class TaxCodeModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var TaxRateListModel
     */
    private $AdjustmentTaxRateList;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var TaxRateListModel
     */
    private $PurchaseTaxRateList;

    /**
     * @var TaxRateListModel
     */
    private $SalesTaxRateList;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TaxCodeEx;

    /**
     * @var bool
     */
    private $TaxGroup;

    /**
     * @var bool
     */
    private $Taxable;


    /**
     * Product: QBW
     * False if inactive. Inactive sales tax codes may be hidden from display
     * and may not be used on financial transactions.
     * Filterable: ALL
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBW
     * False if inactive. Inactive sales tax codes may be hidden from display
     * and may not be used on financial transactions.
     * Filterable: ALL
     *
     * @param bool $Active
     *
     * @return TaxCodeModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: QBO
     * List of references to adjustment tax rates that apply to the
     * transaction.
     *
     * @return TaxRateListModel
     */
    public function getAdjustmentTaxRateList()
    {
        return $this->AdjustmentTaxRateList;
    }

    /**
     * Product: QBO
     * List of references to adjustment tax rates that apply to the
     * transaction.
     *
     * @param TaxRateListModel $AdjustmentTaxRateList
     *
     * @return TaxCodeModel
     */
    public function setAdjustmentTaxRateList(
        $AdjustmentTaxRateList
    )
    {
        $this->AdjustmentTaxRateList = $AdjustmentTaxRateList;
        return $this;
    }

    /**
     * Product: ALL
     * User entered description for the sales tax code.Max Length: 31
     * characters.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Product: ALL
     * User entered description for the sales tax code.Max Length: 31
     * characters.
     *
     * @param string $Description
     *
     * @return TaxCodeModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Product: QBW
     * User recognizable name for the tax sales code.Max. Length: 3
     * characters.Required for the Create request.
     * Product: QBO
     * User recognizable name for the tax sales code.Max. Length: 10
     * characters.
     * Required: ALL
     * Filterable: ALL
     * Sortable: ALL
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBW
     * User recognizable name for the tax sales code.Max. Length: 3
     * characters.Required for the Create request.
     * Product: QBO
     * User recognizable name for the tax sales code.Max. Length: 10
     * characters.
     * Required: ALL
     * Filterable: ALL
     * Sortable: ALL
     *
     * @param string $Name
     *
     * @return TaxCodeModel
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
     * List of references to tax rates that apply for purchase transactions
     * when this tax code is used.
     *
     * @return TaxRateListModel
     */
    public function getPurchaseTaxRateList()
    {
        return $this->PurchaseTaxRateList;
    }

    /**
     * Product: ALL
     * List of references to tax rates that apply for purchase transactions
     * when this tax code is used.
     *
     * @param TaxRateListModel $PurchaseTaxRateList
     *
     * @return TaxCodeModel
     */
    public function setPurchaseTaxRateList(
        $PurchaseTaxRateList
    )
    {
        $this->PurchaseTaxRateList = $PurchaseTaxRateList;
        return $this;
    }

    /**
     * Product: ALL
     * List of references to tax rates that apply for sales transactions when
     * this tax code is used.
     *
     * @return TaxRateListModel
     */
    public function getSalesTaxRateList()
    {
        return $this->SalesTaxRateList;
    }

    /**
     * Product: ALL
     * List of references to tax rates that apply for sales transactions when
     * this tax code is used.
     *
     * @param TaxRateListModel $SalesTaxRateList
     *
     * @return TaxCodeModel
     */
    public function setSalesTaxRateList(
        $SalesTaxRateList
    )
    {
        $this->SalesTaxRateList = $SalesTaxRateList;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxCode
     *
     * @return IntuitAnyTypeModel
     */
    public function getTaxCodeEx()
    {
        return $this->TaxCodeEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxCode
     *
     * @param IntuitAnyTypeModel $TaxCodeEx
     *
     * @return TaxCodeModel
     */
    public function setTaxCodeEx(
        $TaxCodeEx
    )
    {
        $this->TaxCodeEx = $TaxCodeEx;
        return $this;
    }

    /**
     * Product:QBW
     * True if this tax code represents a group of tax rates (a desktop
     * TaxGroupItem), false if it represents a QuickBooks US TaxCode.
     *
     * @return bool
     */
    public function getTaxGroup()
    {
        return $this->TaxGroup;
    }

    /**
     * Product:QBW
     * True if this tax code represents a group of tax rates (a desktop
     * TaxGroupItem), false if it represents a QuickBooks US TaxCode.
     *
     * @param bool $TaxGroup
     *
     * @return TaxCodeModel
     */
    public function setTaxGroup(
        $TaxGroup
    )
    {
        $this->TaxGroup = $TaxGroup;
        return $this;
    }

    /**
     * Product: QBW
     * False or null means meaning non-taxable (default).  True means
     * taxable.
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * Product: QBW
     * False or null means meaning non-taxable (default).  True means
     * taxable.
     *
     * @param bool $Taxable
     *
     * @return TaxCodeModel
     */
    public function setTaxable(
        $Taxable
    )
    {
        $this->Taxable = $Taxable;
        return $this;
    }

}