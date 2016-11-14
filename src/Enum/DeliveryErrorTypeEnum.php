<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: QBO
 * Enum of different delivery error types.
 *
 * Class DeliveryErrorTypeEnum
 * @package Augwa\QuickBooks\Enum
 */
class DeliveryErrorTypeEnum
{

    const MISSING_INFO = 'Missing Info';
    const UNDELIVERABLE = 'Undeliverable';
    const DELIVERY_SERVER_DOWN = 'Delivery Server Down';
    const BOUNCED_EMAIL = 'Bounced Email';

}