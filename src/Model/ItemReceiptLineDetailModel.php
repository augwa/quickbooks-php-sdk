<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * ItemReceipt detail for a transaction line.
 *
 * Class ItemReceiptLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class ItemReceiptLineDetailModel
    extends Model
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $ItemReceiptLineDetailEx;


    /**
     * Product: ALL
     * Internal use only: extension place holder for ItemReceiptDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getItemReceiptLineDetailEx()
    {
        return $this->ItemReceiptLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for ItemReceiptDetail
     *
     * @param IntuitAnyTypeModel $ItemReceiptLineDetailEx
     *
     * @return ItemReceiptLineDetailModel
     */
    public function setItemReceiptLineDetailEx(
        $ItemReceiptLineDetailEx
    )
    {
        $this->ItemReceiptLineDetailEx = $ItemReceiptLineDetailEx;
        return $this;
    }

}