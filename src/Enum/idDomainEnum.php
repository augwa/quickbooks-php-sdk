<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: ALL
 * Enumeration of possible Id Domains. NG- next gen (int); QB -
 * Provisional DB id (string); QBO; BM (Billing Manager); QBSDK - ListID,
 * TxnID, or TxnLineId.
 *
 * Class idDomainEnum
 * @package Augwa\QuickBooks\Enum
 */
class idDomainEnum
{

    const BM = 'BM';
    const NG = 'NG';
    const PMT = 'PMT';
    const QB = 'QB';
    const QBO = 'QBO';
    const QBSDK = 'QBSDK';

}