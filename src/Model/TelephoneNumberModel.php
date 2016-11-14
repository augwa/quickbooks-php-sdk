<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Telephone number type definition. This entity is always manipulated in
 * the context of another parent entity like Person, Organization etc.
 *
 * Class TelephoneNumberModel
 * @package Augwa\QuickBooks\Model
 */
class TelephoneNumberModel
    extends Model
{

    /**
     * @var string
     */
    private $AreaCode;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @var bool
     */
    private $Default;

    /**
     * @var string
     */
    private $DeviceType;

    /**
     * @var string
     */
    private $ExchangeCode;

    /**
     * @var string
     */
    private $Extension;

    /**
     * @var string
     */
    private $FreeFormNumber;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var string
     */
    private $Tag;


    /**
     * Product: ALL
     * Telephone area code.
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->AreaCode;
    }

    /**
     * Product: ALL
     * Telephone area code.
     *
     * @param string $AreaCode
     *
     * @return TelephoneNumberModel
     */
    public function setAreaCode(
        $AreaCode
    )
    {
        $this->AreaCode = $AreaCode;
        return $this;
    }

    /**
     * Product: ALL
     * Telephone country code.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Product: ALL
     * Telephone country code.
     *
     * @param string $CountryCode
     *
     * @return TelephoneNumberModel
     */
    public function setCountryCode(
        $CountryCode
    )
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * Product: ALL
     * True if this is the default telephone number.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->Default;
    }

    /**
     * Product: ALL
     * True if this is the default telephone number.
     *
     * @param bool $Default
     *
     * @return TelephoneNumberModel
     */
    public function setDefault(
        $Default
    )
    {
        $this->Default = $Default;
        return $this;
    }

    /**
     * Product: ALL
     * Phone device type. Valid values are LandLine, Mobile, Fax, and Pager,
     * as defined in the TelephoneDevice.
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * Product: ALL
     * Phone device type. Valid values are LandLine, Mobile, Fax, and Pager,
     * as defined in the TelephoneDevice.
     *
     * @param string $DeviceType
     *
     * @return TelephoneNumberModel
     */
    public function setDeviceType(
        $DeviceType
    )
    {
        $this->DeviceType = $DeviceType;
        return $this;
    }

    /**
     * Product: ALL
     * Telephone exchange code.
     *
     * @return string
     */
    public function getExchangeCode()
    {
        return $this->ExchangeCode;
    }

    /**
     * Product: ALL
     * Telephone exchange code.
     *
     * @param string $ExchangeCode
     *
     * @return TelephoneNumberModel
     */
    public function setExchangeCode(
        $ExchangeCode
    )
    {
        $this->ExchangeCode = $ExchangeCode;
        return $this;
    }

    /**
     * Product: ALL
     * Telephone extension code.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * Product: ALL
     * Telephone extension code.
     *
     * @param string $Extension
     *
     * @return TelephoneNumberModel
     */
    public function setExtension(
        $Extension
    )
    {
        $this->Extension = $Extension;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the telephone number in free form.  FreeFormNumber takes
     * precedence over CountryCode, AreaCode, ExchangeCode, and Extension.Max
     * length: 21 characters.
     *
     * @return string
     */
    public function getFreeFormNumber()
    {
        return $this->FreeFormNumber;
    }

    /**
     * Product: ALL
     * Specifies the telephone number in free form.  FreeFormNumber takes
     * precedence over CountryCode, AreaCode, ExchangeCode, and Extension.Max
     * length: 21 characters.
     *
     * @param string $FreeFormNumber
     *
     * @return TelephoneNumberModel
     */
    public function setFreeFormNumber(
        $FreeFormNumber
    )
    {
        $this->FreeFormNumber = $FreeFormNumber;
        return $this;
    }

    /**
     * Product: QBW
     * Unique identifier for an Intuit entity.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Product: QBW
     * Unique identifier for an Intuit entity.
     *
     * @param string $Id
     *
     * @return TelephoneNumberModel
     */
    public function setId(
        $Id
    )
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * Product: ALL
     * Descriptive tag (or label) associated with the telephone number. Valid
     * values are Business, Fax, Home, Mobile, Pager, Primary, Secondary, and
     * Other, as defined in the TelephoneNumberLabelType.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Product: ALL
     * Descriptive tag (or label) associated with the telephone number. Valid
     * values are Business, Fax, Home, Mobile, Pager, Primary, Secondary, and
     * Other, as defined in the TelephoneNumberLabelType.
     *
     * @param string $Tag
     *
     * @return TelephoneNumberModel
     */
    public function setTag(
        $Tag
    )
    {
        $this->Tag = $Tag;
        return $this;
    }

}