<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Enumeration of Billable Status used when searching for reimbursable
 * expenses.
 *
 * Class BillableStatusEnum
 * @package Augwa\QuickBooks\Enum
 */
class BillableStatusEnum
{

    const BILLABLE = 'Billable';
    const NOT_BILLABLE = 'NotBillable';
    const HAS_BEEN_BILLED = 'HasBeenBilled';

}