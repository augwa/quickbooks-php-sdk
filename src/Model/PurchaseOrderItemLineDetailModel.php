<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * PurchaseOrder item detail for a transaction line.
 *
 * Class PurchaseOrderItemLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class PurchaseOrderItemLineDetailModel
    extends SalesItemLineDetailModel
{

    /**
     * @var string
     */
    private $ManPartNum;

    /**
     * @var bool
     */
    private $ManuallyClosed;

    /**
     * @var float
     */
    private $OpenQty;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PurchaseOrderItemLineDetailEx;


    /**
     * Product: ALL
     * The identifier provided by manufacturer for the Item. For example, the
     * model number.
     *
     * @return string
     */
    public function getManPartNum()
    {
        return $this->ManPartNum;
    }

    /**
     * Product: ALL
     * The identifier provided by manufacturer for the Item. For example, the
     * model number.
     *
     * @param string $ManPartNum
     *
     * @return PurchaseOrderItemLineDetailModel
     */
    public function setManPartNum(
        $ManPartNum
    )
    {
        $this->ManPartNum = $ManPartNum;
        return $this;
    }

    /**
     * Product: ALL
     * The item on the line is marked as if fully receiveded, but it is
     * closed as no longer available.
     *
     * @return bool
     */
    public function getManuallyClosed()
    {
        return $this->ManuallyClosed;
    }

    /**
     * Product: ALL
     * The item on the line is marked as if fully receiveded, but it is
     * closed as no longer available.
     *
     * @param bool $ManuallyClosed
     *
     * @return PurchaseOrderItemLineDetailModel
     */
    public function setManuallyClosed(
        $ManuallyClosed
    )
    {
        $this->ManuallyClosed = $ManuallyClosed;
        return $this;
    }

    /**
     * Product: ALL
     * Represents the difference between the quantity ordered and actually
     * received.Cannot be written to QuickBooks.
     *
     * @return float
     */
    public function getOpenQty()
    {
        return $this->OpenQty;
    }

    /**
     * Product: ALL
     * Represents the difference between the quantity ordered and actually
     * received.Cannot be written to QuickBooks.
     *
     * @param float $OpenQty
     *
     * @return PurchaseOrderItemLineDetailModel
     */
    public function setOpenQty(
        $OpenQty
    )
    {
        $this->OpenQty = $OpenQty;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for PurchaseOrderItemDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getPurchaseOrderItemLineDetailEx()
    {
        return $this->PurchaseOrderItemLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for PurchaseOrderItemDetail
     *
     * @param IntuitAnyTypeModel $PurchaseOrderItemLineDetailEx
     *
     * @return PurchaseOrderItemLineDetailModel
     */
    public function setPurchaseOrderItemLineDetailEx(
        $PurchaseOrderItemLineDetailEx
    )
    {
        $this->PurchaseOrderItemLineDetailEx = $PurchaseOrderItemLineDetailEx;
        return $this;
    }

}