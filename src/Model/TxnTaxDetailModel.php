<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Details of taxes charged on the transaction as a whole. For US
 * versions of QuickBooks, tax rates used in the detail section must not
 * be used in any tax line appearing in the main transaction body. For
 * international versions of QuickBooks, the TxnTaxDetail should provide
 * the details of all taxes (sales or purchase) calculated for the
 * transaction based on the tax codes referenced by the transaction. This
 * can be calculated by QuickBooks business logic or you may supply it
 * when adding a transaction. For US versions of QuickBooks you need only
 * supply the tax code for the customer and the tax code (in the case of
 * multiple rates) or tax rate (for a single rate) to apply for the
 * transaction as a whole.See Global Tax Model.
 *
 * Class TxnTaxDetailModel
 * @package Augwa\QuickBooks\Model
 */
class TxnTaxDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultTaxCodeRef;

    /**
     * @var LineModel
     */
    private $TaxLine;

    /**
     * @var float
     */
    private $TotalTax;

    /**
     * @var ReferenceTypeModel
     */
    private $TxnTaxCodeRef;


    /**
     * Product: QBW
     * Reference to the default tax code that applies to the transaction as a
     * whole.
     * In Quickbooks desktop, this maps to CustomerTaxCode in Invoice and
     * VendorTaxCode in Bill.
     * I18n: US
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultTaxCodeRef()
    {
        return $this->DefaultTaxCodeRef;
    }

    /**
     * Product: QBW
     * Reference to the default tax code that applies to the transaction as a
     * whole.
     * In Quickbooks desktop, this maps to CustomerTaxCode in Invoice and
     * VendorTaxCode in Bill.
     * I18n: US
     *
     * @param ReferenceTypeModel $DefaultTaxCodeRef
     *
     * @return TxnTaxDetailModel
     */
    public function setDefaultTaxCodeRef(
        $DefaultTaxCodeRef
    )
    {
        $this->DefaultTaxCodeRef = $DefaultTaxCodeRef;
        return $this;
    }

    /**
     * Product: ALL
     * This must be a Line whose LineDetailType is TaxLineDetail.
     *
     * @return LineModel
     */
    public function getTaxLine()
    {
        return $this->TaxLine;
    }

    /**
     * Product: ALL
     * This must be a Line whose LineDetailType is TaxLineDetail.
     *
     * @param LineModel $TaxLine
     *
     * @return TxnTaxDetailModel
     */
    public function setTaxLine(
        $TaxLine
    )
    {
        $this->TaxLine = $TaxLine;
        return $this;
    }

    /**
     * Product: ALL
     * Total tax calculated for the transaction, excluding any embedded tax
     * lines.
     *
     * @return float
     */
    public function getTotalTax()
    {
        return $this->TotalTax;
    }

    /**
     * Product: ALL
     * Total tax calculated for the transaction, excluding any embedded tax
     * lines.
     *
     * @param float $TotalTax
     *
     * @return TxnTaxDetailModel
     */
    public function setTotalTax(
        $TotalTax
    )
    {
        $this->TotalTax = $TotalTax;
        return $this;
    }

    /**
     * Product: All
     * Reference to the transaction tax code. For US editions only.
     * Note that the US tax model can have just a single tax code for the
     * entire transaction.
     *
     * @return ReferenceTypeModel
     */
    public function getTxnTaxCodeRef()
    {
        return $this->TxnTaxCodeRef;
    }

    /**
     * Product: All
     * Reference to the transaction tax code. For US editions only.
     * Note that the US tax model can have just a single tax code for the
     * entire transaction.
     *
     * @param ReferenceTypeModel $TxnTaxCodeRef
     *
     * @return TxnTaxDetailModel
     */
    public function setTxnTaxCodeRef(
        $TxnTaxCodeRef
    )
    {
        $this->TxnTaxCodeRef = $TxnTaxCodeRef;
        return $this;
    }

}