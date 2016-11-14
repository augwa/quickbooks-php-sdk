<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: QBO
 * Tax Form Type holds data related to Tax Information (Tax Form Type)
 * based on Regional compliance laws. Applicable for IN region currently.
 * Can be used to extend for other Regions.
 *
 * Class TaxFormTypeEnum
 * @package Augwa\QuickBooks\Enum
 */
class TaxFormTypeEnum
{

    const FORM_C = 'Form C';
    const FORM_F = 'Form F';
    const FORM_I = 'Form I';
    const FORM_H = 'Form H';
    const FORM_E1 = 'Form E1';
    const FORM_E2 = 'Form E2';

}