<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Enumeration of payable status for an invoice, as follows: A pending
 * invoice is not yet approved/final/sent; not yet payable by customer. A
 * payable invoice is now payable.  Partial payments may have been
 * received, but money still remains to be paid.  No claim is made about
 * due vs. overdue, past due etc... A paid invoice has been paid in full.
 *  No amount remains to be paid.
 *
 * Class PaymentStatusEnum
 * @package Augwa\QuickBooks\Enum
 */
class PaymentStatusEnum
{

    const DRAFT = 'Draft';
    const OVERDUE = 'Overdue';
    const PENDING = 'Pending';
    const PAYABLE = 'Payable';
    const PAID = 'Paid';
    const TRASH = 'Trash';
    const UN_PAID = 'UnPaid';

}