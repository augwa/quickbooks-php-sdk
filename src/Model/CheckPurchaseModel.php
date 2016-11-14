<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial Transaction information that pertains to the entire Check.
 *
 * Class CheckPurchaseModel
 * @package Augwa\QuickBooks\Model
 */
class CheckPurchaseModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;

    /**
     * @var string
     */
    private $MemoOnCheck;

    /**
     * @var PhysicalAddressModel
     */
    private $PayeeAddr;

    /**
     * @var string
     * @see PrintStatusEnum
     */
    private $PrintStatus;


    /**
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * @param ReferenceTypeModel $AccountRef
     *
     * @return CheckPurchaseModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

    /**
     * In case of check expense, MemoOnCheck represent the data written on
     * the check as message written to the Payee to physically read on the
     * check
     *
     * @return string
     */
    public function getMemoOnCheck()
    {
        return $this->MemoOnCheck;
    }

    /**
     * In case of check expense, MemoOnCheck represent the data written on
     * the check as message written to the Payee to physically read on the
     * check
     *
     * @param string $MemoOnCheck
     *
     * @return CheckPurchaseModel
     */
    public function setMemoOnCheck(
        $MemoOnCheck
    )
    {
        $this->MemoOnCheck = $MemoOnCheck;
        return $this;
    }

    /**
     * Address to which the payment should be sent.
     *
     * @return PhysicalAddressModel
     */
    public function getPayeeAddr()
    {
        return $this->PayeeAddr;
    }

    /**
     * Address to which the payment should be sent.
     *
     * @param PhysicalAddressModel $PayeeAddr
     *
     * @return CheckPurchaseModel
     */
    public function setPayeeAddr(
        $PayeeAddr
    )
    {
        $this->PayeeAddr = $PayeeAddr;
        return $this;
    }

    /**
     * ReadToPrint is a flag indicating if the Check is ready for printing
     *
     * @return string
     *
     * @see PrintStatusEnum
     */
    public function getPrintStatus()
    {
        return $this->PrintStatus;
    }

    /**
     * ReadToPrint is a flag indicating if the Check is ready for printing
     *
     * @param string $PrintStatus
     *
     * @return CheckPurchaseModel
     *
     * @see PrintStatusEnum
     */
    public function setPrintStatus(
        $PrintStatus
    )
    {
        $this->PrintStatus = $PrintStatus;
        return $this;
    }

}