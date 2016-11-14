<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO  Reimburse charge object for QBO
 *
 * Class ReimburseChargeModel
 * @package Augwa\QuickBooks\Model
 */
class ReimburseChargeModel
    extends TransactionModel
{

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerRef;


    /**
     * Total amount of the reimburse charge.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Total amount of the reimburse charge.
     *
     * @param float $Amount
     *
     * @return ReimburseChargeModel
     */
    public function setAmount(
        $Amount
    )
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * Product: QBO  Customer Reference
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * Product: QBO  Customer Reference
     *
     * @param ReferenceTypeModel $CustomerRef
     *
     * @return ReimburseChargeModel
     */
    public function setCustomerRef(
        $CustomerRef
    )
    {
        $this->CustomerRef = $CustomerRef;
        return $this;
    }

}