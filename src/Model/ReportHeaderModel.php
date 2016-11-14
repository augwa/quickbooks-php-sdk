<?php

namespace Augwa\QuickBooks\Model;

/**
 * Specifies the Header of a Report, Time report was generated,
 * parameters corresponding to the request
 *
 * Class ReportHeaderModel
 * @package Augwa\QuickBooks\Model
 */
class ReportHeaderModel
    extends Model
{

    /**
     * @var string
     */
    private $Class;

    /**
     * @var string
     */
    private $Currency;

    /**
     * @var string
     */
    private $Customer;

    /**
     * @var string
     */
    private $DateMacro;

    /**
     * @var string
     */
    private $Department;

    /**
     * @var string
     */
    private $Employee;

    /**
     * @var string
     */
    private $EndPeriod;

    /**
     * @var string
     */
    private $Item;

    /**
     * @var NameValueModel
     */
    private $Option;

    /**
     * @var string
     * @see ReportBasisEnum
     */
    private $ReportBasis;

    /**
     * @var string
     */
    private $ReportName;

    /**
     * @var string
     */
    private $StartPeriod;

    /**
     * @var string
     */
    private $SummarizeColumnsBy;

    /**
     * @var \DateTime
     */
    private $Time;

    /**
     * @var string
     */
    private $Vendor;


    /**
     * Specifies the class id (comma separeted) for which the report is run
     * this is just the  id, not a reference to a class object
     *
     * @return string
     */
    public function getClass()
    {
        return $this->Class;
    }

    /**
     * Specifies the class id (comma separeted) for which the report is run
     * this is just the  id, not a reference to a class object
     *
     * @param string $Class
     *
     * @return ReportHeaderModel
     */
    public function setClass(
        $Class
    )
    {
        $this->Class = $Class;
        return $this;
    }

    /**
     * Specifies the currency code associated with the report, note that this
     * is one place where this is just the currency code, not a reference to
     * a currency object
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Specifies the currency code associated with the report, note that this
     * is one place where this is just the currency code, not a reference to
     * a currency object
     *
     * @param string $Currency
     *
     * @return ReportHeaderModel
     */
    public function setCurrency(
        $Currency
    )
    {
        $this->Currency = $Currency;
        return $this;
    }

    /**
     * Specifies the customer id (comma separeted) for which the report is
     * run this is just the id, not a reference to a customer object
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * Specifies the customer id (comma separeted) for which the report is
     * run this is just the id, not a reference to a customer object
     *
     * @param string $Customer
     *
     * @return ReportHeaderModel
     */
    public function setCustomer(
        $Customer
    )
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * Specifies the report name
     *
     * @return string
     */
    public function getDateMacro()
    {
        return $this->DateMacro;
    }

    /**
     * Specifies the report name
     *
     * @param string $DateMacro
     *
     * @return ReportHeaderModel
     */
    public function setDateMacro(
        $DateMacro
    )
    {
        $this->DateMacro = $DateMacro;
        return $this;
    }

    /**
     * Specifies the Department id (comma separeted) for which the report is
     * run this is just the  id, not a reference to a Department object
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * Specifies the Department id (comma separeted) for which the report is
     * run this is just the  id, not a reference to a Department object
     *
     * @param string $Department
     *
     * @return ReportHeaderModel
     */
    public function setDepartment(
        $Department
    )
    {
        $this->Department = $Department;
        return $this;
    }

    /**
     * Specifies the employee id (comma separeted) for which the report is
     * run this is just the id, not a reference to a employee object
     *
     * @return string
     */
    public function getEmployee()
    {
        return $this->Employee;
    }

    /**
     * Specifies the employee id (comma separeted) for which the report is
     * run this is just the id, not a reference to a employee object
     *
     * @param string $Employee
     *
     * @return ReportHeaderModel
     */
    public function setEmployee(
        $Employee
    )
    {
        $this->Employee = $Employee;
        return $this;
    }

    /**
     * End Period for which the report was generated
     *
     * @return string
     */
    public function getEndPeriod()
    {
        return $this->EndPeriod;
    }

    /**
     * End Period for which the report was generated
     *
     * @param string $EndPeriod
     *
     * @return ReportHeaderModel
     */
    public function setEndPeriod(
        $EndPeriod
    )
    {
        $this->EndPeriod = $EndPeriod;
        return $this;
    }

    /**
     * Specifies the product/service id (comma separeted) for which the
     * report is run this is just the id, not a reference to a
     * product/service object
     *
     * @return string
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     * Specifies the product/service id (comma separeted) for which the
     * report is run this is just the id, not a reference to a
     * product/service object
     *
     * @param string $Item
     *
     * @return ReportHeaderModel
     */
    public function setItem(
        $Item
    )
    {
        $this->Item = $Item;
        return $this;
    }

    /**
     * Describes the options used for the report
     *
     * @return NameValueModel
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Describes the options used for the report
     *
     * @param NameValueModel $Option
     *
     * @return ReportHeaderModel
     */
    public function setOption(
        $Option
    )
    {
        $this->Option = $Option;
        return $this;
    }

    /**
     * Specifies the report is cash basis or accrual basis
     *
     * @return string
     *
     * @see ReportBasisEnum
     */
    public function getReportBasis()
    {
        return $this->ReportBasis;
    }

    /**
     * Specifies the report is cash basis or accrual basis
     *
     * @param string $ReportBasis
     *
     * @return ReportHeaderModel
     *
     * @see ReportBasisEnum
     */
    public function setReportBasis(
        $ReportBasis
    )
    {
        $this->ReportBasis = $ReportBasis;
        return $this;
    }

    /**
     * Specifies the report name
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->ReportName;
    }

    /**
     * Specifies the report name
     *
     * @param string $ReportName
     *
     * @return ReportHeaderModel
     */
    public function setReportName(
        $ReportName
    )
    {
        $this->ReportName = $ReportName;
        return $this;
    }

    /**
     * Start Period for which the report was generated
     *
     * @return string
     */
    public function getStartPeriod()
    {
        return $this->StartPeriod;
    }

    /**
     * Start Period for which the report was generated
     *
     * @param string $StartPeriod
     *
     * @return ReportHeaderModel
     */
    public function setStartPeriod(
        $StartPeriod
    )
    {
        $this->StartPeriod = $StartPeriod;
        return $this;
    }

    /**
     * Summarize columns by enumeration
     *
     * @return string
     */
    public function getSummarizeColumnsBy()
    {
        return $this->SummarizeColumnsBy;
    }

    /**
     * Summarize columns by enumeration
     *
     * @param string $SummarizeColumnsBy
     *
     * @return ReportHeaderModel
     */
    public function setSummarizeColumnsBy(
        $SummarizeColumnsBy
    )
    {
        $this->SummarizeColumnsBy = $SummarizeColumnsBy;
        return $this;
    }

    /**
     * Specifies the time at which report was generated
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Specifies the time at which report was generated
     *
     * @param \DateTime $Time
     *
     * @return ReportHeaderModel
     */
    public function setTime(
        $Time
    )
    {
        $this->Time = $Time;
        return $this;
    }

    /**
     * Specifies the vendor id (comma separeted) for which the report is run
     * this is just the id, not a reference to a vendor object
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->Vendor;
    }

    /**
     * Specifies the vendor id (comma separeted) for which the report is run
     * this is just the id, not a reference to a vendor object
     *
     * @param string $Vendor
     *
     * @return ReportHeaderModel
     */
    public function setVendor(
        $Vendor
    )
    {
        $this->Vendor = $Vendor;
        return $this;
    }

}