<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * A sales order is a financial transaction that represents a request
 * received from a customer to purchase products or services. Sales
 * orders help you manage the sale of products and services your
 * customers order. For example, a sales order tracks inventory that is
 * on back order for a customer. Sales Orders are supported only in
 * QuickBooks Premier (desktop) and above. However, if you are accessing
 * a company file created in Premier and above from a lesser edition of
 * QuickBooks (such as Pro), you can do queries against SalesOrders.
 * Using sales orders is optional.
 * Endpoint: services.intuit.com
 * Business Rules: A sales order must have at least one line that
 * describes the item. A sales order must have a reference to a customer
 * in the If you submit a query with the filter
 * IncludeDiscountLineDetails, the system retrieves either DiscountAmount
 * or DiscountRatePercent with associated values
 *
 * Class SalesOrderModel
 * @package Augwa\QuickBooks\Model
 */
class SalesOrderModel
    extends SalesTransactionModel
{

    /**
     * @var bool
     */
    private $ManuallyClosed;

    /**
     * @var IntuitAnyTypeModel
     */
    private $SalesOrderEx;


    /**
     * Product: QBW
     * The entire transaction, or individual items are maually closed, i.e.
     * not invoiced.
     *
     * @return bool
     */
    public function getManuallyClosed()
    {
        return $this->ManuallyClosed;
    }

    /**
     * Product: QBW
     * The entire transaction, or individual items are maually closed, i.e.
     * not invoiced.
     *
     * @param bool $ManuallyClosed
     *
     * @return SalesOrderModel
     */
    public function setManuallyClosed(
        $ManuallyClosed
    )
    {
        $this->ManuallyClosed = $ManuallyClosed;
        return $this;
    }

    /**
     * Internal use only: extension place holder for SalesOrder
     *
     * @return IntuitAnyTypeModel
     */
    public function getSalesOrderEx()
    {
        return $this->SalesOrderEx;
    }

    /**
     * Internal use only: extension place holder for SalesOrder
     *
     * @param IntuitAnyTypeModel $SalesOrderEx
     *
     * @return SalesOrderModel
     */
    public function setSalesOrderEx(
        $SalesOrderEx
    )
    {
        $this->SalesOrderEx = $SalesOrderEx;
        return $this;
    }

}