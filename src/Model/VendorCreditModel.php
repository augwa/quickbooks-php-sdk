<?php

namespace Augwa\QuickBooks\Model;

/**
 * Bill is an AP transaction representing a request-for-payment from a
 * third party for goods/services rendered and/or received
 *
 * Class VendorCreditModel
 * @package Augwa\QuickBooks\Model
 */
class VendorCreditModel
    extends PurchaseByVendorModel
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $VendorCreditEx;


    /**
     * Internal use only: extension place holder for Bill extensible element 
     * to qualify account.
     *
     * @return IntuitAnyTypeModel
     */
    public function getVendorCreditEx()
    {
        return $this->VendorCreditEx;
    }

    /**
     * Internal use only: extension place holder for Bill extensible element 
     * to qualify account.
     *
     * @param IntuitAnyTypeModel $VendorCreditEx
     *
     * @return VendorCreditModel
     */
    public function setVendorCreditEx(
        $VendorCreditEx
    )
    {
        $this->VendorCreditEx = $VendorCreditEx;
        return $this;
    }

}