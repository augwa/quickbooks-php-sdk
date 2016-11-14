<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Information about a payment received by credit card.
 *
 * Class CreditCardPaymentModel
 * @package Augwa\QuickBooks\Model
 */
class CreditCardPaymentModel
    extends Model
{

    /**
     * @var CreditChargeInfoModel
     */
    private $CreditChargeInfo;

    /**
     * @var CreditChargeResponseModel
     */
    private $CreditChargeResponse;


    /**
     * @return CreditChargeInfoModel
     */
    public function getCreditChargeInfo()
    {
        return $this->CreditChargeInfo;
    }

    /**
     * @param CreditChargeInfoModel $CreditChargeInfo
     *
     * @return CreditCardPaymentModel
     */
    public function setCreditChargeInfo(
        $CreditChargeInfo
    )
    {
        $this->CreditChargeInfo = $CreditChargeInfo;
        return $this;
    }

    /**
     * @return CreditChargeResponseModel
     */
    public function getCreditChargeResponse()
    {
        return $this->CreditChargeResponse;
    }

    /**
     * @param CreditChargeResponseModel $CreditChargeResponse
     *
     * @return CreditCardPaymentModel
     */
    public function setCreditChargeResponse(
        $CreditChargeResponse
    )
    {
        $this->CreditChargeResponse = $CreditChargeResponse;
        return $this;
    }

}