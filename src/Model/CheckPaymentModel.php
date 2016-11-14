<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Check payment details for both payments to vendors and payments from
 * customers.
 *
 * Class CheckPaymentModel
 * @package Augwa\QuickBooks\Model
 */
class CheckPaymentModel
    extends Model
{

    /**
     * @var string
     */
    private $AcctNum;

    /**
     * @var string
     */
    private $BankName;

    /**
     * @var string
     */
    private $CheckNum;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CheckPaymentEx;

    /**
     * @var string
     */
    private $NameOnAcct;

    /**
     * @var string
     */
    private $Status;


    /**
     * Product: ALL
     * Checking account number, as printed on the check.
     *
     * @return string
     */
    public function getAcctNum()
    {
        return $this->AcctNum;
    }

    /**
     * Product: ALL
     * Checking account number, as printed on the check.
     *
     * @param string $AcctNum
     *
     * @return CheckPaymentModel
     */
    public function setAcctNum(
        $AcctNum
    )
    {
        $this->AcctNum = $AcctNum;
        return $this;
    }

    /**
     * Product: ALL
     * The name of the bank on which the check was drawn.
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->BankName;
    }

    /**
     * Product: ALL
     * The name of the bank on which the check was drawn.
     *
     * @param string $BankName
     *
     * @return CheckPaymentModel
     */
    public function setBankName(
        $BankName
    )
    {
        $this->BankName = $BankName;
        return $this;
    }

    /**
     * Product: ALL
     * The check number printed on the check.
     *
     * @return string
     */
    public function getCheckNum()
    {
        return $this->CheckNum;
    }

    /**
     * Product: ALL
     * The check number printed on the check.
     *
     * @param string $CheckNum
     *
     * @return CheckPaymentModel
     */
    public function setCheckNum(
        $CheckNum
    )
    {
        $this->CheckNum = $CheckNum;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for CheckPayment
     *
     * @return IntuitAnyTypeModel
     */
    public function getCheckPaymentEx()
    {
        return $this->CheckPaymentEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for CheckPayment
     *
     * @param IntuitAnyTypeModel $CheckPaymentEx
     *
     * @return CheckPaymentModel
     */
    public function setCheckPaymentEx(
        $CheckPaymentEx
    )
    {
        $this->CheckPaymentEx = $CheckPaymentEx;
        return $this;
    }

    /**
     * Product: ALL
     * Name of persons or entities holding the account, as printed on the
     * check.
     *
     * @return string
     */
    public function getNameOnAcct()
    {
        return $this->NameOnAcct;
    }

    /**
     * Product: ALL
     * Name of persons or entities holding the account, as printed on the
     * check.
     *
     * @param string $NameOnAcct
     *
     * @return CheckPaymentModel
     */
    public function setNameOnAcct(
        $NameOnAcct
    )
    {
        $this->NameOnAcct = $NameOnAcct;
        return $this;
    }

    /**
     * Product: ALL
     * Status of the check. Values provided by service/business logic.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Product: ALL
     * Status of the check. Values provided by service/business logic.
     *
     * @param string $Status
     *
     * @return CheckPaymentModel
     */
    public function setStatus(
        $Status
    )
    {
        $this->Status = $Status;
        return $this;
    }

}