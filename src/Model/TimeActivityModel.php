<?php

namespace Augwa\QuickBooks\Model;

/**
 * A record of time worked by a vendor or employee.
 *
 * Class TimeActivityModel
 * @package Augwa\QuickBooks\Model
 */
class TimeActivityModel
    extends IntuitEntityModel
{

    /**
     * @var string
     * @see BillableStatusEnum
     */
    private $BillableStatus;

    /**
     * @var int
     */
    private $BreakHours;

    /**
     * @var int
     */
    private $BreakMinutes;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var ReferenceTypeModel
     */
    private $CustomerRef;

    /**
     * @var ReferenceTypeModel
     */
    private $DepartmentRef;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \DateTime
     */
    private $EndTime;

    /**
     * @var float
     */
    private $HourlyRate;

    /**
     * @var int
     */
    private $Hours;

    /**
     * @var ReferenceTypeModel
     */
    private $ItemRef;

    /**
     * @var int
     */
    private $Minutes;

    /**
     * @var string
     * @see TimeActivityTypeEnum
     */
    private $NameOf;

    /**
     * @var ReferenceTypeModel
     */
    private $PayrollItemRef;

    /**
     * @var \DateTime
     */
    private $StartTime;

    /**
     * @var bool
     */
    private $Taxable;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TimeActivityEx;

    /**
     * @var string
     */
    private $TimeZone;

    /**
     * @var \DateTime
     */
    private $TxnDate;


    /**
     * Billable status of the time recorded
     *
     * @return string
     *
     * @see BillableStatusEnum
     */
    public function getBillableStatus()
    {
        return $this->BillableStatus;
    }

    /**
     * Billable status of the time recorded
     *
     * @param string $BillableStatus
     *
     * @return TimeActivityModel
     *
     * @see BillableStatusEnum
     */
    public function setBillableStatus(
        $BillableStatus
    )
    {
        $this->BillableStatus = $BillableStatus;
        return $this;
    }

    /**
     * Hours of break taken between start time and end time.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @return int
     */
    public function getBreakHours()
    {
        return $this->BreakHours;
    }

    /**
     * Hours of break taken between start time and end time.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @param int $BreakHours
     *
     * @return TimeActivityModel
     */
    public function setBreakHours(
        $BreakHours
    )
    {
        $this->BreakHours = $BreakHours;
        return $this;
    }

    /**
     * Minutes of break taken between start time and end time. Valid values
     * are 0 - 59.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @return int
     */
    public function getBreakMinutes()
    {
        return $this->BreakMinutes;
    }

    /**
     * Minutes of break taken between start time and end time. Valid values
     * are 0 - 59.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @param int $BreakMinutes
     *
     * @return TimeActivityModel
     */
    public function setBreakMinutes(
        $BreakMinutes
    )
    {
        $this->BreakMinutes = $BreakMinutes;
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
     * @return TimeActivityModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * Represents Customer (or Job)Reference
     *
     * @return ReferenceTypeModel
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * Represents Customer (or Job)Reference
     *
     * @param ReferenceTypeModel $CustomerRef
     *
     * @return TimeActivityModel
     */
    public function setCustomerRef(
        $CustomerRef
    )
    {
        $this->CustomerRef = $CustomerRef;
        return $this;
    }

    /**
     * Represents Department Reference.
     *
     * @return ReferenceTypeModel
     */
    public function getDepartmentRef()
    {
        return $this->DepartmentRef;
    }

    /**
     * Represents Department Reference.
     *
     * @param ReferenceTypeModel $DepartmentRef
     *
     * @return TimeActivityModel
     */
    public function setDepartmentRef(
        $DepartmentRef
    )
    {
        $this->DepartmentRef = $DepartmentRef;
        return $this;
    }

    /**
     * Description of work completed during time activity.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Description of work completed during time activity.
     *
     * @param string $Description
     *
     * @return TimeActivityModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Time work ended.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * Time work ended.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @param \DateTime $EndTime
     *
     * @return TimeActivityModel
     */
    public function setEndTime(
        $EndTime
    )
    {
        $this->EndTime = $EndTime;
        return $this;
    }

    /**
     * Hourly bill rate of the employee or vendor for this time activity.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @return float
     */
    public function getHourlyRate()
    {
        return $this->HourlyRate;
    }

    /**
     * Hourly bill rate of the employee or vendor for this time activity.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @param float $HourlyRate
     *
     * @return TimeActivityModel
     */
    public function setHourlyRate(
        $HourlyRate
    )
    {
        $this->HourlyRate = $HourlyRate;
        return $this;
    }

    /**
     * Hours worked.
     *
     * @return int
     */
    public function getHours()
    {
        return $this->Hours;
    }

    /**
     * Hours worked.
     *
     * @param int $Hours
     *
     * @return TimeActivityModel
     */
    public function setHours(
        $Hours
    )
    {
        $this->Hours = $Hours;
        return $this;
    }

    /**
     * 
     * Required for the create operation.
     *
     * @return ReferenceTypeModel
     */
    public function getItemRef()
    {
        return $this->ItemRef;
    }

    /**
     * 
     * Required for the create operation.
     *
     * @param ReferenceTypeModel $ItemRef
     *
     * @return TimeActivityModel
     */
    public function setItemRef(
        $ItemRef
    )
    {
        $this->ItemRef = $ItemRef;
        return $this;
    }

    /**
     * Minutes worked; valid values are 0 - 59.
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->Minutes;
    }

    /**
     * Minutes worked; valid values are 0 - 59.
     *
     * @param int $Minutes
     *
     * @return TimeActivityModel
     */
    public function setMinutes(
        $Minutes
    )
    {
        $this->Minutes = $Minutes;
        return $this;
    }

    /**
     * @return string
     *
     * @see TimeActivityTypeEnum
     */
    public function getNameOf()
    {
        return $this->NameOf;
    }

    /**
     * @param string $NameOf
     *
     * @return TimeActivityModel
     *
     * @see TimeActivityTypeEnum
     */
    public function setNameOf(
        $NameOf
    )
    {
        $this->NameOf = $NameOf;
        return $this;
    }

    /**
     * The payroll item determines how much the employee should be paid for
     * doing the work specified by the Item Service Id.
     * In order for the Time Activity data to be transferred to the employee
     * payroll data, the Employee must have the property UseTimeEntry set.
     *
     * @return ReferenceTypeModel
     */
    public function getPayrollItemRef()
    {
        return $this->PayrollItemRef;
    }

    /**
     * The payroll item determines how much the employee should be paid for
     * doing the work specified by the Item Service Id.
     * In order for the Time Activity data to be transferred to the employee
     * payroll data, the Employee must have the property UseTimeEntry set.
     *
     * @param ReferenceTypeModel $PayrollItemRef
     *
     * @return TimeActivityModel
     */
    public function setPayrollItemRef(
        $PayrollItemRef
    )
    {
        $this->PayrollItemRef = $PayrollItemRef;
        return $this;
    }

    /**
     * Time work started.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * Time work started.
     * QuickBooks Notes
     * Unsupported field.
     *
     * @param \DateTime $StartTime
     *
     * @return TimeActivityModel
     */
    public function setStartTime(
        $StartTime
    )
    {
        $this->StartTime = $StartTime;
        return $this;
    }

    /**
     * True if the time recorded is both billable and taxable.
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * True if the time recorded is both billable and taxable.
     *
     * @param bool $Taxable
     *
     * @return TimeActivityModel
     */
    public function setTaxable(
        $Taxable
    )
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * Internal use only: extension place holder for TimeActivity.
     *
     * @return IntuitAnyTypeModel
     */
    public function getTimeActivityEx()
    {
        return $this->TimeActivityEx;
    }

    /**
     * Internal use only: extension place holder for TimeActivity.
     *
     * @param IntuitAnyTypeModel $TimeActivityEx
     *
     * @return TimeActivityModel
     */
    public function setTimeActivityEx(
        $TimeActivityEx
    )
    {
        $this->TimeActivityEx = $TimeActivityEx;
        return $this;
    }

    /**
     * The timezone from where the time activity is entered, unused in QBO
     * and QBW
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * The timezone from where the time activity is entered, unused in QBO
     * and QBW
     *
     * @param string $TimeZone
     *
     * @return TimeActivityModel
     */
    public function setTimeZone(
        $TimeZone
    )
    {
        $this->TimeZone = $TimeZone;
        return $this;
    }

    /**
     * The date of the time activity.
     *
     * @return \DateTime
     */
    public function getTxnDate()
    {
        return $this->TxnDate;
    }

    /**
     * The date of the time activity.
     *
     * @param \DateTime $TxnDate
     *
     * @return TimeActivityModel
     */
    public function setTxnDate(
        $TxnDate
    )
    {
        $this->TxnDate = $TxnDate;
        return $this;
    }

}