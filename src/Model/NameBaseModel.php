<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Describes the base class of name entities (Customer, Employee, Vendor,
 * OtherName)
 *
 * Class NameBaseModel
 * @package Augwa\QuickBooks\Model
 */
class NameBaseModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var TelephoneNumberModel
     */
    private $AlternatePhone;

    /**
     * @var string
     */
    private $CompanyName;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultTaxCodeRef;

    /**
     * @var string
     */
    private $DisplayName;

    /**
     * @var string
     */
    private $FamilyName;

    /**
     * @var TelephoneNumberModel
     */
    private $Fax;

    /**
     * @var string
     */
    private $FullyQualifiedName;

    /**
     * @var string
     */
    private $GivenName;

    /**
     * @var string
     */
    private $IntuitId;

    /**
     * @var string
     */
    private $MiddleName;

    /**
     * @var TelephoneNumberModel
     */
    private $Mobile;

    /**
     * @var bool
     */
    private $Organization;

    /**
     * @var ContactInfoModel
     */
    private $OtherContactInfo;

    /**
     * @var EmailAddressModel
     */
    private $PrimaryEmailAddr;

    /**
     * @var TelephoneNumberModel
     */
    private $PrimaryPhone;

    /**
     * @var string
     */
    private $PrintOnCheckName;

    /**
     * @var string
     */
    private $Suffix;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $UserId;

    /**
     * @var WebSiteAddressModel
     */
    private $WebAddr;


    /**
     * Product: ALL
     * If true, this entity is currently enabled for use by QuickBooks. The
     * default value is true.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: ALL
     * If true, this entity is currently enabled for use by QuickBooks. The
     * default value is true.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return NameBaseModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: ALL
     * Alternate phone number.
     *
     * @return TelephoneNumberModel
     */
    public function getAlternatePhone()
    {
        return $this->AlternatePhone;
    }

    /**
     * Product: ALL
     * Alternate phone number.
     *
     * @param TelephoneNumberModel $AlternatePhone
     *
     * @return NameBaseModel
     */
    public function setAlternatePhone(
        $AlternatePhone
    )
    {
        $this->AlternatePhone = $AlternatePhone;
        return $this;
    }

    /**
     * Product: ALL
     * The name of the company associated with the person or organization.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Product: ALL
     * The name of the company associated with the person or organization.
     *
     * @param string $CompanyName
     *
     * @return NameBaseModel
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
     * Reference to the tax code associated with the Customer or Vendor by
     * default for sales or purchase taxes.
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultTaxCodeRef()
    {
        return $this->DefaultTaxCodeRef;
    }

    /**
     * Product: ALL
     * Reference to the tax code associated with the Customer or Vendor by
     * default for sales or purchase taxes.
     *
     * @param ReferenceTypeModel $DefaultTaxCodeRef
     *
     * @return NameBaseModel
     */
    public function setDefaultTaxCodeRef(
        $DefaultTaxCodeRef
    )
    {
        $this->DefaultTaxCodeRef = $DefaultTaxCodeRef;
        return $this;
    }

    /**
     * Product: QBO
     * The name of the person or organization as displayed. If not provided,
     * this is populated from FullName.
     * Product: QBW
     * The name of the person or organization as displayed.
     * Required: ALL
     * Filterable: QBW
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * Product: QBO
     * The name of the person or organization as displayed. If not provided,
     * this is populated from FullName.
     * Product: QBW
     * The name of the person or organization as displayed.
     * Required: ALL
     * Filterable: QBW
     *
     * @param string $DisplayName
     *
     * @return NameBaseModel
     */
    public function setDisplayName(
        $DisplayName
    )
    {
        $this->DisplayName = $DisplayName;
        return $this;
    }

    /**
     * Product: QBW
     * Family name or the last name of the person.Max. length: 25
     * characters.At least one of the name elements is required: Title,
     * GivenName, MiddleName, or FamilyName.
     * Product: QBO
     * Family name or the last name of the person.Max. length: 15
     * characters.At least one of the name elements is required: Title,
     * GivenName, MiddleName, FamilyName, or Suffix.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->FamilyName;
    }

    /**
     * Product: QBW
     * Family name or the last name of the person.Max. length: 25
     * characters.At least one of the name elements is required: Title,
     * GivenName, MiddleName, or FamilyName.
     * Product: QBO
     * Family name or the last name of the person.Max. length: 15
     * characters.At least one of the name elements is required: Title,
     * GivenName, MiddleName, FamilyName, or Suffix.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @param string $FamilyName
     *
     * @return NameBaseModel
     */
    public function setFamilyName(
        $FamilyName
    )
    {
        $this->FamilyName = $FamilyName;
        return $this;
    }

    /**
     * Product: ALL
     * Fax number.
     *
     * @return TelephoneNumberModel
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * Product: ALL
     * Fax number.
     *
     * @param TelephoneNumberModel $Fax
     *
     * @return NameBaseModel
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
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of Parent:Customer:Job:Sub-job. Limited to 5
     * levels.Max. length: 41 characters (single name) or 209 characters
     * (fully qualified name).
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->FullyQualifiedName;
    }

    /**
     * Product: ALL
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of Parent:Customer:Job:Sub-job. Limited to 5
     * levels.Max. length: 41 characters (single name) or 209 characters
     * (fully qualified name).
     *
     * @param string $FullyQualifiedName
     *
     * @return NameBaseModel
     */
    public function setFullyQualifiedName(
        $FullyQualifiedName
    )
    {
        $this->FullyQualifiedName = $FullyQualifiedName;
        return $this;
    }

    /**
     * Product: QBW
     * Given name or first name of a person.Max. length: 25 characters.At
     * least one of the name elements is required: Title, GivenName,
     * MiddleName, or FamilyName.
     * Product: QBO
     * Given name or first name of a person.Max. length: 25 characters.At
     * least one of the name elements is required: Title, GivenName,
     * MiddleName, FamilyName, or Suffix.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }

    /**
     * Product: QBW
     * Given name or first name of a person.Max. length: 25 characters.At
     * least one of the name elements is required: Title, GivenName,
     * MiddleName, or FamilyName.
     * Product: QBO
     * Given name or first name of a person.Max. length: 25 characters.At
     * least one of the name elements is required: Title, GivenName,
     * MiddleName, FamilyName, or Suffix.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @param string $GivenName
     *
     * @return NameBaseModel
     */
    public function setGivenName(
        $GivenName
    )
    {
        $this->GivenName = $GivenName;
        return $this;
    }

    /**
     * Product: QBO
     * IntuitId represents the realm id, authid or an entity id. An entity is
     * a new type of IAM identity that represents a person or a business
     * which has no Intuit authentication context
     *
     * @return string
     */
    public function getIntuitId()
    {
        return $this->IntuitId;
    }

    /**
     * Product: QBO
     * IntuitId represents the realm id, authid or an entity id. An entity is
     * a new type of IAM identity that represents a person or a business
     * which has no Intuit authentication context
     *
     * @param string $IntuitId
     *
     * @return NameBaseModel
     */
    public function setIntuitId(
        $IntuitId
    )
    {
        $this->IntuitId = $IntuitId;
        return $this;
    }

    /**
     * Product: QBW
     * Middle name of the person. The person can have zero or more middle
     * names.Max. length: 5 characters.At least one of the name elements is
     * required: Title, GivenName, MiddleName, or FamilyName.
     * Product: QBO
     * Middle name of the person. The person can have zero or more middle
     * names.Max. length: 15 characters.At least one of the name elements is
     * required: Title, GivenName, MiddleName, FamilyName, or Suffix.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * Product: QBW
     * Middle name of the person. The person can have zero or more middle
     * names.Max. length: 5 characters.At least one of the name elements is
     * required: Title, GivenName, MiddleName, or FamilyName.
     * Product: QBO
     * Middle name of the person. The person can have zero or more middle
     * names.Max. length: 15 characters.At least one of the name elements is
     * required: Title, GivenName, MiddleName, FamilyName, or Suffix.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @param string $MiddleName
     *
     * @return NameBaseModel
     */
    public function setMiddleName(
        $MiddleName
    )
    {
        $this->MiddleName = $MiddleName;
        return $this;
    }

    /**
     * Product: ALL
     * Mobile phone number.
     *
     * @return TelephoneNumberModel
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * Product: ALL
     * Mobile phone number.
     *
     * @param TelephoneNumberModel $Mobile
     *
     * @return NameBaseModel
     */
    public function setMobile(
        $Mobile
    )
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    /**
     * Product: QBW
     * True if the entity represents an organization; otherwise the entity
     * represents a person. Default is NULL or False, representing a person.
     *
     * @return bool
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    /**
     * Product: QBW
     * True if the entity represents an organization; otherwise the entity
     * represents a person. Default is NULL or False, representing a person.
     *
     * @param bool $Organization
     *
     * @return NameBaseModel
     */
    public function setOrganization(
        $Organization
    )
    {
        $this->Organization = $Organization;
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
     * @return NameBaseModel
     */
    public function setOtherContactInfo(
        $OtherContactInfo
    )
    {
        $this->OtherContactInfo = $OtherContactInfo;
        return $this;
    }

    /**
     * Product: ALL
     * Primary email address.
     *
     * @return EmailAddressModel
     */
    public function getPrimaryEmailAddr()
    {
        return $this->PrimaryEmailAddr;
    }

    /**
     * Product: ALL
     * Primary email address.
     *
     * @param EmailAddressModel $PrimaryEmailAddr
     *
     * @return NameBaseModel
     */
    public function setPrimaryEmailAddr(
        $PrimaryEmailAddr
    )
    {
        $this->PrimaryEmailAddr = $PrimaryEmailAddr;
        return $this;
    }

    /**
     * Product: ALL
     * Primary phone number.
     *
     * @return TelephoneNumberModel
     */
    public function getPrimaryPhone()
    {
        return $this->PrimaryPhone;
    }

    /**
     * Product: ALL
     * Primary phone number.
     *
     * @param TelephoneNumberModel $PrimaryPhone
     *
     * @return NameBaseModel
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
     * Name of the person or organization as printed on a check. If not
     * provided, this is populated from FullName.
     *
     * @return string
     */
    public function getPrintOnCheckName()
    {
        return $this->PrintOnCheckName;
    }

    /**
     * Product: ALL
     * Name of the person or organization as printed on a check. If not
     * provided, this is populated from FullName.
     *
     * @param string $PrintOnCheckName
     *
     * @return NameBaseModel
     */
    public function setPrintOnCheckName(
        $PrintOnCheckName
    )
    {
        $this->PrintOnCheckName = $PrintOnCheckName;
        return $this;
    }

    /**
     * Product: QBO
     * Suffix appended to the name of a person. For example, Senior, Junior,
     * etc. QBO only field.Max. length: 15 characters.At least one of the
     * name elements is required: Title, GivenName, MiddleName, FamilyName,
     * or Suffix.
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }

    /**
     * Product: QBO
     * Suffix appended to the name of a person. For example, Senior, Junior,
     * etc. QBO only field.Max. length: 15 characters.At least one of the
     * name elements is required: Title, GivenName, MiddleName, FamilyName,
     * or Suffix.
     *
     * @param string $Suffix
     *
     * @return NameBaseModel
     */
    public function setSuffix(
        $Suffix
    )
    {
        $this->Suffix = $Suffix;
        return $this;
    }

    /**
     * Product: ALL
     * QBW: Title of the person. The person can have zero or more titles.
     * QBO: Title of the person. The person can have zero or more titles.
     * InputType: ReadWrite
     * ValidRange: QBW: Min=0, Max=15
     * ValidationRules: QBW: At least one of the name elements is required:
     * Title, GivenName, MiddleName, or FamilyName.
     * ValidationRules: QBO: At least one of the name elements is required:
     * Title, GivenName, MiddleName, FamilyName, or Suffix.
     * I18n: ALL
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Product: ALL
     * QBW: Title of the person. The person can have zero or more titles.
     * QBO: Title of the person. The person can have zero or more titles.
     * InputType: ReadWrite
     * ValidRange: QBW: Min=0, Max=15
     * ValidationRules: QBW: At least one of the name elements is required:
     * Title, GivenName, MiddleName, or FamilyName.
     * ValidationRules: QBO: At least one of the name elements is required:
     * Title, GivenName, MiddleName, FamilyName, or Suffix.
     * I18n: ALL
     *
     * @param string $Title
     *
     * @return NameBaseModel
     */
    public function setTitle(
        $Title
    )
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * Product: QBW
     * The ID of the Intuit user associated with this name.  Note: this is
     * NOT the Intuit AuthID of the user.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * Product: QBW
     * The ID of the Intuit user associated with this name.  Note: this is
     * NOT the Intuit AuthID of the user.
     *
     * @param string $UserId
     *
     * @return NameBaseModel
     */
    public function setUserId(
        $UserId
    )
    {
        $this->UserId = $UserId;
        return $this;
    }

    /**
     * Product: ALL
     * Website address (URI).
     *
     * @return WebSiteAddressModel
     */
    public function getWebAddr()
    {
        return $this->WebAddr;
    }

    /**
     * Product: ALL
     * Website address (URI).
     *
     * @param WebSiteAddressModel $WebAddr
     *
     * @return NameBaseModel
     */
    public function setWebAddr(
        $WebAddr
    )
    {
        $this->WebAddr = $WebAddr;
        return $this;
    }

}