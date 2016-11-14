<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial transaction representing a Payment by check issued to pay
 * one or more bills received from 3rd party (vendor) for purchased goods
 * or services.
 *
 * Class BillPaymentModel
 * @package Augwa\QuickBooks\Model
 */
class BillPaymentModel
    extends TransactionModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $APAccountRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $BillPaymentEx;

    /**
     * @var string
     * @see BillPaymentTypeEnum
     */
    private $PayType;

    /**
     * @var float
     */
    private $TotalAmt;

    /**
     * @var ReferenceTypeModel
     */
    private $VendorRef;


    /**
     * Optional AP account specification for bill payment transactions.  Most
     * small businesses have a single AP account, so the account is implied. 
     *  When specified, the account must be a liability account - and
     * further, must be of the sub-type "Payables".
     * QuickBooks Notes
     * The AP Account should always be specified or a default will be used.
     *
     * @return ReferenceTypeModel
     */
    public function getAPAccountRef()
    {
        return $this->APAccountRef;
    }

    /**
     * Optional AP account specification for bill payment transactions.  Most
     * small businesses have a single AP account, so the account is implied. 
     *  When specified, the account must be a liability account - and
     * further, must be of the sub-type "Payables".
     * QuickBooks Notes
     * The AP Account should always be specified or a default will be used.
     *
     * @param ReferenceTypeModel $APAccountRef
     *
     * @return BillPaymentModel
     */
    public function setAPAccountRef(
        $APAccountRef
    )
    {
        $this->APAccountRef = $APAccountRef;
        return $this;
    }

    /**
     * Internal use only: extension place holder for BillPay
     *
     * @return IntuitAnyTypeModel
     */
    public function getBillPaymentEx()
    {
        return $this->BillPaymentEx;
    }

    /**
     * Internal use only: extension place holder for BillPay
     *
     * @param IntuitAnyTypeModel $BillPaymentEx
     *
     * @return BillPaymentModel
     */
    public function setBillPaymentEx(
        $BillPaymentEx
    )
    {
        $this->BillPaymentEx = $BillPaymentEx;
        return $this;
    }

    /**
     * Filterable: QBW
     *
     * @return string
     *
     * @see BillPaymentTypeEnum
     */
    public function getPayType()
    {
        return $this->PayType;
    }

    /**
     * Filterable: QBW
     *
     * @param string $PayType
     *
     * @return BillPaymentModel
     *
     * @see BillPaymentTypeEnum
     */
    public function setPayType(
        $PayType
    )
    {
        $this->PayType = $PayType;
        return $this;
    }

    /**
     * Product: ALL
     * The total amount paid, determined by taking the sum of all lines
     * associated.
     * InputType: QBW: ReadOnly
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }

    /**
     * Product: ALL
     * The total amount paid, determined by taking the sum of all lines
     * associated.
     * InputType: QBW: ReadOnly
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $TotalAmt
     *
     * @return BillPaymentModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

    /**
     * Identifies the party or organization that originated the purchase of
     * the goods, services or BillPayment.
     * QuickBooks Notes
     * Valid Vendor Name or Id is required for the create operation for Bill
     * Payment transactions.
     * Required for the create operation.
     *
     * @return ReferenceTypeModel
     */
    public function getVendorRef()
    {
        return $this->VendorRef;
    }

    /**
     * Identifies the party or organization that originated the purchase of
     * the goods, services or BillPayment.
     * QuickBooks Notes
     * Valid Vendor Name or Id is required for the create operation for Bill
     * Payment transactions.
     * Required for the create operation.
     *
     * @param ReferenceTypeModel $VendorRef
     *
     * @return BillPaymentModel
     */
    public function setVendorRef(
        $VendorRef
    )
    {
        $this->VendorRef = $VendorRef;
        return $this;
    }

}