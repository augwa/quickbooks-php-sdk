<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: QBO
 * Enumeration of Purchase or Sale Location for France
 *
 * Class TransactionLocationTypeEnum
 * @package Augwa\QuickBooks\Enum
 */
class TransactionLocationTypeEnum
{

    const WITHIN_FRANCE = 'WithinFrance';
    const FRANCE_OVERSEAS = 'FranceOverseas';
    const OUTSIDE_FRANCE_WITH_EU = 'OutsideFranceWithEU';
    const OUTSIDE_EU = 'OutsideEU';

}