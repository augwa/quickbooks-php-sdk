<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class BillPaymentCreditCardModel
 * @package Augwa\QuickBooks\Model
 */
class BillPaymentCreditCardModel
    extends Model
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $BillPaymentCreditCardEx;

    /**
     * @var ReferenceTypeModel
     */
    private $CCAccountRef;

    /**
     * @var CreditCardPaymentModel
     */
    private $CCDetail;


    /**
     * Internal use only: extension place holder for BillPayTypeCreditCard
     *
     * @return IntuitAnyTypeModel
     */
    public function getBillPaymentCreditCardEx()
    {
        return $this->BillPaymentCreditCardEx;
    }

    /**
     * Internal use only: extension place holder for BillPayTypeCreditCard
     *
     * @param IntuitAnyTypeModel $BillPaymentCreditCardEx
     *
     * @return BillPaymentCreditCardModel
     */
    public function setBillPaymentCreditCardEx(
        $BillPaymentCreditCardEx
    )
    {
        $this->BillPaymentCreditCardEx = $BillPaymentCreditCardEx;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getCCAccountRef()
    {
        return $this->CCAccountRef;
    }

    /**
     * @param ReferenceTypeModel $CCAccountRef
     *
     * @return BillPaymentCreditCardModel
     */
    public function setCCAccountRef(
        $CCAccountRef
    )
    {
        $this->CCAccountRef = $CCAccountRef;
        return $this;
    }

    /**
     * @return CreditCardPaymentModel
     */
    public function getCCDetail()
    {
        return $this->CCDetail;
    }

    /**
     * @param CreditCardPaymentModel $CCDetail
     *
     * @return BillPaymentCreditCardModel
     */
    public function setCCDetail(
        $CCDetail
    )
    {
        $this->CCDetail = $CCDetail;
        return $this;
    }

}