<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * SalesOrder item detail for a transaction line.
 *
 * Class SalesOrderItemLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class SalesOrderItemLineDetailModel
    extends SalesItemLineDetailModel
{

    /**
     * @var bool
     */
    private $ManuallyClosed;


    /**
     * Product: ALL
     * The item on the line is marked as if fully received, but it is closed
     * as no longer available.
     *
     * @return bool
     */
    public function getManuallyClosed()
    {
        return $this->ManuallyClosed;
    }

    /**
     * Product: ALL
     * The item on the line is marked as if fully received, but it is closed
     * as no longer available.
     *
     * @param bool $ManuallyClosed
     *
     * @return SalesOrderItemLineDetailModel
     */
    public function setManuallyClosed(
        $ManuallyClosed
    )
    {
        $this->ManuallyClosed = $ManuallyClosed;
        return $this;
    }

}