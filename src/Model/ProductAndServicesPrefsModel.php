<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines Product and Services Prefs details
 *
 * Class ProductAndServicesPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class ProductAndServicesPrefsModel
    extends Model
{

    /**
     * @var bool
     */
    private $ForPurchase;

    /**
     * @var bool
     */
    private $ForSales;

    /**
     * @var bool
     */
    private $InventoryAndPurchaseOrder;

    /**
     * @var bool
     */
    private $QuantityOnHand;

    /**
     * @var bool
     */
    private $QuantityWithPriceAndRate;

    /**
     * @var string
     * @see UOMFeatureTypeEnum
     */
    private $UOM;


    /**
     * Product:QBO
     * ProductAndServices for purchases enabled
     *
     * @return bool
     */
    public function getForPurchase()
    {
        return $this->ForPurchase;
    }

    /**
     * Product:QBO
     * ProductAndServices for purchases enabled
     *
     * @param bool $ForPurchase
     *
     * @return ProductAndServicesPrefsModel
     */
    public function setForPurchase(
        $ForPurchase
    )
    {
        $this->ForPurchase = $ForPurchase;
        return $this;
    }

    /**
     * Product:QBO
     * ProductAndServices for Sales enabled
     *
     * @return bool
     */
    public function getForSales()
    {
        return $this->ForSales;
    }

    /**
     * Product:QBO
     * ProductAndServices for Sales enabled
     *
     * @param bool $ForSales
     *
     * @return ProductAndServicesPrefsModel
     */
    public function setForSales(
        $ForSales
    )
    {
        $this->ForSales = $ForSales;
        return $this;
    }

    /**
     * Product:QBW
     * Inventory and PO are active
     *
     * @return bool
     */
    public function getInventoryAndPurchaseOrder()
    {
        return $this->InventoryAndPurchaseOrder;
    }

    /**
     * Product:QBW
     * Inventory and PO are active
     *
     * @param bool $InventoryAndPurchaseOrder
     *
     * @return ProductAndServicesPrefsModel
     */
    public function setInventoryAndPurchaseOrder(
        $InventoryAndPurchaseOrder
    )
    {
        $this->InventoryAndPurchaseOrder = $InventoryAndPurchaseOrder;
        return $this;
    }

    /**
     * Product:QBO
     * Enable QuantityOnHand enabled
     *
     * @return bool
     */
    public function getQuantityOnHand()
    {
        return $this->QuantityOnHand;
    }

    /**
     * Product:QBO
     * Enable QuantityOnHand enabled
     *
     * @param bool $QuantityOnHand
     *
     * @return ProductAndServicesPrefsModel
     */
    public function setQuantityOnHand(
        $QuantityOnHand
    )
    {
        $this->QuantityOnHand = $QuantityOnHand;
        return $this;
    }

    /**
     * Product:QBO
     * Enable quantity with price and rate enabled
     *
     * @return bool
     */
    public function getQuantityWithPriceAndRate()
    {
        return $this->QuantityWithPriceAndRate;
    }

    /**
     * Product:QBO
     * Enable quantity with price and rate enabled
     *
     * @param bool $QuantityWithPriceAndRate
     *
     * @return ProductAndServicesPrefsModel
     */
    public function setQuantityWithPriceAndRate(
        $QuantityWithPriceAndRate
    )
    {
        $this->QuantityWithPriceAndRate = $QuantityWithPriceAndRate;
        return $this;
    }

    /**
     * Product:QBW. Possible values are Disabled,SinglePerItem and
     * MultiplePerItem
     *
     * @return string
     *
     * @see UOMFeatureTypeEnum
     */
    public function getUOM()
    {
        return $this->UOM;
    }

    /**
     * Product:QBW. Possible values are Disabled,SinglePerItem and
     * MultiplePerItem
     *
     * @param string $UOM
     *
     * @return ProductAndServicesPrefsModel
     *
     * @see UOMFeatureTypeEnum
     */
    public function setUOM(
        $UOM
    )
    {
        $this->UOM = $UOM;
        return $this;
    }

}