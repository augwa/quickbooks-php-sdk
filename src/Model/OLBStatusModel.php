<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes list of OLBAccounts that needs to be enabled or disabled
 *
 * Class OLBStatusModel
 * @package Augwa\QuickBooks\Model
 */
class OLBStatusModel
    extends Model
{

    /**
     * @var OLBAccountModel
     */
    private $OLBAccount;


    /**
     * Product: ALL
     * Account details
     *
     * @return OLBAccountModel
     */
    public function getOLBAccount()
    {
        return $this->OLBAccount;
    }

    /**
     * Product: ALL
     * Account details
     *
     * @param OLBAccountModel $OLBAccount
     *
     * @return OLBStatusModel
     */
    public function setOLBAccount(
        $OLBAccount
    )
    {
        $this->OLBAccount = $OLBAccount;
        return $this;
    }

}