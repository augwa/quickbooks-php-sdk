<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines Preference strongly typed object with extensions
 *
 * Class PreferencesModel
 * @package Augwa\QuickBooks\Model
 */
class PreferencesModel
    extends IntuitEntityModel
{

    /**
     * @var CompanyAccountingPrefsModel
     */
    private $AccountingInfoPrefs;

    /**
     * @var AdvancedInventoryPrefsModel
     */
    private $AdvancedInventoryPrefs;

    /**
     * @var CurrencyPrefsModel
     */
    private $CurrencyPrefs;

    /**
     * @var EmailMessagesPrefsModel
     */
    private $EmailMessagesPrefs;

    /**
     * @var FinanceChargePrefsModel
     */
    private $FinanceChargesPrefs;

    /**
     * @var OtherPrefsModel
     */
    private $OtherPrefs;

    /**
     * @var PrintDocumentPrefsModel
     */
    private $PrintDocumentPrefs;

    /**
     * @var ProductAndServicesPrefsModel
     */
    private $ProductAndServicesPrefs;

    /**
     * @var ReportPrefsModel
     */
    private $ReportPrefs;

    /**
     * @var SalesFormsPrefsModel
     */
    private $SalesFormsPrefs;

    /**
     * @var TaxPrefsModel
     */
    private $TaxPrefs;

    /**
     * @var TimeTrackingPrefsModel
     */
    private $TimeTrackingPrefs;

    /**
     * @var VendorAndPurchasesPrefsModel
     */
    private $VendorAndPurchasesPrefs;


    /**
     * Accounting info Preferences
     *
     * @return CompanyAccountingPrefsModel
     */
    public function getAccountingInfoPrefs()
    {
        return $this->AccountingInfoPrefs;
    }

    /**
     * Accounting info Preferences
     *
     * @param CompanyAccountingPrefsModel $AccountingInfoPrefs
     *
     * @return PreferencesModel
     */
    public function setAccountingInfoPrefs(
        $AccountingInfoPrefs
    )
    {
        $this->AccountingInfoPrefs = $AccountingInfoPrefs;
        return $this;
    }

    /**
     * Accounting info Preferences
     *
     * @return AdvancedInventoryPrefsModel
     */
    public function getAdvancedInventoryPrefs()
    {
        return $this->AdvancedInventoryPrefs;
    }

    /**
     * Accounting info Preferences
     *
     * @param AdvancedInventoryPrefsModel $AdvancedInventoryPrefs
     *
     * @return PreferencesModel
     */
    public function setAdvancedInventoryPrefs(
        $AdvancedInventoryPrefs
    )
    {
        $this->AdvancedInventoryPrefs = $AdvancedInventoryPrefs;
        return $this;
    }

    /**
     * Currency Preferences
     *
     * @return CurrencyPrefsModel
     */
    public function getCurrencyPrefs()
    {
        return $this->CurrencyPrefs;
    }

    /**
     * Currency Preferences
     *
     * @param CurrencyPrefsModel $CurrencyPrefs
     *
     * @return PreferencesModel
     */
    public function setCurrencyPrefs(
        $CurrencyPrefs
    )
    {
        $this->CurrencyPrefs = $CurrencyPrefs;
        return $this;
    }

    /**
     * Email messages Preferences
     *
     * @return EmailMessagesPrefsModel
     */
    public function getEmailMessagesPrefs()
    {
        return $this->EmailMessagesPrefs;
    }

    /**
     * Email messages Preferences
     *
     * @param EmailMessagesPrefsModel $EmailMessagesPrefs
     *
     * @return PreferencesModel
     */
    public function setEmailMessagesPrefs(
        $EmailMessagesPrefs
    )
    {
        $this->EmailMessagesPrefs = $EmailMessagesPrefs;
        return $this;
    }

    /**
     * FinanceCharges Preferences
     *
     * @return FinanceChargePrefsModel
     */
    public function getFinanceChargesPrefs()
    {
        return $this->FinanceChargesPrefs;
    }

    /**
     * FinanceCharges Preferences
     *
     * @param FinanceChargePrefsModel $FinanceChargesPrefs
     *
     * @return PreferencesModel
     */
    public function setFinanceChargesPrefs(
        $FinanceChargesPrefs
    )
    {
        $this->FinanceChargesPrefs = $FinanceChargesPrefs;
        return $this;
    }

    /**
     * Specifies extension of Preference entity to allow extension of
     * Name-Value pair based extension at the top level
     *
     * @return OtherPrefsModel
     */
    public function getOtherPrefs()
    {
        return $this->OtherPrefs;
    }

    /**
     * Specifies extension of Preference entity to allow extension of
     * Name-Value pair based extension at the top level
     *
     * @param OtherPrefsModel $OtherPrefs
     *
     * @return PreferencesModel
     */
    public function setOtherPrefs(
        $OtherPrefs
    )
    {
        $this->OtherPrefs = $OtherPrefs;
        return $this;
    }

    /**
     * Printable document preferences
     *
     * @return PrintDocumentPrefsModel
     */
    public function getPrintDocumentPrefs()
    {
        return $this->PrintDocumentPrefs;
    }

    /**
     * Printable document preferences
     *
     * @param PrintDocumentPrefsModel $PrintDocumentPrefs
     *
     * @return PreferencesModel
     */
    public function setPrintDocumentPrefs(
        $PrintDocumentPrefs
    )
    {
        $this->PrintDocumentPrefs = $PrintDocumentPrefs;
        return $this;
    }

    /**
     * Product and Service Preferences
     *
     * @return ProductAndServicesPrefsModel
     */
    public function getProductAndServicesPrefs()
    {
        return $this->ProductAndServicesPrefs;
    }

    /**
     * Product and Service Preferences
     *
     * @param ProductAndServicesPrefsModel $ProductAndServicesPrefs
     *
     * @return PreferencesModel
     */
    public function setProductAndServicesPrefs(
        $ProductAndServicesPrefs
    )
    {
        $this->ProductAndServicesPrefs = $ProductAndServicesPrefs;
        return $this;
    }

    /**
     * Report Preferences
     *
     * @return ReportPrefsModel
     */
    public function getReportPrefs()
    {
        return $this->ReportPrefs;
    }

    /**
     * Report Preferences
     *
     * @param ReportPrefsModel $ReportPrefs
     *
     * @return PreferencesModel
     */
    public function setReportPrefs(
        $ReportPrefs
    )
    {
        $this->ReportPrefs = $ReportPrefs;
        return $this;
    }

    /**
     * Sales Form Preferences
     *
     * @return SalesFormsPrefsModel
     */
    public function getSalesFormsPrefs()
    {
        return $this->SalesFormsPrefs;
    }

    /**
     * Sales Form Preferences
     *
     * @param SalesFormsPrefsModel $SalesFormsPrefs
     *
     * @return PreferencesModel
     */
    public function setSalesFormsPrefs(
        $SalesFormsPrefs
    )
    {
        $this->SalesFormsPrefs = $SalesFormsPrefs;
        return $this;
    }

    /**
     * Tax Preferences
     *
     * @return TaxPrefsModel
     */
    public function getTaxPrefs()
    {
        return $this->TaxPrefs;
    }

    /**
     * Tax Preferences
     *
     * @param TaxPrefsModel $TaxPrefs
     *
     * @return PreferencesModel
     */
    public function setTaxPrefs(
        $TaxPrefs
    )
    {
        $this->TaxPrefs = $TaxPrefs;
        return $this;
    }

    /**
     * Vendor and purchases Preferences
     *
     * @return TimeTrackingPrefsModel
     */
    public function getTimeTrackingPrefs()
    {
        return $this->TimeTrackingPrefs;
    }

    /**
     * Vendor and purchases Preferences
     *
     * @param TimeTrackingPrefsModel $TimeTrackingPrefs
     *
     * @return PreferencesModel
     */
    public function setTimeTrackingPrefs(
        $TimeTrackingPrefs
    )
    {
        $this->TimeTrackingPrefs = $TimeTrackingPrefs;
        return $this;
    }

    /**
     * Vendor and purchases Preferences
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function getVendorAndPurchasesPrefs()
    {
        return $this->VendorAndPurchasesPrefs;
    }

    /**
     * Vendor and purchases Preferences
     *
     * @param VendorAndPurchasesPrefsModel $VendorAndPurchasesPrefs
     *
     * @return PreferencesModel
     */
    public function setVendorAndPurchasesPrefs(
        $VendorAndPurchasesPrefs
    )
    {
        $this->VendorAndPurchasesPrefs = $VendorAndPurchasesPrefs;
        return $this;
    }

}