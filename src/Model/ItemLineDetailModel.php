<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Information about the goods sold: what is sold, how much/many and for
 * what price.
 *
 * Class ItemLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class ItemLineDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var ReferenceTypeModel
     */
    private $InventorySiteRef;

    /**
     * @var ReferenceTypeModel
     */
    private $ItemAccountRef;

    /**
     * @var ReferenceTypeModel
     */
    private $ItemRef;

    /**
     * @var MarkupInfoModel
     */
    private $MarkupInfo;

    /**
     * @var float
     */
    private $Qty;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxCodeRef;

    /**
     * @var UOMRefModel
     */
    private $UOMRef;


    /**
     * Product: ALL
     * Reference to the Class for the line item.
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: ALL
     * Reference to the Class for the line item.
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return ItemLineDetailModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the InventorySite where this item is located.
     *
     * @return ReferenceTypeModel
     */
    public function getInventorySiteRef()
    {
        return $this->InventorySiteRef;
    }

    /**
     * Product: ALL
     * Reference to the InventorySite where this item is located.
     *
     * @param ReferenceTypeModel $InventorySiteRef
     *
     * @return ItemLineDetailModel
     */
    public function setInventorySiteRef(
        $InventorySiteRef
    )
    {
        $this->InventorySiteRef = $InventorySiteRef;
        return $this;
    }

    /**
     * Product: ALL
     * An account different than the account associated with the Item in the
     * current transaction line.  Cannot be updated or modified.
     *
     * @return ReferenceTypeModel
     */
    public function getItemAccountRef()
    {
        return $this->ItemAccountRef;
    }

    /**
     * Product: ALL
     * An account different than the account associated with the Item in the
     * current transaction line.  Cannot be updated or modified.
     *
     * @param ReferenceTypeModel $ItemAccountRef
     *
     * @return ItemLineDetailModel
     */
    public function setItemAccountRef(
        $ItemAccountRef
    )
    {
        $this->ItemAccountRef = $ItemAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Item. When a line lacks an ItemRef it will be treated
     * as "documentation" and the Amount will be ignored.
     *
     * @return ReferenceTypeModel
     */
    public function getItemRef()
    {
        return $this->ItemRef;
    }

    /**
     * Product: ALL
     * Reference to the Item. When a line lacks an ItemRef it will be treated
     * as "documentation" and the Amount will be ignored.
     *
     * @param ReferenceTypeModel $ItemRef
     *
     * @return ItemLineDetailModel
     */
    public function setItemRef(
        $ItemRef
    )
    {
        $this->ItemRef = $ItemRef;
        return $this;
    }

    /**
     * Product: ALL
     * Markup information for the Item wherever applicable.
     *
     * @return MarkupInfoModel
     */
    public function getMarkupInfo()
    {
        return $this->MarkupInfo;
    }

    /**
     * Product: ALL
     * Markup information for the Item wherever applicable.
     *
     * @param MarkupInfoModel $MarkupInfo
     *
     * @return ItemLineDetailModel
     */
    public function setMarkupInfo(
        $MarkupInfo
    )
    {
        $this->MarkupInfo = $MarkupInfo;
        return $this;
    }

    /**
     * Product: ALL
     * Number of items for the line.
     *
     * @return float
     */
    public function getQty()
    {
        return $this->Qty;
    }

    /**
     * Product: ALL
     * Number of items for the line.
     *
     * @param float $Qty
     *
     * @return ItemLineDetailModel
     */
    public function setQty(
        $Qty
    )
    {
        $this->Qty = $Qty;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the SalesTaxCode for this item.
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Product: ALL
     * Reference to the SalesTaxCode for this item.
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return ItemLineDetailModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the UOMSetREf (unit of mesasure set) that applies to this
     * item.
     *
     * @return UOMRefModel
     */
    public function getUOMRef()
    {
        return $this->UOMRef;
    }

    /**
     * Product: ALL
     * Reference to the UOMSetREf (unit of mesasure set) that applies to this
     * item.
     *
     * @param UOMRefModel $UOMRef
     *
     * @return ItemLineDetailModel
     */
    public function setUOMRef(
        $UOMRef
    )
    {
        $this->UOMRef = $UOMRef;
        return $this;
    }

}