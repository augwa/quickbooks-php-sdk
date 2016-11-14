<?php

namespace Augwa\QuickBooks\Model;

/**
 * Transaction entity is the base class of all transactions
 *
 * Class EstimateModel
 * @package Augwa\QuickBooks\Model
 */
class EstimateModel
    extends SalesTransactionModel
{

    /**
     * @var string
     */
    private $AcceptedBy;

    /**
     * @var \DateTime
     */
    private $AcceptedDate;

    /**
     * @var IntuitAnyTypeModel
     */
    private $EstimateEx;

    /**
     * @var \DateTime
     */
    private $ExpirationDate;


    /**
     * Name of customer who accepted the estimate.
     * QBO only field.
     *
     * @return string
     */
    public function getAcceptedBy()
    {
        return $this->AcceptedBy;
    }

    /**
     * Name of customer who accepted the estimate.
     * QBO only field.
     *
     * @param string $AcceptedBy
     *
     * @return EstimateModel
     */
    public function setAcceptedBy(
        $AcceptedBy
    )
    {
        $this->AcceptedBy = $AcceptedBy;
        return $this;
    }

    /**
     * Date estimate was accepted.
     * QBO only field.
     *
     * @return \DateTime
     */
    public function getAcceptedDate()
    {
        return $this->AcceptedDate;
    }

    /**
     * Date estimate was accepted.
     * QBO only field.
     *
     * @param \DateTime $AcceptedDate
     *
     * @return EstimateModel
     */
    public function setAcceptedDate(
        $AcceptedDate
    )
    {
        $this->AcceptedDate = $AcceptedDate;
        return $this;
    }

    /**
     * Extension entity for Estimate
     *
     * @return IntuitAnyTypeModel
     */
    public function getEstimateEx()
    {
        return $this->EstimateEx;
    }

    /**
     * Extension entity for Estimate
     *
     * @param IntuitAnyTypeModel $EstimateEx
     *
     * @return EstimateModel
     */
    public function setEstimateEx(
        $EstimateEx
    )
    {
        $this->EstimateEx = $EstimateEx;
        return $this;
    }

    /**
     * Date by which estimate must be accepted before invalidation.
     * QBO only field.
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    /**
     * Date by which estimate must be accepted before invalidation.
     * QBO only field.
     *
     * @param \DateTime $ExpirationDate
     *
     * @return EstimateModel
     */
    public function setExpirationDate(
        $ExpirationDate
    )
    {
        $this->ExpirationDate = $ExpirationDate;
        return $this;
    }

}