<?php

namespace Augwa\QuickBooks\Model;

/**
 * QBW: only. Defines advance inventory Prefs details
 *
 * Class AdvancedInventoryPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class AdvancedInventoryPrefsModel
    extends Model
{

    /**
     * @var bool
     */
    private $BarcodeEnabled;

    /**
     * @var bool
     */
    private $EnhancedInventoryReceivingEnabled;

    /**
     * @var \DateTime
     */
    private $FIFOEffectiveDate;

    /**
     * @var bool
     */
    private $FIFOEnabled;

    /**
     * @var bool
     */
    private $MLIAvailable;

    /**
     * @var bool
     */
    private $MLIEnabled;

    /**
     * @var bool
     */
    private $RowShelfBinEnabled;

    /**
     * @var bool
     */
    private $TrackingOnBuildAssemblyEnabled;

    /**
     * @var bool
     */
    private $TrackingOnInventoryAdjustmentEnabled;

    /**
     * @var bool
     */
    private $TrackingOnPurchaseTransactionsEnabled;

    /**
     * @var bool
     */
    private $TrackingOnSalesTransactionsEnabled;

    /**
     * @var bool
     */
    private $TrackingSerialOrLotNumber;


    /**
     * Product: QBW
     * Indicates whether barcoding is enabled
     *
     * @return bool
     */
    public function getBarcodeEnabled()
    {
        return $this->BarcodeEnabled;
    }

    /**
     * Product: QBW
     * Indicates whether barcoding is enabled
     *
     * @param bool $BarcodeEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setBarcodeEnabled(
        $BarcodeEnabled
    )
    {
        $this->BarcodeEnabled = $BarcodeEnabled;
        return $this;
    }

    /**
     * QBW: Only QBW supported
     *
     * @return bool
     */
    public function getEnhancedInventoryReceivingEnabled()
    {
        return $this->EnhancedInventoryReceivingEnabled;
    }

    /**
     * QBW: Only QBW supported
     *
     * @param bool $EnhancedInventoryReceivingEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setEnhancedInventoryReceivingEnabled(
        $EnhancedInventoryReceivingEnabled
    )
    {
        $this->EnhancedInventoryReceivingEnabled = $EnhancedInventoryReceivingEnabled;
        return $this;
    }

    /**
     * QBW: only
     *
     * @return \DateTime
     */
    public function getFIFOEffectiveDate()
    {
        return $this->FIFOEffectiveDate;
    }

    /**
     * QBW: only
     *
     * @param \DateTime $FIFOEffectiveDate
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setFIFOEffectiveDate(
        $FIFOEffectiveDate
    )
    {
        $this->FIFOEffectiveDate = $FIFOEffectiveDate;
        return $this;
    }

    /**
     * QBW: ONLY.
     *
     * @return bool
     */
    public function getFIFOEnabled()
    {
        return $this->FIFOEnabled;
    }

    /**
     * QBW: ONLY.
     *
     * @param bool $FIFOEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setFIFOEnabled(
        $FIFOEnabled
    )
    {
        $this->FIFOEnabled = $FIFOEnabled;
        return $this;
    }

    /**
     * QBW: ONLY. MLI available
     *
     * @return bool
     */
    public function getMLIAvailable()
    {
        return $this->MLIAvailable;
    }

    /**
     * QBW: ONLY. MLI available
     *
     * @param bool $MLIAvailable
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setMLIAvailable(
        $MLIAvailable
    )
    {
        $this->MLIAvailable = $MLIAvailable;
        return $this;
    }

    /**
     * QBW: ONLY. MLI enabled
     *
     * @return bool
     */
    public function getMLIEnabled()
    {
        return $this->MLIEnabled;
    }

    /**
     * QBW: ONLY. MLI enabled
     *
     * @param bool $MLIEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setMLIEnabled(
        $MLIEnabled
    )
    {
        $this->MLIEnabled = $MLIEnabled;
        return $this;
    }

    /**
     * Product: QBW
     * Indicates whether Row/Shelf/Bin location tracking is enabled
     *
     * @return bool
     */
    public function getRowShelfBinEnabled()
    {
        return $this->RowShelfBinEnabled;
    }

    /**
     * Product: QBW
     * Indicates whether Row/Shelf/Bin location tracking is enabled
     *
     * @param bool $RowShelfBinEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setRowShelfBinEnabled(
        $RowShelfBinEnabled
    )
    {
        $this->RowShelfBinEnabled = $RowShelfBinEnabled;
        return $this;
    }

    /**
     * QBW: only
     *
     * @return bool
     */
    public function getTrackingOnBuildAssemblyEnabled()
    {
        return $this->TrackingOnBuildAssemblyEnabled;
    }

    /**
     * QBW: only
     *
     * @param bool $TrackingOnBuildAssemblyEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setTrackingOnBuildAssemblyEnabled(
        $TrackingOnBuildAssemblyEnabled
    )
    {
        $this->TrackingOnBuildAssemblyEnabled = $TrackingOnBuildAssemblyEnabled;
        return $this;
    }

    /**
     * QBW: only
     *
     * @return bool
     */
    public function getTrackingOnInventoryAdjustmentEnabled()
    {
        return $this->TrackingOnInventoryAdjustmentEnabled;
    }

    /**
     * QBW: only
     *
     * @param bool $TrackingOnInventoryAdjustmentEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setTrackingOnInventoryAdjustmentEnabled(
        $TrackingOnInventoryAdjustmentEnabled
    )
    {
        $this->TrackingOnInventoryAdjustmentEnabled = $TrackingOnInventoryAdjustmentEnabled;
        return $this;
    }

    /**
     * QBW: only
     *
     * @return bool
     */
    public function getTrackingOnPurchaseTransactionsEnabled()
    {
        return $this->TrackingOnPurchaseTransactionsEnabled;
    }

    /**
     * QBW: only
     *
     * @param bool $TrackingOnPurchaseTransactionsEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setTrackingOnPurchaseTransactionsEnabled(
        $TrackingOnPurchaseTransactionsEnabled
    )
    {
        $this->TrackingOnPurchaseTransactionsEnabled = $TrackingOnPurchaseTransactionsEnabled;
        return $this;
    }

    /**
     * QBW: only
     *
     * @return bool
     */
    public function getTrackingOnSalesTransactionsEnabled()
    {
        return $this->TrackingOnSalesTransactionsEnabled;
    }

    /**
     * QBW: only
     *
     * @param bool $TrackingOnSalesTransactionsEnabled
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setTrackingOnSalesTransactionsEnabled(
        $TrackingOnSalesTransactionsEnabled
    )
    {
        $this->TrackingOnSalesTransactionsEnabled = $TrackingOnSalesTransactionsEnabled;
        return $this;
    }

    /**
     * QBW: only
     *
     * @return bool
     */
    public function getTrackingSerialOrLotNumber()
    {
        return $this->TrackingSerialOrLotNumber;
    }

    /**
     * QBW: only
     *
     * @param bool $TrackingSerialOrLotNumber
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function setTrackingSerialOrLotNumber(
        $TrackingSerialOrLotNumber
    )
    {
        $this->TrackingSerialOrLotNumber = $TrackingSerialOrLotNumber;
        return $this;
    }

}