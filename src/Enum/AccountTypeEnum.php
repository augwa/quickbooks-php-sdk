<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Enumeration of Account sub-types(QBW) and Account types(QBO) used to
 * specifically categorize accounts.  Note: QBO doesn't support the
 * "Non-Posting" Account type.
 *
 * Class AccountTypeEnum
 * @package Augwa\QuickBooks\Enum
 */
class AccountTypeEnum
{

    const BANK = 'Bank';
    const ACCOUNTS_RECEIVABLE = 'Accounts Receivable';
    const OTHER_CURRENT_ASSET = 'Other Current Asset';
    const FIXED_ASSET = 'Fixed Asset';
    const OTHER_ASSET = 'Other Asset';
    const ACCOUNTS_PAYABLE = 'Accounts Payable';
    const CREDIT_CARD = 'Credit Card';
    const OTHER_CURRENT_LIABILITY = 'Other Current Liability';
    const LONG_TERM_LIABILITY = 'Long Term Liability';
    const EQUITY = 'Equity';
    const INCOME = 'Income';
    const COST_OF_GOODS_SOLD = 'Cost of Goods Sold';
    const EXPENSE = 'Expense';
    const OTHER_INCOME = 'Other Income';
    const OTHER_EXPENSE = 'Other Expense';
    const NON_POSTING = 'Non-Posting';

}