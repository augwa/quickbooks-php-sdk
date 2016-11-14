<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes Company information
 *
 * Class CompanyInfoModel
 * @package Augwa\QuickBooks\Model
 */
class CompanyInfoModel
    extends IntuitEntityModel
{

    /**
     * @var PhysicalAddressModel
     */
    private $CompanyAddr;

    /**
     * @var EmailAddressModel
     */
    private $CompanyEmailAddr;

    /**
     * @var string
     */
    private $CompanyFileName;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CompanyInfoEx;

    /**
     * @var string
     */
    private $CompanyName;

    /**
     * @var \DateTime
     */
    private $CompanyStartDate;

    /**
     * @var WebSiteAddressModel
     */
    private $CompanyURL;

    /**
     * @var string
     */
    private $CompanyUserAdminEmail;

    /**
     * @var string
     */
    private $CompanyUserId;

    /**
     * @var string
     */
    private $Country;

    /**
     * @var PhysicalAddressModel
     */
    private $CustomerCommunicationAddr;

    /**
     * @var EmailAddressModel
     */
    private $CustomerCommunicationEmailAddr;

    /**
     * @var string
     */
    private $DefaultTimeZone;

    /**
     * @var EmailAddressModel
     */
    private $Email;

    /**
     * @var string
     */
    private $EmployerId;

    /**
     * @var TelephoneNumberModel
     */
    private $Fax;

    /**
     * @var string
     * @see MonthEnum
     */
    private $FiscalYearStartMonth;

    /**
     * @var string
     */
    private $FlavorStratum;

    /**
     * @var \DateTime
     */
    private $LastImportedTime;

    /**
     * @var \DateTime
     */
    private $LastSyncTime;

    /**
     * @var PhysicalAddressModel
     */
    private $LegalAddr;

    /**
     * @var string
     */
    private $LegalName;

    /**
     * @var TelephoneNumberModel
     */
    private $Mobile;

    /**
     * @var bool
     */
    private $MultiByteCharsSupported;

    /**
     * @var NameValueModel
     */
    private $NameValue;

    /**
     * @var PhysicalAddressModel
     */
    private $OtherAddr;

    /**
     * @var ContactInfoModel
     */
    private $OtherContactInfo;

    /**
     * @var TelephoneNumberModel
     */
    private $PrimaryPhone;

    /**
     * @var string
     */
    private $QBVersion;

    /**
     * @var bool
     */
    private $SampleFile;

    /**
     * @var PhysicalAddressModel
     */
    private $ShipAddr;

    /**
     * @var string
     */
    private $SupportedLanguages;

    /**
     * @var string
     * @see MonthEnum
     */
    private $TaxYearStartMonth;

    /**
     * @var WebSiteAddressModel
     */
    private $WebAddr;


    /**
     * Company Address as described in preference
     *
     * @return PhysicalAddressModel
     */
    public function getCompanyAddr()
    {
        return $this->CompanyAddr;
    }

    /**
     * Company Address as described in preference
     *
     * @param PhysicalAddressModel $CompanyAddr
     *
     * @return CompanyInfoModel
     */
    public function setCompanyAddr(
        $CompanyAddr
    )
    {
        $this->CompanyAddr = $CompanyAddr;
        return $this;
    }

    /**
     * CompanyEmail Address
     *
     * @return EmailAddressModel
     */
    public function getCompanyEmailAddr()
    {
        return $this->CompanyEmailAddr;
    }

    /**
     * CompanyEmail Address
     *
     * @param EmailAddressModel $CompanyEmailAddr
     *
     * @return CompanyInfoModel
     */
    public function setCompanyEmailAddr(
        $CompanyEmailAddr
    )
    {
        $this->CompanyEmailAddr = $CompanyEmailAddr;
        return $this;
    }

    /**
     * Product: QBW
     * QuickBooks company file name.Data Services max. length: 512
     * characters.
     *
     * @return string
     */
    public function getCompanyFileName()
    {
        return $this->CompanyFileName;
    }

    /**
     * Product: QBW
     * QuickBooks company file name.Data Services max. length: 512
     * characters.
     *
     * @param string $CompanyFileName
     *
     * @return CompanyInfoModel
     */
    public function setCompanyFileName(
        $CompanyFileName
    )
    {
        $this->CompanyFileName = $CompanyFileName;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for Company.
     *
     * @return IntuitAnyTypeModel
     */
    public function getCompanyInfoEx()
    {
        return $this->CompanyInfoEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for Company.
     *
     * @param IntuitAnyTypeModel $CompanyInfoEx
     *
     * @return CompanyInfoModel
     */
    public function setCompanyInfoEx(
        $CompanyInfoEx
    )
    {
        $this->CompanyInfoEx = $CompanyInfoEx;
        return $this;
    }

    /**
     * Product: ALL
     * Name of the company.Max. length: 1024 characters.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Product: ALL
     * Name of the company.Max. length: 1024 characters.
     *
     * @param string $CompanyName
     *
     * @return CompanyInfoModel
     */
    public function setCompanyName(
        $CompanyName
    )
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * Product: ALL
     * DateTime when the company file was created.
     *
     * @return \DateTime
     */
    public function getCompanyStartDate()
    {
        return $this->CompanyStartDate;
    }

    /**
     * Product: ALL
     * DateTime when the company file was created.
     *
     * @param \DateTime $CompanyStartDate
     *
     * @return CompanyInfoModel
     */
    public function setCompanyStartDate(
        $CompanyStartDate
    )
    {
        $this->CompanyStartDate = $CompanyStartDate;
        return $this;
    }

    /**
     * Company URL
     *
     * @return WebSiteAddressModel
     */
    public function getCompanyURL()
    {
        return $this->CompanyURL;
    }

    /**
     * Company URL
     *
     * @param WebSiteAddressModel $CompanyURL
     *
     * @return CompanyInfoModel
     */
    public function setCompanyURL(
        $CompanyURL
    )
    {
        $this->CompanyURL = $CompanyURL;
        return $this;
    }

    /**
     * Product: QBW
     * IAM or QBN admin users email.Data Services max. length: 100
     * characters.
     *
     * @return string
     */
    public function getCompanyUserAdminEmail()
    {
        return $this->CompanyUserAdminEmail;
    }

    /**
     * Product: QBW
     * IAM or QBN admin users email.Data Services max. length: 100
     * characters.
     *
     * @param string $CompanyUserAdminEmail
     *
     * @return CompanyInfoModel
     */
    public function setCompanyUserAdminEmail(
        $CompanyUserAdminEmail
    )
    {
        $this->CompanyUserAdminEmail = $CompanyUserAdminEmail;
        return $this;
    }

    /**
     * Product: QBW
     * IAM or QBN admin users id sequence number to group many external
     * realms for this user under his id number.Data Services max. length:
     * 512 characters.
     *
     * @return string
     */
    public function getCompanyUserId()
    {
        return $this->CompanyUserId;
    }

    /**
     * Product: QBW
     * IAM or QBN admin users id sequence number to group many external
     * realms for this user under his id number.Data Services max. length:
     * 512 characters.
     *
     * @param string $CompanyUserId
     *
     * @return CompanyInfoModel
     */
    public function setCompanyUserId(
        $CompanyUserId
    )
    {
        $this->CompanyUserId = $CompanyUserId;
        return $this;
    }

    /**
     * Product: ALL
     * Country name to which the company belongs for fiancial calculations.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Product: ALL
     * Country name to which the company belongs for fiancial calculations.
     *
     * @param string $Country
     *
     * @return CompanyInfoModel
     */
    public function setCountry(
        $Country
    )
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * Address of the company as given to th customer, sometimes the address
     * given to the customer mail address is different from Company address
     *
     * @return PhysicalAddressModel
     */
    public function getCustomerCommunicationAddr()
    {
        return $this->CustomerCommunicationAddr;
    }

    /**
     * Address of the company as given to th customer, sometimes the address
     * given to the customer mail address is different from Company address
     *
     * @param PhysicalAddressModel $CustomerCommunicationAddr
     *
     * @return CompanyInfoModel
     */
    public function setCustomerCommunicationAddr(
        $CustomerCommunicationAddr
    )
    {
        $this->CustomerCommunicationAddr = $CustomerCommunicationAddr;
        return $this;
    }

    /**
     * Email Address published to customer for communication if different
     * from CompanyEmailAddress
     *
     * @return EmailAddressModel
     */
    public function getCustomerCommunicationEmailAddr()
    {
        return $this->CustomerCommunicationEmailAddr;
    }

    /**
     * Email Address published to customer for communication if different
     * from CompanyEmailAddress
     *
     * @param EmailAddressModel $CustomerCommunicationEmailAddr
     *
     * @return CompanyInfoModel
     */
    public function setCustomerCommunicationEmailAddr(
        $CustomerCommunicationEmailAddr
    )
    {
        $this->CustomerCommunicationEmailAddr = $CustomerCommunicationEmailAddr;
        return $this;
    }

    /**
     * Default time zone for the company
     *
     * @return string
     */
    public function getDefaultTimeZone()
    {
        return $this->DefaultTimeZone;
    }

    /**
     * Default time zone for the company
     *
     * @param string $DefaultTimeZone
     *
     * @return CompanyInfoModel
     */
    public function setDefaultTimeZone(
        $DefaultTimeZone
    )
    {
        $this->DefaultTimeZone = $DefaultTimeZone;
        return $this;
    }

    /**
     * Product: ALL
     * Default email address.
     *
     * @return EmailAddressModel
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Product: ALL
     * Default email address.
     *
     * @param EmailAddressModel $Email
     *
     * @return CompanyInfoModel
     */
    public function setEmail(
        $Email
    )
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * Product: ALL
     * Employer identifier (EID).
     *
     * @return string
     */
    public function getEmployerId()
    {
        return $this->EmployerId;
    }

    /**
     * Product: ALL
     * Employer identifier (EID).
     *
     * @param string $EmployerId
     *
     * @return CompanyInfoModel
     */
    public function setEmployerId(
        $EmployerId
    )
    {
        $this->EmployerId = $EmployerId;
        return $this;
    }

    /**
     * Product: ALL
     * Default fax number.
     *
     * @return TelephoneNumberModel
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * Product: ALL
     * Default fax number.
     *
     * @param TelephoneNumberModel $Fax
     *
     * @return CompanyInfoModel
     */
    public function setFax(
        $Fax
    )
    {
        $this->Fax = $Fax;
        return $this;
    }

    /**
     * Product: ALL
     * Starting month of the company's fiscal year.
     *
     * @return string
     *
     * @see MonthEnum
     */
    public function getFiscalYearStartMonth()
    {
        return $this->FiscalYearStartMonth;
    }

    /**
     * Product: ALL
     * Starting month of the company's fiscal year.
     *
     * @param string $FiscalYearStartMonth
     *
     * @return CompanyInfoModel
     *
     * @see MonthEnum
     */
    public function setFiscalYearStartMonth(
        $FiscalYearStartMonth
    )
    {
        $this->FiscalYearStartMonth = $FiscalYearStartMonth;
        return $this;
    }

    /**
     * Product: QBW
     * QB software flavor being used on the file on the PC.Data Services max.
     * length: 512 characters.
     *
     * @return string
     */
    public function getFlavorStratum()
    {
        return $this->FlavorStratum;
    }

    /**
     * Product: QBW
     * QB software flavor being used on the file on the PC.Data Services max.
     * length: 512 characters.
     *
     * @param string $FlavorStratum
     *
     * @return CompanyInfoModel
     */
    public function setFlavorStratum(
        $FlavorStratum
    )
    {
        $this->FlavorStratum = $FlavorStratum;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies last imported time.
     *
     * @return \DateTime
     */
    public function getLastImportedTime()
    {
        return $this->LastImportedTime;
    }

    /**
     * Product: ALL
     * Specifies last imported time.
     *
     * @param \DateTime $LastImportedTime
     *
     * @return CompanyInfoModel
     */
    public function setLastImportedTime(
        $LastImportedTime
    )
    {
        $this->LastImportedTime = $LastImportedTime;
        return $this;
    }

    /**
     * Product: QBW
     * Specifies last sync time.
     *
     * @return \DateTime
     */
    public function getLastSyncTime()
    {
        return $this->LastSyncTime;
    }

    /**
     * Product: QBW
     * Specifies last sync time.
     *
     * @param \DateTime $LastSyncTime
     *
     * @return CompanyInfoModel
     */
    public function setLastSyncTime(
        $LastSyncTime
    )
    {
        $this->LastSyncTime = $LastSyncTime;
        return $this;
    }

    /**
     * Legal Address given to the government for any government communication
     *
     * @return PhysicalAddressModel
     */
    public function getLegalAddr()
    {
        return $this->LegalAddr;
    }

    /**
     * Legal Address given to the government for any government communication
     *
     * @param PhysicalAddressModel $LegalAddr
     *
     * @return CompanyInfoModel
     */
    public function setLegalAddr(
        $LegalAddr
    )
    {
        $this->LegalAddr = $LegalAddr;
        return $this;
    }

    /**
     * LegalName if different from the CompanyName
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->LegalName;
    }

    /**
     * LegalName if different from the CompanyName
     *
     * @param string $LegalName
     *
     * @return CompanyInfoModel
     */
    public function setLegalName(
        $LegalName
    )
    {
        $this->LegalName = $LegalName;
        return $this;
    }

    /**
     * Product: ALL
     * Default mobile phone number of the company.
     *
     * @return TelephoneNumberModel
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * Product: ALL
     * Default mobile phone number of the company.
     *
     * @param TelephoneNumberModel $Mobile
     *
     * @return CompanyInfoModel
     */
    public function setMobile(
        $Mobile
    )
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    /**
     * Specifies if the company support multibyte or not
     *
     * @return bool
     */
    public function getMultiByteCharsSupported()
    {
        return $this->MultiByteCharsSupported;
    }

    /**
     * Specifies if the company support multibyte or not
     *
     * @param bool $MultiByteCharsSupported
     *
     * @return CompanyInfoModel
     */
    public function setMultiByteCharsSupported(
        $MultiByteCharsSupported
    )
    {
        $this->MultiByteCharsSupported = $MultiByteCharsSupported;
        return $this;
    }

    /**
     * Any other preference not covered in base is covered as name value
     * pair, for detailed explanation look at the document
     *
     * @return NameValueModel
     */
    public function getNameValue()
    {
        return $this->NameValue;
    }

    /**
     * Any other preference not covered in base is covered as name value
     * pair, for detailed explanation look at the document
     *
     * @param NameValueModel $NameValue
     *
     * @return CompanyInfoModel
     */
    public function setNameValue(
        $NameValue
    )
    {
        $this->NameValue = $NameValue;
        return $this;
    }

    /**
     * Product: ALL
     * Other company addresses.
     *
     * @return PhysicalAddressModel
     */
    public function getOtherAddr()
    {
        return $this->OtherAddr;
    }

    /**
     * Product: ALL
     * Other company addresses.
     *
     * @param PhysicalAddressModel $OtherAddr
     *
     * @return CompanyInfoModel
     */
    public function setOtherAddr(
        $OtherAddr
    )
    {
        $this->OtherAddr = $OtherAddr;
        return $this;
    }

    /**
     * Product: QBW
     * List of ContactInfo entities of any contact info type. The ContactInfo
     * Type values are defined in the ContactTypeEnum.
     *
     * @return ContactInfoModel
     */
    public function getOtherContactInfo()
    {
        return $this->OtherContactInfo;
    }

    /**
     * Product: QBW
     * List of ContactInfo entities of any contact info type. The ContactInfo
     * Type values are defined in the ContactTypeEnum.
     *
     * @param ContactInfoModel $OtherContactInfo
     *
     * @return CompanyInfoModel
     */
    public function setOtherContactInfo(
        $OtherContactInfo
    )
    {
        $this->OtherContactInfo = $OtherContactInfo;
        return $this;
    }

    /**
     * Primary Phone number
     *
     * @return TelephoneNumberModel
     */
    public function getPrimaryPhone()
    {
        return $this->PrimaryPhone;
    }

    /**
     * Primary Phone number
     *
     * @param TelephoneNumberModel $PrimaryPhone
     *
     * @return CompanyInfoModel
     */
    public function setPrimaryPhone(
        $PrimaryPhone
    )
    {
        $this->PrimaryPhone = $PrimaryPhone;
        return $this;
    }

    /**
     * Product: ALL
     * QuickBooks company file latest version. The format reports the major
     * release in the first number, the minor release in the second number
     * (always a zero), the release update (slipstream or "R") in the third
     * number, and the build number in the final number.Max. length: 512
     * characters.
     *
     * @return string
     */
    public function getQBVersion()
    {
        return $this->QBVersion;
    }

    /**
     * Product: ALL
     * QuickBooks company file latest version. The format reports the major
     * release in the first number, the minor release in the second number
     * (always a zero), the release update (slipstream or "R") in the third
     * number, and the build number in the final number.Max. length: 512
     * characters.
     *
     * @param string $QBVersion
     *
     * @return CompanyInfoModel
     */
    public function setQBVersion(
        $QBVersion
    )
    {
        $this->QBVersion = $QBVersion;
        return $this;
    }

    /**
     * Product: QBW
     * If the QB desktop file is a sample file.
     *
     * @return bool
     */
    public function getSampleFile()
    {
        return $this->SampleFile;
    }

    /**
     * Product: QBW
     * If the QB desktop file is a sample file.
     *
     * @param bool $SampleFile
     *
     * @return CompanyInfoModel
     */
    public function setSampleFile(
        $SampleFile
    )
    {
        $this->SampleFile = $SampleFile;
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
     * @return CompanyInfoModel
     */
    public function setShipAddr(
        $ShipAddr
    )
    {
        $this->ShipAddr = $ShipAddr;
        return $this;
    }

    /**
     * Comma separated list of languages
     *
     * @return string
     */
    public function getSupportedLanguages()
    {
        return $this->SupportedLanguages;
    }

    /**
     * Comma separated list of languages
     *
     * @param string $SupportedLanguages
     *
     * @return CompanyInfoModel
     */
    public function setSupportedLanguages(
        $SupportedLanguages
    )
    {
        $this->SupportedLanguages = $SupportedLanguages;
        return $this;
    }

    /**
     * Product: ALL
     * Starting month of the company's fiscal year.
     *
     * @return string
     *
     * @see MonthEnum
     */
    public function getTaxYearStartMonth()
    {
        return $this->TaxYearStartMonth;
    }

    /**
     * Product: ALL
     * Starting month of the company's fiscal year.
     *
     * @param string $TaxYearStartMonth
     *
     * @return CompanyInfoModel
     *
     * @see MonthEnum
     */
    public function setTaxYearStartMonth(
        $TaxYearStartMonth
    )
    {
        $this->TaxYearStartMonth = $TaxYearStartMonth;
        return $this;
    }

    /**
     * Product: ALL
     * Default company web site address.
     *
     * @return WebSiteAddressModel
     */
    public function getWebAddr()
    {
        return $this->WebAddr;
    }

    /**
     * Product: ALL
     * Default company web site address.
     *
     * @param WebSiteAddressModel $WebAddr
     *
     * @return CompanyInfoModel
     */
    public function setWebAddr(
        $WebAddr
    )
    {
        $this->WebAddr = $WebAddr;
        return $this;
    }

}