<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Enumeration line detail types.
 *
 * Class LineDetailTypeEnum
 * @package Augwa\QuickBooks\Enum
 */
class LineDetailTypeEnum
{

    const PAYMENT_LINE_DETAIL = 'PaymentLineDetail';
    const DISCOUNT_LINE_DETAIL = 'DiscountLineDetail';
    const TAX_LINE_DETAIL = 'TaxLineDetail';
    const SALES_ITEM_LINE_DETAIL = 'SalesItemLineDetail';
    const ITEM_BASED_EXPENSE_LINE_DETAIL = 'ItemBasedExpenseLineDetail';
    const ACCOUNT_BASED_EXPENSE_LINE_DETAIL = 'AccountBasedExpenseLineDetail';
    const DEPOSIT_LINE_DETAIL = 'DepositLineDetail';
    const PURCHASE_ORDER_ITEM_LINE_DETAIL = 'PurchaseOrderItemLineDetail';
    const ITEM_RECEIPT_LINE_DETAIL = 'ItemReceiptLineDetail';
    const JOURNAL_ENTRY_LINE_DETAIL = 'JournalEntryLineDetail';
    const GROUP_LINE_DETAIL = 'GroupLineDetail';
    const DESCRIPTION_ONLY = 'DescriptionOnly';
    const SUB_TOTAL_LINE_DETAIL = 'SubTotalLineDetail';
    const SALES_ORDER_ITEM_LINE_DETAIL = 'SalesOrderItemLineDetail';
    const TDSLINE_DETAIL = 'TDSLineDetail';

}