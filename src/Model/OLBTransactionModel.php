<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes OLBTransactions list that are downloaded
 *
 * Class OLBTransactionModel
 * @package Augwa\QuickBooks\Model
 */
class OLBTransactionModel
    extends Model
{

    /**
     * @var \DateTime
     */
    private $OLBDownloadTime;

    /**
     * @var OLBTxnModel
     */
    private $OLBTxn;


    /**
     * Product: ALL
     * Last time OLB transactions where downloaded from the bank
     *
     * @return \DateTime
     */
    public function getOLBDownloadTime()
    {
        return $this->OLBDownloadTime;
    }

    /**
     * Product: ALL
     * Last time OLB transactions where downloaded from the bank
     *
     * @param \DateTime $OLBDownloadTime
     *
     * @return OLBTransactionModel
     */
    public function setOLBDownloadTime(
        $OLBDownloadTime
    )
    {
        $this->OLBDownloadTime = $OLBDownloadTime;
        return $this;
    }

    /**
     * List of OLB transactions
     *
     * @return OLBTxnModel
     */
    public function getOLBTxn()
    {
        return $this->OLBTxn;
    }

    /**
     * List of OLB transactions
     *
     * @param OLBTxnModel $OLBTxn
     *
     * @return OLBTransactionModel
     */
    public function setOLBTxn(
        $OLBTxn
    )
    {
        $this->OLBTxn = $OLBTxn;
        return $this;
    }

}