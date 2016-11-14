<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes the Party as a Vendor Role view
 *
 * Class VendorModel
 * @package Augwa\QuickBooks\Model
 */
class VendorModel
    extends NameBaseModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $APAccountRef;

    /**
     * @var string
     */
    private $AcctNum;

    /**
     * @var string
     */
    private $AltContactName;

    /**
     * @var float
     */
    private $Balance;

    /**
     * @var PhysicalAddressModel
     */
    private $BillAddr;

    /**
     * @var string
     */
    private $BusinessNumber;

    /**
     * @var string
     */
    private $ContactName;

    /**
     * @var float
     */
    private $CreditLimit;

    /**
     * @var ReferenceTypeModel
     */
    private $CurrencyRef;

    /**
     * @var string
     */
    private $Notes;

    /**
     * @var \DateTime
     */
    private $OpenBalanceDate;

    /**
     * @var PhysicalAddressModel
     */
    private $OtherAddr;

    /**
     * @var ReferenceTypeModel
     */
    private $ParentRef;

    /**
     * @var ReferenceTypeModel
     */
    private $PrefillAccountRef;

    /**
     * @var PhysicalAddressModel
     */
    private $ShipAddr;

    /**
     * @var bool
     */
    private $T4AEligible;

    /**
     * @var bool
     */
    private $T5018Eligible;

    /**
     * @var bool
     */
    private $TDSEnabled;

    /**
     * @var int
     */
    private $TDSEntityTypeId;

    /**
     * @var bool
     */
    private $TDSOverrideThreshold;

    /**
     * @var int
     */
    private $TDSSectionTypeId;

    /**
     * @var string
     */
    private $TaxCountry;

    /**
     * @var \DateTime
     */
    private $TaxIdEffectiveDate;

    /**
     * @var string
     */
    private $TaxIdentifier;

    /**
     * @var string
     */
    private $TaxReportingBasis;

    /**
     * @var ReferenceTypeModel
     */
    private $TermRef;

    /**
     * @var bool
     */
    private $Vendor1099;

    /**
     * @var IntuitAnyTypeModel
     */
    private $VendorEx;

    /**
     * @var ReferenceTypeModel
     */
    private $VendorTypeRef;


    /**
     * Product: QBO
     * The A/P account ID for the supplier. This is applicable only in FR
     * where each supplier needs to have his own AP account.
     *
     * @return ReferenceTypeModel
     */
    public function getAPAccountRef()
    {
        return $this->APAccountRef;
    }

    /**
     * Product: QBO
     * The A/P account ID for the supplier. This is applicable only in FR
     * where each supplier needs to have his own AP account.
     *
     * @param ReferenceTypeModel $APAccountRef
     *
     * @return VendorModel
     */
    public function setAPAccountRef(
        $APAccountRef
    )
    {
        $this->APAccountRef = $APAccountRef;
        return $this;
    }

    /**
     * Name or number of the account associated with this vendor.
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
     * Name or number of the account associated with this vendor.
     * Length Restriction:
     * QBO: 15
     * QBD: 1024
     *
     * @param string $AcctNum
     *
     * @return VendorModel
     */
    public function setAcctNum(
        $AcctNum
    )
    {
        $this->AcctNum = $AcctNum;
        return $this;
    }

    /**
     * Name of the Alternate contact within the vendor. Used by QBD only
     *
     * @return string
     */
    public function getAltContactName()
    {
        return $this->AltContactName;
    }

    /**
     * Name of the Alternate contact within the vendor. Used by QBD only
     *
     * @param string $AltContactName
     *
     * @return VendorModel
     */
    public function setAltContactName(
        $AltContactName
    )
    {
        $this->AltContactName = $AltContactName;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the open balance amount or the amount unpaid by the vendor.
     * For the create operation, this represents the opening balance for the
     * vendor. When returned in response to the query request it represents
     * the current open balance (unpaid amount) for that vendor.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * Product: ALL
     * Specifies the open balance amount or the amount unpaid by the vendor.
     * For the create operation, this represents the opening balance for the
     * vendor. When returned in response to the query request it represents
     * the current open balance (unpaid amount) for that vendor.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $Balance
     *
     * @return VendorModel
     */
    public function setBalance(
        $Balance
    )
    {
        $this->Balance = $Balance;
        return $this;
    }

    /**
     * Product: ALL
     * Default billing address.
     *
     * @return PhysicalAddressModel
     */
    public function getBillAddr()
    {
        return $this->BillAddr;
    }

    /**
     * Product: ALL
     * Default billing address.
     *
     * @param PhysicalAddressModel $BillAddr
     *
     * @return VendorModel
     */
    public function setBillAddr(
        $BillAddr
    )
    {
        $this->BillAddr = $BillAddr;
        return $this;
    }

    /**
     * Product: QBW.
     * Business Number of the Vendor. Applicable for CA/UK versions of
     * QuickBooks.
     *
     * @return string
     */
    public function getBusinessNumber()
    {
        return $this->BusinessNumber;
    }

    /**
     * Product: QBW.
     * Business Number of the Vendor. Applicable for CA/UK versions of
     * QuickBooks.
     *
     * @param string $BusinessNumber
     *
     * @return VendorModel
     */
    public function setBusinessNumber(
        $BusinessNumber
    )
    {
        $this->BusinessNumber = $BusinessNumber;
        return $this;
    }

    /**
     * Name of the contact within the vendor. Used by QBD only
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * Name of the contact within the vendor. Used by QBD only
     *
     * @param string $ContactName
     *
     * @return VendorModel
     */
    public function setContactName(
        $ContactName
    )
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    /**
     * Specifies the maximum amount of an unpaid vendor balance.
     *
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->CreditLimit;
    }

    /**
     * Specifies the maximum amount of an unpaid vendor balance.
     *
     * @param float $CreditLimit
     *
     * @return VendorModel
     */
    public function setCreditLimit(
        $CreditLimit
    )
    {
        $this->CreditLimit = $CreditLimit;
        return $this;
    }

    /**
     * Reference to the currency all the business transactions created for or
     * received from that vendor are created in.
     *
     * @return ReferenceTypeModel
     */
    public function getCurrencyRef()
    {
        return $this->CurrencyRef;
    }

    /**
     * Reference to the currency all the business transactions created for or
     * received from that vendor are created in.
     *
     * @param ReferenceTypeModel $CurrencyRef
     *
     * @return VendorModel
     */
    public function setCurrencyRef(
        $CurrencyRef
    )
    {
        $this->CurrencyRef = $CurrencyRef;
        return $this;
    }

    /**
     * Product: ALL
     * Free form text describing the Vendor.Max. length: 1024 characters.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * Product: ALL
     * Free form text describing the Vendor.Max. length: 1024 characters.
     *
     * @param string $Notes
     *
     * @return VendorModel
     */
    public function setNotes(
        $Notes
    )
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * Specifies the date of the Open Balance.
     * Non QB-writable.
     *
     * @return \DateTime
     */
    public function getOpenBalanceDate()
    {
        return $this->OpenBalanceDate;
    }

    /**
     * Specifies the date of the Open Balance.
     * Non QB-writable.
     *
     * @param \DateTime $OpenBalanceDate
     *
     * @return VendorModel
     */
    public function setOpenBalanceDate(
        $OpenBalanceDate
    )
    {
        $this->OpenBalanceDate = $OpenBalanceDate;
        return $this;
    }

    /**
     * Product: QBW only.
     * An address other than default billing  or shipping.
     *
     * @return PhysicalAddressModel
     */
    public function getOtherAddr()
    {
        return $this->OtherAddr;
    }

    /**
     * Product: QBW only.
     * An address other than default billing  or shipping.
     *
     * @param PhysicalAddressModel $OtherAddr
     *
     * @return VendorModel
     */
    public function setOtherAddr(
        $OtherAddr
    )
    {
        $this->OtherAddr = $OtherAddr;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * @param ReferenceTypeModel $ParentRef
     *
     * @return VendorModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

    /**
     * Product: QBW.
     * Reference to the PrefillAccount.
     *
     * @return ReferenceTypeModel
     */
    public function getPrefillAccountRef()
    {
        return $this->PrefillAccountRef;
    }

    /**
     * Product: QBW.
     * Reference to the PrefillAccount.
     *
     * @param ReferenceTypeModel $PrefillAccountRef
     *
     * @return VendorModel
     */
    public function setPrefillAccountRef(
        $PrefillAccountRef
    )
    {
        $this->PrefillAccountRef = $PrefillAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Default shipping address.
     *
     * @return PhysicalAddressModel
     */
    public function getShipAddr()
    {
        return $this->ShipAddr;
    }

    /**
     * Product: ALL
     * Default shipping address.
     *
     * @param PhysicalAddressModel $ShipAddr
     *
     * @return VendorModel
     */
    public function setShipAddr(
        $ShipAddr
    )
    {
        $this->ShipAddr = $ShipAddr;
        return $this;
    }

    /**
     * Product: QBW
     * True if vendor is T4A eligible. Applicable for CA/UK versions of
     * quickbooks.
     *
     * @return bool
     */
    public function getT4AEligible()
    {
        return $this->T4AEligible;
    }

    /**
     * Product: QBW
     * True if vendor is T4A eligible. Applicable for CA/UK versions of
     * quickbooks.
     *
     * @param bool $T4AEligible
     *
     * @return VendorModel
     */
    public function setT4AEligible(
        $T4AEligible
    )
    {
        $this->T4AEligible = $T4AEligible;
        return $this;
    }

    /**
     * Product: QBW
     * True if vendor is T5018 eligible. Applicable for CA/UK versions of
     * quickbooks.
     *
     * @return bool
     */
    public function getT5018Eligible()
    {
        return $this->T5018Eligible;
    }

    /**
     * Product: QBW
     * True if vendor is T5018 eligible. Applicable for CA/UK versions of
     * quickbooks.
     *
     * @param bool $T5018Eligible
     *
     * @return VendorModel
     */
    public function setT5018Eligible(
        $T5018Eligible
    )
    {
        $this->T5018Eligible = $T5018Eligible;
        return $this;
    }

    /**
     * Product: QBO
     * True, if TDS (Tax Deducted at Source) is enabled for this Vendor.
     * If enabled, TDS metadata needs to be passsed in VendorEx field.
     *
     * @return bool
     */
    public function getTDSEnabled()
    {
        return $this->TDSEnabled;
    }

    /**
     * Product: QBO
     * True, if TDS (Tax Deducted at Source) is enabled for this Vendor.
     * If enabled, TDS metadata needs to be passsed in VendorEx field.
     *
     * @param bool $TDSEnabled
     *
     * @return VendorModel
     */
    public function setTDSEnabled(
        $TDSEnabled
    )
    {
        $this->TDSEnabled = $TDSEnabled;
        return $this;
    }

    /**
     * Product: QBO
     * Entity Type of the Vendor.
     *
     * @return int
     */
    public function getTDSEntityTypeId()
    {
        return $this->TDSEntityTypeId;
    }

    /**
     * Product: QBO
     * Entity Type of the Vendor.
     *
     * @param int $TDSEntityTypeId
     *
     * @return VendorModel
     */
    public function setTDSEntityTypeId(
        $TDSEntityTypeId
    )
    {
        $this->TDSEntityTypeId = $TDSEntityTypeId;
        return $this;
    }

    /**
     * Product: QBO
     * True, if TDS threshold calculation should be overriden.
     *
     * @return bool
     */
    public function getTDSOverrideThreshold()
    {
        return $this->TDSOverrideThreshold;
    }

    /**
     * Product: QBO
     * True, if TDS threshold calculation should be overriden.
     *
     * @param bool $TDSOverrideThreshold
     *
     * @return VendorModel
     */
    public function setTDSOverrideThreshold(
        $TDSOverrideThreshold
    )
    {
        $this->TDSOverrideThreshold = $TDSOverrideThreshold;
        return $this;
    }

    /**
     * Product: QBO
     * Default TDS section type for the vendor to be used in transaction.
     *
     * @return int
     */
    public function getTDSSectionTypeId()
    {
        return $this->TDSSectionTypeId;
    }

    /**
     * Product: QBO
     * Default TDS section type for the vendor to be used in transaction.
     *
     * @param int $TDSSectionTypeId
     *
     * @return VendorModel
     */
    public function setTDSSectionTypeId(
        $TDSSectionTypeId
    )
    {
        $this->TDSSectionTypeId = $TDSSectionTypeId;
        return $this;
    }

    /**
     * Product: QBW.
     * Country of Vendor.
     *
     * @return string
     */
    public function getTaxCountry()
    {
        return $this->TaxCountry;
    }

    /**
     * Product: QBW.
     * Country of Vendor.
     *
     * @param string $TaxCountry
     *
     * @return VendorModel
     */
    public function setTaxCountry(
        $TaxCountry
    )
    {
        $this->TaxCountry = $TaxCountry;
        return $this;
    }

    /**
     * Product: QBO
     * Specifies the date of registeration of Supplier. Applicable for IN
     * Region and in future can be extended to other regions.
     *
     * @return \DateTime
     */
    public function getTaxIdEffectiveDate()
    {
        return $this->TaxIdEffectiveDate;
    }

    /**
     * Product: QBO
     * Specifies the date of registeration of Supplier. Applicable for IN
     * Region and in future can be extended to other regions.
     *
     * @param \DateTime $TaxIdEffectiveDate
     *
     * @return VendorModel
     */
    public function setTaxIdEffectiveDate(
        $TaxIdEffectiveDate
    )
    {
        $this->TaxIdEffectiveDate = $TaxIdEffectiveDate;
        return $this;
    }

    /**
     * Specifies the Tax ID of the Person or Organization
     *
     * @return string
     */
    public function getTaxIdentifier()
    {
        return $this->TaxIdentifier;
    }

    /**
     * Specifies the Tax ID of the Person or Organization
     *
     * @param string $TaxIdentifier
     *
     * @return VendorModel
     */
    public function setTaxIdentifier(
        $TaxIdentifier
    )
    {
        $this->TaxIdentifier = $TaxIdentifier;
        return $this;
    }

    /**
     * Product: QBO
     * The tax reporting basis for the supplier. The applicable values are
     * those exposed through the TaxReportBasisTypeEnum.  This is applicable
     * only in FR.
     *
     * @return string
     */
    public function getTaxReportingBasis()
    {
        return $this->TaxReportingBasis;
    }

    /**
     * Product: QBO
     * The tax reporting basis for the supplier. The applicable values are
     * those exposed through the TaxReportBasisTypeEnum.  This is applicable
     * only in FR.
     *
     * @param string $TaxReportingBasis
     *
     * @return VendorModel
     */
    public function setTaxReportingBasis(
        $TaxReportingBasis
    )
    {
        $this->TaxReportingBasis = $TaxReportingBasis;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getTermRef()
    {
        return $this->TermRef;
    }

    /**
     * @param ReferenceTypeModel $TermRef
     *
     * @return VendorModel
     */
    public function setTermRef(
        $TermRef
    )
    {
        $this->TermRef = $TermRef;
        return $this;
    }

    /**
     * The Vendor is an independent contractor, someone who is given a
     * 1099-MISC form at the end of the year. The "1099 Vendor" is paid with
     * regular checks, and taxes are not withhold on their behalf.
     *
     * @return bool
     */
    public function getVendor1099()
    {
        return $this->Vendor1099;
    }

    /**
     * The Vendor is an independent contractor, someone who is given a
     * 1099-MISC form at the end of the year. The "1099 Vendor" is paid with
     * regular checks, and taxes are not withhold on their behalf.
     *
     * @param bool $Vendor1099
     *
     * @return VendorModel
     */
    public function setVendor1099(
        $Vendor1099
    )
    {
        $this->Vendor1099 = $Vendor1099;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Vendor.
     *
     * @return IntuitAnyTypeModel
     */
    public function getVendorEx()
    {
        return $this->VendorEx;
    }

    /**
     * Internal use only: extension place holder for Vendor.
     *
     * @param IntuitAnyTypeModel $VendorEx
     *
     * @return VendorModel
     */
    public function setVendorEx(
        $VendorEx
    )
    {
        $this->VendorEx = $VendorEx;
        return $this;
    }

    /**
     * Product: QBW.
     * Reference to the VendorType.
     *
     * @return ReferenceTypeModel
     */
    public function getVendorTypeRef()
    {
        return $this->VendorTypeRef;
    }

    /**
     * Product: QBW.
     * Reference to the VendorType.
     *
     * @param ReferenceTypeModel $VendorTypeRef
     *
     * @return VendorModel
     */
    public function setVendorTypeRef(
        $VendorTypeRef
    )
    {
        $this->VendorTypeRef = $VendorTypeRef;
        return $this;
    }

}