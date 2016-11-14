<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Enumeration of Credit Card transaction types used in Credit Card
 * payment transactions.
 *
 * Class CCTxnTypeEnum
 * @package Augwa\QuickBooks\Enum
 */
class CCTxnTypeEnum
{

    const AUTHORIZATION = 'Authorization';
    const CAPTURE = 'Capture';
    const CHARGE = 'Charge';
    const REFUND = 'Refund';
    const VOICE_AUTHORIZATION = 'VoiceAuthorization';

}