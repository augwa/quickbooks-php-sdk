<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Represents a tax agency to whom sales/purchase/VAT taxes collected are
 * paid
 *
 * Class TaxAgencyModel
 * @package Augwa\QuickBooks\Model
 */
class TaxAgencyModel
    extends VendorModel
{

    /**
     * @var \DateTime
     */
    private $LastFileDate;

    /**
     * @var string
     */
    private $ReportingPeriod;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesTaxCodeRef;

    /**
     * @var string
     */
    private $SalesTaxCountry;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesTaxReturnRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TaxAgencyExt;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxOnPurchasesAccountRef;

    /**
     * @var bool
     */
    private $TaxOnTax;

    /**
     * @var string
     */
    private $TaxRegistrationNumber;

    /**
     * @var bool
     */
    private $TaxTrackedOnPurchases;

    /**
     * @var bool
     */
    private $TaxTrackedOnSales;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxTrackedOnSalesAccountRef;


    /**
     * Product: QBO
     * This specifies the last filing date for this tax agency.
     * InputType: QBO: ReadOnly
     *
     * @return \DateTime
     */
    public function getLastFileDate()
    {
        return $this->LastFileDate;
    }

    /**
     * Product: QBO
     * This specifies the last filing date for this tax agency.
     * InputType: QBO: ReadOnly
     *
     * @param \DateTime $LastFileDate
     *
     * @return TaxAgencyModel
     */
    public function setLastFileDate(
        $LastFileDate
    )
    {
        $this->LastFileDate = $LastFileDate;
        return $this;
    }

    /**
     * We'll need an Enum for the reporting periods
     *
     * @return string
     */
    public function getReportingPeriod()
    {
        return $this->ReportingPeriod;
    }

    /**
     * We'll need an Enum for the reporting periods
     *
     * @param string $ReportingPeriod
     *
     * @return TaxAgencyModel
     */
    public function setReportingPeriod(
        $ReportingPeriod
    )
    {
        $this->ReportingPeriod = $ReportingPeriod;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getSalesTaxCodeRef()
    {
        return $this->SalesTaxCodeRef;
    }

    /**
     * @param ReferenceTypeModel $SalesTaxCodeRef
     *
     * @return TaxAgencyModel
     */
    public function setSalesTaxCodeRef(
        $SalesTaxCodeRef
    )
    {
        $this->SalesTaxCodeRef = $SalesTaxCodeRef;
        return $this;
    }

    /**
     * We'll need an Enum for the usual countries
     *
     * @return string
     */
    public function getSalesTaxCountry()
    {
        return $this->SalesTaxCountry;
    }

    /**
     * We'll need an Enum for the usual countries
     *
     * @param string $SalesTaxCountry
     *
     * @return TaxAgencyModel
     */
    public function setSalesTaxCountry(
        $SalesTaxCountry
    )
    {
        $this->SalesTaxCountry = $SalesTaxCountry;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getSalesTaxReturnRef()
    {
        return $this->SalesTaxReturnRef;
    }

    /**
     * @param ReferenceTypeModel $SalesTaxReturnRef
     *
     * @return TaxAgencyModel
     */
    public function setSalesTaxReturnRef(
        $SalesTaxReturnRef
    )
    {
        $this->SalesTaxReturnRef = $SalesTaxReturnRef;
        return $this;
    }

    /**
     * @return IntuitAnyTypeModel
     */
    public function getTaxAgencyExt()
    {
        return $this->TaxAgencyExt;
    }

    /**
     * @param IntuitAnyTypeModel $TaxAgencyExt
     *
     * @return TaxAgencyModel
     */
    public function setTaxAgencyExt(
        $TaxAgencyExt
    )
    {
        $this->TaxAgencyExt = $TaxAgencyExt;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getTaxOnPurchasesAccountRef()
    {
        return $this->TaxOnPurchasesAccountRef;
    }

    /**
     * @param ReferenceTypeModel $TaxOnPurchasesAccountRef
     *
     * @return TaxAgencyModel
     */
    public function setTaxOnPurchasesAccountRef(
        $TaxOnPurchasesAccountRef
    )
    {
        $this->TaxOnPurchasesAccountRef = $TaxOnPurchasesAccountRef;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxOnTax()
    {
        return $this->TaxOnTax;
    }

    /**
     * @param bool $TaxOnTax
     *
     * @return TaxAgencyModel
     */
    public function setTaxOnTax(
        $TaxOnTax
    )
    {
        $this->TaxOnTax = $TaxOnTax;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
        return $this->TaxRegistrationNumber;
    }

    /**
     * @param string $TaxRegistrationNumber
     *
     * @return TaxAgencyModel
     */
    public function setTaxRegistrationNumber(
        $TaxRegistrationNumber
    )
    {
        $this->TaxRegistrationNumber = $TaxRegistrationNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxTrackedOnPurchases()
    {
        return $this->TaxTrackedOnPurchases;
    }

    /**
     * @param bool $TaxTrackedOnPurchases
     *
     * @return TaxAgencyModel
     */
    public function setTaxTrackedOnPurchases(
        $TaxTrackedOnPurchases
    )
    {
        $this->TaxTrackedOnPurchases = $TaxTrackedOnPurchases;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxTrackedOnSales()
    {
        return $this->TaxTrackedOnSales;
    }

    /**
     * @param bool $TaxTrackedOnSales
     *
     * @return TaxAgencyModel
     */
    public function setTaxTrackedOnSales(
        $TaxTrackedOnSales
    )
    {
        $this->TaxTrackedOnSales = $TaxTrackedOnSales;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getTaxTrackedOnSalesAccountRef()
    {
        return $this->TaxTrackedOnSalesAccountRef;
    }

    /**
     * @param ReferenceTypeModel $TaxTrackedOnSalesAccountRef
     *
     * @return TaxAgencyModel
     */
    public function setTaxTrackedOnSalesAccountRef(
        $TaxTrackedOnSalesAccountRef
    )
    {
        $this->TaxTrackedOnSalesAccountRef = $TaxTrackedOnSalesAccountRef;
        return $this;
    }

}