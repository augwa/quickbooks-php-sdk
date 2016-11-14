<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class BillPaymentCheckModel
 * @package Augwa\QuickBooks\Model
 */
class BillPaymentCheckModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $BankAccountRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $BillPaymentCheckEx;

    /**
     * @var CheckPaymentModel
     */
    private $CheckDetail;

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
    public function getBankAccountRef()
    {
        return $this->BankAccountRef;
    }

    /**
     * @param ReferenceTypeModel $BankAccountRef
     *
     * @return BillPaymentCheckModel
     */
    public function setBankAccountRef(
        $BankAccountRef
    )
    {
        $this->BankAccountRef = $BankAccountRef;
        return $this;
    }

    /**
     * Internal use only: extension place holder for BillPaymentCheck.
     *
     * @return IntuitAnyTypeModel
     */
    public function getBillPaymentCheckEx()
    {
        return $this->BillPaymentCheckEx;
    }

    /**
     * Internal use only: extension place holder for BillPaymentCheck.
     *
     * @param IntuitAnyTypeModel $BillPaymentCheckEx
     *
     * @return BillPaymentCheckModel
     */
    public function setBillPaymentCheckEx(
        $BillPaymentCheckEx
    )
    {
        $this->BillPaymentCheckEx = $BillPaymentCheckEx;
        return $this;
    }

    /**
     * QuickBooks Notes
     * Unsupported field.
     *
     * @return CheckPaymentModel
     */
    public function getCheckDetail()
    {
        return $this->CheckDetail;
    }

    /**
     * QuickBooks Notes
     * Unsupported field.
     *
     * @param CheckPaymentModel $CheckDetail
     *
     * @return BillPaymentCheckModel
     */
    public function setCheckDetail(
        $CheckDetail
    )
    {
        $this->CheckDetail = $CheckDetail;
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
     * @return BillPaymentCheckModel
     */
    public function setPayeeAddr(
        $PayeeAddr
    )
    {
        $this->PayeeAddr = $PayeeAddr;
        return $this;
    }

    /**
     * @return string
     *
     * @see PrintStatusEnum
     */
    public function getPrintStatus()
    {
        return $this->PrintStatus;
    }

    /**
     * @param string $PrintStatus
     *
     * @return BillPaymentCheckModel
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