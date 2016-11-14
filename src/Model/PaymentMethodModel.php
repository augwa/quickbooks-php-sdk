<?php

namespace Augwa\QuickBooks\Model;

/**
 * Method of payment for received goods.
 *
 * Class PaymentMethodModel
 * @package Augwa\QuickBooks\Model
 */
class PaymentMethodModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PaymentMethodEx;

    /**
     * @var string
     */
    private $Type;


    /**
     * Whether or not active inactive payment methods may be hidden from most
     * display purposes and may not be used on financial transactions.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not active inactive payment methods may be hidden from most
     * display purposes and may not be used on financial transactions.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return PaymentMethodModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * User recognizable name for the payment method.
     * Length Restriction:
     * QBO: 15
     * QBW: 31
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * User recognizable name for the payment method.
     * Length Restriction:
     * QBO: 15
     * QBW: 31
     *
     * @param string $Name
     *
     * @return PaymentMethodModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Internal use only: extension place holder for PaymentMethod
     *
     * @return IntuitAnyTypeModel
     */
    public function getPaymentMethodEx()
    {
        return $this->PaymentMethodEx;
    }

    /**
     * Internal use only: extension place holder for PaymentMethod
     *
     * @param IntuitAnyTypeModel $PaymentMethodEx
     *
     * @return PaymentMethodModel
     */
    public function setPaymentMethodEx(
        $PaymentMethodEx
    )
    {
        $this->PaymentMethodEx = $PaymentMethodEx;
        return $this;
    }

    /**
     * Defines the type, or the ways the payment was made. For QBW, the
     * acceptable values are defined in PaymentMethodEnum.  For QBO, this
     * field is restricted to CREDIT_CARD or NON_CREDIT_CARD.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Defines the type, or the ways the payment was made. For QBW, the
     * acceptable values are defined in PaymentMethodEnum.  For QBO, this
     * field is restricted to CREDIT_CARD or NON_CREDIT_CARD.
     *
     * @param string $Type
     *
     * @return PaymentMethodModel
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}