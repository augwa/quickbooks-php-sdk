<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Possible Status of an Entity.
 *
 * Class EntityStatusEnum
 * @package Augwa\QuickBooks\Enum
 */
class EntityStatusEnum
{

    const DELETED = 'Deleted';
    const VOIDED = 'Voided';
    const DRAFT = 'Draft';
    const PENDING = 'Pending';
    const IN_TRANSIT = 'InTransit';
    const SYNCHRONIZED = 'Synchronized';
    const SYNC_ERROR = 'SyncError';

}