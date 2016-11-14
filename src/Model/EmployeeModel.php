<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes the Party as a Employee Role view
 *
 * Class EmployeeModel
 * @package Augwa\QuickBooks\Model
 */
class EmployeeModel
    extends NameBaseModel
{

    /**
     * @var float
     */
    private $BillRate;

    /**
     * @var bool
     */
    private $BillableTime;

    /**
     * @var \DateTime
     */
    private $BirthDate;

    /**
     * @var IntuitAnyTypeModel
     */
    private $EmployeeEx;

    /**
     * @var string
     */
    private $EmployeeNumber;

    /**
     * @var string
     */
    private $EmployeeType;

    /**
     * @var string
     */
    private $Gender;

    /**
     * @var \DateTime
     */
    private $HiredDate;

    /**
     * @var PhysicalAddressModel
     */
    private $OtherAddr;

    /**
     * @var PhysicalAddressModel
     */
    private $PrimaryAddr;

    /**
     * @var \DateTime
     */
    private $ReleasedDate;

    /**
     * @var string
     */
    private $SSN;

    /**
     * @var string
     * @see TimeEntryUsedForPaychecksEnum
     */
    private $UseTimeEntry;


    /**
     * If BillableTime is true, BillRate can be set to specify this
     * employee’s hourly billing rate. QBO only.
     * QBD Unsupported field.
     *
     * @return float
     */
    public function getBillRate()
    {
        return $this->BillRate;
    }

    /**
     * If BillableTime is true, BillRate can be set to specify this
     * employee’s hourly billing rate. QBO only.
     * QBD Unsupported field.
     *
     * @param float $BillRate
     *
     * @return EmployeeModel
     */
    public function setBillRate(
        $BillRate
    )
    {
        $this->BillRate = $BillRate;
        return $this;
    }

    /**
     * BillableTime should be true if this employee’s hours are typically
     * billed to customers. QBO only.
     * QBD Unsupported field.
     *
     * @return bool
     */
    public function getBillableTime()
    {
        return $this->BillableTime;
    }

    /**
     * BillableTime should be true if this employee’s hours are typically
     * billed to customers. QBO only.
     * QBD Unsupported field.
     *
     * @param bool $BillableTime
     *
     * @return EmployeeModel
     */
    public function setBillableTime(
        $BillableTime
    )
    {
        $this->BillableTime = $BillableTime;
        return $this;
    }

    /**
     * Employee birth date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * Employee birth date
     *
     * @param \DateTime $BirthDate
     *
     * @return EmployeeModel
     */
    public function setBirthDate(
        $BirthDate
    )
    {
        $this->BirthDate = $BirthDate;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Employee.
     *
     * @return IntuitAnyTypeModel
     */
    public function getEmployeeEx()
    {
        return $this->EmployeeEx;
    }

    /**
     * Internal use only: extension place holder for Employee.
     *
     * @param IntuitAnyTypeModel $EmployeeEx
     *
     * @return EmployeeModel
     */
    public function setEmployeeEx(
        $EmployeeEx
    )
    {
        $this->EmployeeEx = $EmployeeEx;
        return $this;
    }

    /**
     * Specifies the number of the employee (or account) in the employer's
     * directory.
     * Length Restriction:
     * QBO: 15
     * QBD: 99
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->EmployeeNumber;
    }

    /**
     * Specifies the number of the employee (or account) in the employer's
     * directory.
     * Length Restriction:
     * QBO: 15
     * QBD: 99
     *
     * @param string $EmployeeNumber
     *
     * @return EmployeeModel
     */
    public function setEmployeeNumber(
        $EmployeeNumber
    )
    {
        $this->EmployeeNumber = $EmployeeNumber;
        return $this;
    }

    /**
     * Specifies the Employee type. For QuickBooks Desktop the valid values
     * are defined in the EmployeeTypeEnum.
     *
     * @return string
     */
    public function getEmployeeType()
    {
        return $this->EmployeeType;
    }

    /**
     * Specifies the Employee type. For QuickBooks Desktop the valid values
     * are defined in the EmployeeTypeEnum.
     *
     * @param string $EmployeeType
     *
     * @return EmployeeModel
     */
    public function setEmployeeType(
        $EmployeeType
    )
    {
        $this->EmployeeType = $EmployeeType;
        return $this;
    }

    /**
     * Gender details
     *
     * @return string
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Gender details
     *
     * @param string $Gender
     *
     * @return EmployeeModel
     */
    public function setGender(
        $Gender
    )
    {
        $this->Gender = $Gender;
        return $this;
    }

    /**
     * Employee hired date
     *
     * @return \DateTime
     */
    public function getHiredDate()
    {
        return $this->HiredDate;
    }

    /**
     * Employee hired date
     *
     * @param \DateTime $HiredDate
     *
     * @return EmployeeModel
     */
    public function setHiredDate(
        $HiredDate
    )
    {
        $this->HiredDate = $HiredDate;
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
     * @return EmployeeModel
     */
    public function setOtherAddr(
        $OtherAddr
    )
    {
        $this->OtherAddr = $OtherAddr;
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
     * @return EmployeeModel
     */
    public function setPrimaryAddr(
        $PrimaryAddr
    )
    {
        $this->PrimaryAddr = $PrimaryAddr;
        return $this;
    }

    /**
     * Date at which employee was releaved from the company
     *
     * @return \DateTime
     */
    public function getReleasedDate()
    {
        return $this->ReleasedDate;
    }

    /**
     * Date at which employee was releaved from the company
     *
     * @param \DateTime $ReleasedDate
     *
     * @return EmployeeModel
     */
    public function setReleasedDate(
        $ReleasedDate
    )
    {
        $this->ReleasedDate = $ReleasedDate;
        return $this;
    }

    /**
     * Specifies the SSN of the employee.
     * Length Restriction:
     * QBO: 15
     * QBD: 1024
     *
     * @return string
     */
    public function getSSN()
    {
        return $this->SSN;
    }

    /**
     * Specifies the SSN of the employee.
     * Length Restriction:
     * QBO: 15
     * QBD: 1024
     *
     * @param string $SSN
     *
     * @return EmployeeModel
     */
    public function setSSN(
        $SSN
    )
    {
        $this->SSN = $SSN;
        return $this;
    }

    /**
     * Specifies whether the Time Entry (time sheets) should be used to
     * create paychecks for the employee.
     *
     * @return string
     *
     * @see TimeEntryUsedForPaychecksEnum
     */
    public function getUseTimeEntry()
    {
        return $this->UseTimeEntry;
    }

    /**
     * Specifies whether the Time Entry (time sheets) should be used to
     * create paychecks for the employee.
     *
     * @param string $UseTimeEntry
     *
     * @return EmployeeModel
     *
     * @see TimeEntryUsedForPaychecksEnum
     */
    public function setUseTimeEntry(
        $UseTimeEntry
    )
    {
        $this->UseTimeEntry = $UseTimeEntry;
        return $this;
    }

}