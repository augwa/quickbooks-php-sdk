<?php

namespace Augwa\QuickBooks\Model;

/**
 * SalesReceipt Transaction entity
 *
 * Class SalesReceiptModel
 * @package Augwa\QuickBooks\Model
 */
class SalesReceiptModel
    extends SalesTransactionModel
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $SalesReceiptEx;


    /**
     * Extension entity for SalesReceipt
     *
     * @return IntuitAnyTypeModel
     */
    public function getSalesReceiptEx()
    {
        return $this->SalesReceiptEx;
    }

    /**
     * Extension entity for SalesReceipt
     *
     * @param IntuitAnyTypeModel $SalesReceiptEx
     *
     * @return SalesReceiptModel
     */
    public function setSalesReceiptEx(
        $SalesReceiptEx
    )
    {
        $this->SalesReceiptEx = $SalesReceiptEx;
        return $this;
    }

}