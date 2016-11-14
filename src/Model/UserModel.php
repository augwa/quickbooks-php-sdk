<?php

namespace Augwa\QuickBooks\Model;

/**
 * Represents a User with an Intuit account.  Note that based on privacy
 * restrictions, information returned may be
 * Limited depending on calling origin and/or calling user permissions
 * (ex: a user may be able to look up all of
 * Their information, but not the information regarding other users).
 *
 * Class UserModel
 * @package Augwa\QuickBooks\Model
 */
class UserModel
    extends IntuitEntityModel
{

    /**
     * @var PhysicalAddressModel
     */
    private $Addr;

    /**
     * @var string
     */
    private $DisplayName;

    /**
     * @var EmailAddressModel
     */
    private $EmailAddr;

    /**
     * @var string
     */
    private $FamilyName;

    /**
     * @var string
     */
    private $GivenName;

    /**
     * @var string
     */
    private $LocaleCountry;

    /**
     * @var string
     */
    private $LocaleLanguage;

    /**
     * @var string
     */
    private $LocalePostalCode;

    /**
     * @var string
     */
    private $LocaleTimeZone;

    /**
     * @var string
     */
    private $MiddleName;

    /**
     * @var NameValueModel
     */
    private $NameValueAttr;

    /**
     * @var TelephoneNumberModel
     */
    private $PhoneNumber;

    /**
     * @var string
     */
    private $Suffix;

    /**
     * @var string
     */
    private $Title;


    /**
     * @return PhysicalAddressModel
     */
    public function getAddr()
    {
        return $this->Addr;
    }

    /**
     * @param PhysicalAddressModel $Addr
     *
     * @return UserModel
     */
    public function setAddr(
        $Addr
    )
    {
        $this->Addr = $Addr;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     *
     * @return UserModel
     */
    public function setDisplayName(
        $DisplayName
    )
    {
        $this->DisplayName = $DisplayName;
        return $this;
    }

    /**
     * Returned only if caller passes necessary security checks to prevent
     * e-mail address harvesting
     *
     * @return EmailAddressModel
     */
    public function getEmailAddr()
    {
        return $this->EmailAddr;
    }

    /**
     * Returned only if caller passes necessary security checks to prevent
     * e-mail address harvesting
     *
     * @param EmailAddressModel $EmailAddr
     *
     * @return UserModel
     */
    public function setEmailAddr(
        $EmailAddr
    )
    {
        $this->EmailAddr = $EmailAddr;
        return $this;
    }

    /**
     * @return string
     */
    public function getFamilyName()
    {
        return $this->FamilyName;
    }

    /**
     * @param string $FamilyName
     *
     * @return UserModel
     */
    public function setFamilyName(
        $FamilyName
    )
    {
        $this->FamilyName = $FamilyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }

    /**
     * @param string $GivenName
     *
     * @return UserModel
     */
    public function setGivenName(
        $GivenName
    )
    {
        $this->GivenName = $GivenName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocaleCountry()
    {
        return $this->LocaleCountry;
    }

    /**
     * @param string $LocaleCountry
     *
     * @return UserModel
     */
    public function setLocaleCountry(
        $LocaleCountry
    )
    {
        $this->LocaleCountry = $LocaleCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocaleLanguage()
    {
        return $this->LocaleLanguage;
    }

    /**
     * @param string $LocaleLanguage
     *
     * @return UserModel
     */
    public function setLocaleLanguage(
        $LocaleLanguage
    )
    {
        $this->LocaleLanguage = $LocaleLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalePostalCode()
    {
        return $this->LocalePostalCode;
    }

    /**
     * @param string $LocalePostalCode
     *
     * @return UserModel
     */
    public function setLocalePostalCode(
        $LocalePostalCode
    )
    {
        $this->LocalePostalCode = $LocalePostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocaleTimeZone()
    {
        return $this->LocaleTimeZone;
    }

    /**
     * @param string $LocaleTimeZone
     *
     * @return UserModel
     */
    public function setLocaleTimeZone(
        $LocaleTimeZone
    )
    {
        $this->LocaleTimeZone = $LocaleTimeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     *
     * @return UserModel
     */
    public function setMiddleName(
        $MiddleName
    )
    {
        $this->MiddleName = $MiddleName;
        return $this;
    }

    /**
     * Represents a list of UserAttribute name/value pairs if the user query
     * provided names of extended attributes to include
     *
     * @return NameValueModel
     */
    public function getNameValueAttr()
    {
        return $this->NameValueAttr;
    }

    /**
     * Represents a list of UserAttribute name/value pairs if the user query
     * provided names of extended attributes to include
     *
     * @param NameValueModel $NameValueAttr
     *
     * @return UserModel
     */
    public function setNameValueAttr(
        $NameValueAttr
    )
    {
        $this->NameValueAttr = $NameValueAttr;
        return $this;
    }

    /**
     * @return TelephoneNumberModel
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param TelephoneNumberModel $PhoneNumber
     *
     * @return UserModel
     */
    public function setPhoneNumber(
        $PhoneNumber
    )
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }

    /**
     * @param string $Suffix
     *
     * @return UserModel
     */
    public function setSuffix(
        $Suffix
    )
    {
        $this->Suffix = $Suffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return UserModel
     */
    public function setTitle(
        $Title
    )
    {
        $this->Title = $Title;
        return $this;
    }

}