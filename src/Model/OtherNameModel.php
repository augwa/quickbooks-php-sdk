<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes the Other Name (aka Payee). QBD only
 *
 * Class OtherNameModel
 * @package Augwa\QuickBooks\Model
 */
class OtherNameModel
    extends NameBaseModel
{

    /**
     * @var string
     */
    private $AcctNum;

    /**
     * @var PhysicalAddressModel
     */
    private $OtherAddr;

    /**
     * @var IntuitAnyTypeModel
     */
    private $OtherNameEx;

    /**
     * @var PhysicalAddressModel
     */
    private $PrimaryAddr;


    /**
     * Name or number of the account associated with this other name (payee).
     * Length Restriction:
     * QBO: 15
     * QBD: 1024
     *
     * @return string
     */
    public function getAcctNum()
    {
        return $this->AcctNum;
    }

    /**
     * Name or number of the account associated with this other name (payee).
     * Length Restriction:
     * QBO: 15
     * QBD: 1024
     *
     * @param string $AcctNum
     *
     * @return OtherNameModel
     */
    public function setAcctNum(
        $AcctNum
    )
    {
        $this->AcctNum = $AcctNum;
        return $this;
    }

    /**
     * Represents other PhysicalAddress list
     *
     * @return PhysicalAddressModel
     */
    public function getOtherAddr()
    {
        return $this->OtherAddr;
    }

    /**
     * Represents other PhysicalAddress list
     *
     * @param PhysicalAddressModel $OtherAddr
     *
     * @return OtherNameModel
     */
    public function setOtherAddr(
        $OtherAddr
    )
    {
        $this->OtherAddr = $OtherAddr;
        return $this;
    }

    /**
     * Internal use only: extension place holder for OtherName.
     *
     * @return IntuitAnyTypeModel
     */
    public function getOtherNameEx()
    {
        return $this->OtherNameEx;
    }

    /**
     * Internal use only: extension place holder for OtherName.
     *
     * @param IntuitAnyTypeModel $OtherNameEx
     *
     * @return OtherNameModel
     */
    public function setOtherNameEx(
        $OtherNameEx
    )
    {
        $this->OtherNameEx = $OtherNameEx;
        return $this;
    }

    /**
     * Represents primary PhysicalAddress list
     *
     * @return PhysicalAddressModel
     */
    public function getPrimaryAddr()
    {
        return $this->PrimaryAddr;
    }

    /**
     * Represents primary PhysicalAddress list
     *
     * @param PhysicalAddressModel $PrimaryAddr
     *
     * @return OtherNameModel
     */
    public function setPrimaryAddr(
        $PrimaryAddr
    )
    {
        $this->PrimaryAddr = $PrimaryAddr;
        return $this;
    }

}