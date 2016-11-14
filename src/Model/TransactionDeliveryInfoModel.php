<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * Transaction delivery info like DeliveryType, DeliveryTime,
 * DeliveryErrorType (if any)
 *
 * Class TransactionDeliveryInfoModel
 * @package Augwa\QuickBooks\Model
 */
class TransactionDeliveryInfoModel
    extends Model
{

    /**
     * @var string
     * @see DeliveryErrorTypeEnum
     */
    private $DeliveryErrorType;

    /**
     * @var \DateTime
     */
    private $DeliveryTime;

    /**
     * @var string
     * @see DeliveryTypeEnum
     */
    private $DeliveryType;


    /**
     * Product: QBO
     * If delivery failed, this would indicate the type of the failure.
     *
     * @return string
     *
     * @see DeliveryErrorTypeEnum
     */
    public function getDeliveryErrorType()
    {
        return $this->DeliveryErrorType;
    }

    /**
     * Product: QBO
     * If delivery failed, this would indicate the type of the failure.
     *
     * @param string $DeliveryErrorType
     *
     * @return TransactionDeliveryInfoModel
     *
     * @see DeliveryErrorTypeEnum
     */
    public function setDeliveryErrorType(
        $DeliveryErrorType
    )
    {
        $this->DeliveryErrorType = $DeliveryErrorType;
        return $this;
    }

    /**
     * Product: QBO
     * Time of Delivery
     *
     * @return \DateTime
     */
    public function getDeliveryTime()
    {
        return $this->DeliveryTime;
    }

    /**
     * Product: QBO
     * Time of Delivery
     *
     * @param \DateTime $DeliveryTime
     *
     * @return TransactionDeliveryInfoModel
     */
    public function setDeliveryTime(
        $DeliveryTime
    )
    {
        $this->DeliveryTime = $DeliveryTime;
        return $this;
    }

    /**
     * Product: QBO
     * Type of the delivery. Ex: Email, Tradeshift
     *
     * @return string
     *
     * @see DeliveryTypeEnum
     */
    public function getDeliveryType()
    {
        return $this->DeliveryType;
    }

    /**
     * Product: QBO
     * Type of the delivery. Ex: Email, Tradeshift
     *
     * @param string $DeliveryType
     *
     * @return TransactionDeliveryInfoModel
     *
     * @see DeliveryTypeEnum
     */
    public function setDeliveryType(
        $DeliveryType
    )
    {
        $this->DeliveryType = $DeliveryType;
        return $this;
    }

}