<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes OLBTransaction instance - one per transaction downloaded
 *
 * Class OLBTxnDetailModel
 * @package Augwa\QuickBooks\Model
 */
class OLBTxnDetailModel
    extends Model
{

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var \DateTime
     */
    private $PostDate;

    /**
     * @var string
     */
    private $ReferenceNumber;

    /**
     * @var \DateTime
     */
    private $TxnDate;

    /**
     * @var string
     */
    private $TxnStatus;


    /**
     * Amount of the transaction
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Amount of the transaction
     *
     * @param float $Amount
     *
     * @return OLBTxnDetailModel
     */
    public function setAmount(
        $Amount
    )
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * Post date of the transaction
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->PostDate;
    }

    /**
     * Post date of the transaction
     *
     * @param \DateTime $PostDate
     *
     * @return OLBTxnDetailModel
     */
    public function setPostDate(
        $PostDate
    )
    {
        $this->PostDate = $PostDate;
        return $this;
    }

    /**
     * Reference Number of downloaded transaction
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }

    /**
     * Reference Number of downloaded transaction
     *
     * @param string $ReferenceNumber
     *
     * @return OLBTxnDetailModel
     */
    public function setReferenceNumber(
        $ReferenceNumber
    )
    {
        $this->ReferenceNumber = $ReferenceNumber;
        return $this;
    }

    /**
     * Transaction date
     *
     * @return \DateTime
     */
    public function getTxnDate()
    {
        return $this->TxnDate;
    }

    /**
     * Transaction date
     *
     * @param \DateTime $TxnDate
     *
     * @return OLBTxnDetailModel
     */
    public function setTxnDate(
        $TxnDate
    )
    {
        $this->TxnDate = $TxnDate;
        return $this;
    }

    /**
     * Olb Status of a transaction, Use OLBTransactionStausEnum
     * Approved/Pending/Deleted
     *
     * @return string
     */
    public function getTxnStatus()
    {
        return $this->TxnStatus;
    }

    /**
     * Olb Status of a transaction, Use OLBTransactionStausEnum
     * Approved/Pending/Deleted
     *
     * @param string $TxnStatus
     *
     * @return OLBTxnDetailModel
     */
    public function setTxnStatus(
        $TxnStatus
    )
    {
        $this->TxnStatus = $TxnStatus;
        return $this;
    }

}