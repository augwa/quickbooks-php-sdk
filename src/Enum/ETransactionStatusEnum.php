<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Enumeration of eTransaction status values. The statuses (Sent, Viewed,
 * Paid, Delivery Error, Updated, Sent With ICN Error) are used by QBO
 * eInvoicing. The rest statuses are to be used for Tradeshift
 * Integration
 *
 * Class ETransactionStatusEnum
 * @package Augwa\QuickBooks\Enum
 */
class ETransactionStatusEnum
{

    const SENT = 'Sent';
    const VIEWED = 'Viewed';
    const PAID = 'Paid';
    const DELIVERY_ERROR = 'Delivery Error';
    const UPDATED = 'Updated';
    const ERROR = 'Error';
    const ACCEPTED = 'Accepted';
    const REJECTED = 'Rejected';
    const SENT_WITH_ICN_ERROR = 'Sent With ICN Error';
    const DELIVERED = 'Delivered';
    const DISPUTED = 'Disputed';

}