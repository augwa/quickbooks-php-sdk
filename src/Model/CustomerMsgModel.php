<?php

namespace Augwa\QuickBooks\Model;

/**
 * A standard message to a customer that can be included at the bottom of
 * a sales form.
 *
 * Class CustomerMsgModel
 * @package Augwa\QuickBooks\Model
 */
class CustomerMsgModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CustomerMsgEx;

    /**
     * @var string
     */
    private $Name;


    /**
     * Whether or not active inactive customer message may be hidden from
     * most display purposes and may not be used on financial transactions.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not active inactive customer message may be hidden from
     * most display purposes and may not be used on financial transactions.
     *
     * @param bool $Active
     *
     * @return CustomerMsgModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Internal use only: extension place holder for CustomerMsg
     *
     * @return IntuitAnyTypeModel
     */
    public function getCustomerMsgEx()
    {
        return $this->CustomerMsgEx;
    }

    /**
     * Internal use only: extension place holder for CustomerMsg
     *
     * @param IntuitAnyTypeModel $CustomerMsgEx
     *
     * @return CustomerMsgModel
     */
    public function setCustomerMsgEx(
        $CustomerMsgEx
    )
    {
        $this->CustomerMsgEx = $CustomerMsgEx;
        return $this;
    }

    /**
     * Contains the message to a customer.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Contains the message to a customer.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @param string $Name
     *
     * @return CustomerMsgModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

}