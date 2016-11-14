<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes OLBTransactions list that are downloaded
 *
 * Class OLBTxnModel
 * @package Augwa\QuickBooks\Model
 */
class OLBTxnModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountId;

    /**
     * @var \DateTime
     */
    private $LastPostingDate;

    /**
     * @var OLBTxnDetailModel
     */
    private $OLBTxnDetail;

    /**
     * @var \DateTime
     */
    private $TxnsDownloadTime;


    /**
     * Product: ALL
     * AccountId of the transaction
     *
     * @return ReferenceTypeModel
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * Product: ALL
     * AccountId of the transaction
     *
     * @param ReferenceTypeModel $AccountId
     *
     * @return OLBTxnModel
     */
    public function setAccountId(
        $AccountId
    )
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * Product: ALL
     * Last Posting date of OLB transactions where downloaded from the bank
     *
     * @return \DateTime
     */
    public function getLastPostingDate()
    {
        return $this->LastPostingDate;
    }

    /**
     * Product: ALL
     * Last Posting date of OLB transactions where downloaded from the bank
     *
     * @param \DateTime $LastPostingDate
     *
     * @return OLBTxnModel
     */
    public function setLastPostingDate(
        $LastPostingDate
    )
    {
        $this->LastPostingDate = $LastPostingDate;
        return $this;
    }

    /**
     * Details of OLB transactions
     *
     * @return OLBTxnDetailModel
     */
    public function getOLBTxnDetail()
    {
        return $this->OLBTxnDetail;
    }

    /**
     * Details of OLB transactions
     *
     * @param OLBTxnDetailModel $OLBTxnDetail
     *
     * @return OLBTxnModel
     */
    public function setOLBTxnDetail(
        $OLBTxnDetail
    )
    {
        $this->OLBTxnDetail = $OLBTxnDetail;
        return $this;
    }

    /**
     * Product: ALL
     * Last time OLB transactions were downloaded from the bank
     *
     * @return \DateTime
     */
    public function getTxnsDownloadTime()
    {
        return $this->TxnsDownloadTime;
    }

    /**
     * Product: ALL
     * Last time OLB transactions were downloaded from the bank
     *
     * @param \DateTime $TxnsDownloadTime
     *
     * @return OLBTxnModel
     */
    public function setTxnsDownloadTime(
        $TxnsDownloadTime
    )
    {
        $this->TxnsDownloadTime = $TxnsDownloadTime;
        return $this;
    }

}