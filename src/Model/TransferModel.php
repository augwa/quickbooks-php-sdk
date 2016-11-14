<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial transaction representing transfer of funds between accounts.
 * Non QB-writable.
 *
 * Class TransferModel
 * @package Augwa\QuickBooks\Model
 */
class TransferModel
    extends TransactionModel
{

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var ReferenceTypeModel
     */
    private $FromAccountRef;

    /**
     * @var ReferenceTypeModel
     */
    private $ToAccountRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TransferEx;


    /**
     * Total amount of the transfer.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Total amount of the transfer.
     *
     * @param float $Amount
     *
     * @return TransferModel
     */
    public function setAmount(
        $Amount
    )
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * @param ReferenceTypeModel $ClassRef
     *
     * @return TransferModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * Must be a Balance Sheet account.
     *
     * @return ReferenceTypeModel
     */
    public function getFromAccountRef()
    {
        return $this->FromAccountRef;
    }

    /**
     * Must be a Balance Sheet account.
     *
     * @param ReferenceTypeModel $FromAccountRef
     *
     * @return TransferModel
     */
    public function setFromAccountRef(
        $FromAccountRef
    )
    {
        $this->FromAccountRef = $FromAccountRef;
        return $this;
    }

    /**
     * Must be a Balance Sheet account.
     *
     * @return ReferenceTypeModel
     */
    public function getToAccountRef()
    {
        return $this->ToAccountRef;
    }

    /**
     * Must be a Balance Sheet account.
     *
     * @param ReferenceTypeModel $ToAccountRef
     *
     * @return TransferModel
     */
    public function setToAccountRef(
        $ToAccountRef
    )
    {
        $this->ToAccountRef = $ToAccountRef;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Transfer
     *
     * @return IntuitAnyTypeModel
     */
    public function getTransferEx()
    {
        return $this->TransferEx;
    }

    /**
     * Internal use only: extension place holder for Transfer
     *
     * @param IntuitAnyTypeModel $TransferEx
     *
     * @return TransferModel
     */
    public function setTransferEx(
        $TransferEx
    )
    {
        $this->TransferEx = $TransferEx;
        return $this;
    }

}