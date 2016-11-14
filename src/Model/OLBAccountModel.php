<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes OLBAccount details
 *
 * Class OLBAccountModel
 * @package Augwa\QuickBooks\Model
 */
class OLBAccountModel
    extends Model
{

    /**
     * @var string
     */
    private $AccountDetails;

    /**
     * @var ReferenceTypeModel
     */
    private $AccountId;

    /**
     * @var string
     */
    private $AppVersion;

    /**
     * @var float
     */
    private $LastBankBalance;

    /**
     * @var bool
     */
    private $SubscribedToApp;


    /**
     * Account details that contains possibly credit card number, last 5
     * digits
     *
     * @return string
     */
    public function getAccountDetails()
    {
        return $this->AccountDetails;
    }

    /**
     * Account details that contains possibly credit card number, last 5
     * digits
     *
     * @param string $AccountDetails
     *
     * @return OLBAccountModel
     */
    public function setAccountDetails(
        $AccountDetails
    )
    {
        $this->AccountDetails = $AccountDetails;
        return $this;
    }

    /**
     * Product: ALL
     * AccountId to be enabled or disabled
     *
     * @return ReferenceTypeModel
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * Product: ALL
     * AccountId to be enabled or disabled
     *
     * @param ReferenceTypeModel $AccountId
     *
     * @return OLBAccountModel
     */
    public function setAccountId(
        $AccountId
    )
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * Specifies which version is being used (such as v1 or v2). This field
     * is optional.
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->AppVersion;
    }

    /**
     * Specifies which version is being used (such as v1 or v2). This field
     * is optional.
     *
     * @param string $AppVersion
     *
     * @return OLBAccountModel
     */
    public function setAppVersion(
        $AppVersion
    )
    {
        $this->AppVersion = $AppVersion;
        return $this;
    }

    /**
     * The last bank balance. This field is optional.
     *
     * @return float
     */
    public function getLastBankBalance()
    {
        return $this->LastBankBalance;
    }

    /**
     * The last bank balance. This field is optional.
     *
     * @param float $LastBankBalance
     *
     * @return OLBAccountModel
     */
    public function setLastBankBalance(
        $LastBankBalance
    )
    {
        $this->LastBankBalance = $LastBankBalance;
        return $this;
    }

    /**
     * True when the AccountId is linked to an IPP app and false when the
     * AccountId is delinked from the IPP app
     *
     * @return bool
     */
    public function getSubscribedToApp()
    {
        return $this->SubscribedToApp;
    }

    /**
     * True when the AccountId is linked to an IPP app and false when the
     * AccountId is delinked from the IPP app
     *
     * @param bool $SubscribedToApp
     *
     * @return OLBAccountModel
     */
    public function setSubscribedToApp(
        $SubscribedToApp
    )
    {
        $this->SubscribedToApp = $SubscribedToApp;
        return $this;
    }

}