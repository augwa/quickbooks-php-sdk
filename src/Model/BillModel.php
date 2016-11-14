<?php

namespace Augwa\QuickBooks\Model;

/**
 * Bill is an AP transaction representing a request-for-payment from a
 * third party for goods/services rendered and/or received
 *
 * Class BillModel
 * @package Augwa\QuickBooks\Model
 */
class BillModel
    extends PurchaseByVendorModel
{

    /**
     * @var float
     */
    private $Balance;

    /**
     * @var IntuitAnyTypeModel
     */
    private $BillEx;

    /**
     * @var \DateTime
     */
    private $DueDate;

    /**
     * @var float
     */
    private $HomeBalance;

    /**
     * @var ReferenceTypeModel
     */
    private $PayerRef;

    /**
     * @var PhysicalAddressModel
     */
    private $RemitToAddr;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesTermRef;

    /**
     * @var PhysicalAddressModel
     */
    private $ShipAddr;


    /**
     * Product: ALL
     * The unpaid amount of the bill.  When paid-in-full, balance will be
     * zero.
     * QuickBooks Notes
     * Non QB-writable.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * Product: ALL
     * The unpaid amount of the bill.  When paid-in-full, balance will be
     * zero.
     * QuickBooks Notes
     * Non QB-writable.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $Balance
     *
     * @return BillModel
     */
    public function setBalance(
        $Balance
    )
    {
        $this->Balance = $Balance;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Bill.
     *
     * @return IntuitAnyTypeModel
     */
    public function getBillEx()
    {
        return $this->BillEx;
    }

    /**
     * Internal use only: extension place holder for Bill.
     *
     * @param IntuitAnyTypeModel $BillEx
     *
     * @return BillModel
     */
    public function setBillEx(
        $BillEx
    )
    {
        $this->BillEx = $BillEx;
        return $this;
    }

    /**
     * The nominal date by which the bill must be paid, not including any
     * early-payment discount incentives, or late payment penalties.
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * The nominal date by which the bill must be paid, not including any
     * early-payment discount incentives, or late payment penalties.
     *
     * @param \DateTime $DueDate
     *
     * @return BillModel
     */
    public function setDueDate(
        $DueDate
    )
    {
        $this->DueDate = $DueDate;
        return $this;
    }

    /**
     * Product: ALL
     * The unpaid amount of the bill in home currency. Available only for
     * companies where multicurrency is enabled.  When paid-in-full, home
     * balance will be zero.
     * QuickBooks Notes
     * Non QB-writable.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getHomeBalance()
    {
        return $this->HomeBalance;
    }

    /**
     * Product: ALL
     * The unpaid amount of the bill in home currency. Available only for
     * companies where multicurrency is enabled.  When paid-in-full, home
     * balance will be zero.
     * QuickBooks Notes
     * Non QB-writable.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $HomeBalance
     *
     * @return BillModel
     */
    public function setHomeBalance(
        $HomeBalance
    )
    {
        $this->HomeBalance = $HomeBalance;
        return $this;
    }

    /**
     * Product: QBW
     * Payer information
     *
     * @return ReferenceTypeModel
     */
    public function getPayerRef()
    {
        return $this->PayerRef;
    }

    /**
     * Product: QBW
     * Payer information
     *
     * @param ReferenceTypeModel $PayerRef
     *
     * @return BillModel
     */
    public function setPayerRef(
        $PayerRef
    )
    {
        $this->PayerRef = $PayerRef;
        return $this;
    }

    /**
     * Address to which the payment should be sent.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return PhysicalAddressModel
     */
    public function getRemitToAddr()
    {
        return $this->RemitToAddr;
    }

    /**
     * Address to which the payment should be sent.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param PhysicalAddressModel $RemitToAddr
     *
     * @return BillModel
     */
    public function setRemitToAddr(
        $RemitToAddr
    )
    {
        $this->RemitToAddr = $RemitToAddr;
        return $this;
    }

    /**
     * SalesTerm Reference for the bill
     *
     * @return ReferenceTypeModel
     */
    public function getSalesTermRef()
    {
        return $this->SalesTermRef;
    }

    /**
     * SalesTerm Reference for the bill
     *
     * @param ReferenceTypeModel $SalesTermRef
     *
     * @return BillModel
     */
    public function setSalesTermRef(
        $SalesTermRef
    )
    {
        $this->SalesTermRef = $SalesTermRef;
        return $this;
    }

    /**
     * Address to which the vendor shipped or will ship any goods associated
     * with the purchase.
     *
     * @return PhysicalAddressModel
     */
    public function getShipAddr()
    {
        return $this->ShipAddr;
    }

    /**
     * Address to which the vendor shipped or will ship any goods associated
     * with the purchase.
     *
     * @param PhysicalAddressModel $ShipAddr
     *
     * @return BillModel
     */
    public function setShipAddr(
        $ShipAddr
    )
    {
        $this->ShipAddr = $ShipAddr;
        return $this;
    }

}