<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * Specifies various fields required for emailing different transaction
 *
 * Class EmailDeliveryInfoModel
 * @package Augwa\QuickBooks\Model
 */
class EmailDeliveryInfoModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $AllowOnlineACHPayment;

    /**
     * @var bool
     */
    private $AllowOnlineCreditCardPayment;

    /**
     * @var bool
     */
    private $AllowOnlinePayment;

    /**
     * @var EmailAddressModel
     */
    private $DeliveryAddress;

    /**
     * @var TransactionDeliveryInfoModel
     */
    private $DeliveryInfo;

    /**
     * @var string
     * @see ETransactionStatusEnum
     */
    private $ETransactionStatus;

    /**
     * @var EmailMessageModel
     */
    private $EmailMessage;


    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -bank or ach) to pay the Invoice
     *
     * @return bool
     */
    public function getAllowOnlineACHPayment()
    {
        return $this->AllowOnlineACHPayment;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -bank or ach) to pay the Invoice
     *
     * @param bool $AllowOnlineACHPayment
     *
     * @return EmailDeliveryInfoModel
     */
    public function setAllowOnlineACHPayment(
        $AllowOnlineACHPayment
    )
    {
        $this->AllowOnlineACHPayment = $AllowOnlineACHPayment;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -credit card) to pay the Invoice
     *
     * @return bool
     */
    public function getAllowOnlineCreditCardPayment()
    {
        return $this->AllowOnlineCreditCardPayment;
    }

    /**
     * Product: QBO
     * Specifies whether customer is allowed to use eInvoicing(online payment
     * -credit card) to pay the Invoice
     *
     * @param bool $AllowOnlineCreditCardPayment
     *
     * @return EmailDeliveryInfoModel
     */
    public function setAllowOnlineCreditCardPayment(
        $AllowOnlineCreditCardPayment
    )
    {
        $this->AllowOnlineCreditCardPayment = $AllowOnlineCreditCardPayment;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies whether online payment should be enabled for this
     * transaction
     *
     * @return bool
     */
    public function getAllowOnlinePayment()
    {
        return $this->AllowOnlinePayment;
    }

    /**
     * Product: QBO
     * Specifies whether online payment should be enabled for this
     * transaction
     *
     * @param bool $AllowOnlinePayment
     *
     * @return EmailDeliveryInfoModel
     */
    public function setAllowOnlinePayment(
        $AllowOnlinePayment
    )
    {
        $this->AllowOnlinePayment = $AllowOnlinePayment;
        return $this;
    }

    /**
     * Product: QBO
     * Email address of recipients. Multiple email address seperated with
     * comma.
     *
     * @return EmailAddressModel
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * Product: QBO
     * Email address of recipients. Multiple email address seperated with
     * comma.
     *
     * @param EmailAddressModel $DeliveryAddress
     *
     * @return EmailDeliveryInfoModel
     */
    public function setDeliveryAddress(
        $DeliveryAddress
    )
    {
        $this->DeliveryAddress = $DeliveryAddress;
        return $this;
    }

    /**
     * Product: QBO
     * Delivery information like DeliveryTime, DeliveryType and
     * DeliveryErrorType (if applicable)
     *
     * @return TransactionDeliveryInfoModel
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }

    /**
     * Product: QBO
     * Delivery information like DeliveryTime, DeliveryType and
     * DeliveryErrorType (if applicable)
     *
     * @param TransactionDeliveryInfoModel $DeliveryInfo
     *
     * @return EmailDeliveryInfoModel
     */
    public function setDeliveryInfo(
        $DeliveryInfo
    )
    {
        $this->DeliveryInfo = $DeliveryInfo;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies ETransaction status of this transaction. Applicable if
     * ETransaction is enabled and this transaction is a ETransaction.
     *
     * @return string
     *
     * @see ETransactionStatusEnum
     */
    public function getETransactionStatus()
    {
        return $this->ETransactionStatus;
    }

    /**
     * Product: QBO
     * Specifies ETransaction status of this transaction. Applicable if
     * ETransaction is enabled and this transaction is a ETransaction.
     *
     * @param string $ETransactionStatus
     *
     * @return EmailDeliveryInfoModel
     *
     * @see ETransactionStatusEnum
     */
    public function setETransactionStatus(
        $ETransactionStatus
    )
    {
        $this->ETransactionStatus = $ETransactionStatus;
        return $this;
    }

    /**
     * Product: QBO
     * Custom Email subject and message to be used for this email.
     *
     * @return EmailMessageModel
     */
    public function getEmailMessage()
    {
        return $this->EmailMessage;
    }

    /**
     * Product: QBO
     * Custom Email subject and message to be used for this email.
     *
     * @param EmailMessageModel $EmailMessage
     *
     * @return EmailDeliveryInfoModel
     */
    public function setEmailMessage(
        $EmailMessage
    )
    {
        $this->EmailMessage = $EmailMessage;
        return $this;
    }

}