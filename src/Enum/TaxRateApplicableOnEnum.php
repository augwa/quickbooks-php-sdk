<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: QBO
 * Enumeration of  transaction type a given tax rate can be applied to
 *
 * Class TaxRateApplicableOnEnum
 * @package Augwa\QuickBooks\Enum
 */
class TaxRateApplicableOnEnum
{

    const SALES = 'Sales';
    const PURCHASE = 'Purchase';
    const ADJUSTMENT = 'Adjustment';
    const OTHER = 'Other';

}