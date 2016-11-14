<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Enumerates list of CUD operations
 *
 * Class OperationEnum
 * @package Augwa\QuickBooks\Enum
 */
class OperationEnum
{

    const CREATE = 'create';
    const UPDATE = 'update';
    const REVERT = 'revert';
    const DELETE = 'delete';
    const VOID = 'void';
    const SEND = 'send';

}