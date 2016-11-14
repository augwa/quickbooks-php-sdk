<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Physical (or postal) address type, this entity is always manipulated
 * in context of another parent entity like Person, Organization etc.
 *
 * Class PhysicalAddressModel
 * @package Augwa\QuickBooks\Model
 */
class PhysicalAddressModel
    extends Model
{

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $Country;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @var string
     */
    private $CountrySubDivisionCode;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var string
     */
    private $Lat;

    /**
     * @var string
     */
    private $Line1;

    /**
     * @var string
     */
    private $Line2;

    /**
     * @var string
     */
    private $Line3;

    /**
     * @var string
     */
    private $Line4;

    /**
     * @var string
     */
    private $Line5;

    /**
     * @var string
     */
    private $Long;

    /**
     * @var string
     */
    private $Note;

    /**
     * @var string
     */
    private $PostalCode;

    /**
     * @var string
     */
    private $PostalCodeSuffix;

    /**
     * @var string
     */
    private $Tag;


    /**
     * Product: QBW
     * City name.Max. length: 31 characters.
     * Product: QBO
     * City name.Max. length: 255 characters.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Product: QBW
     * City name.Max. length: 31 characters.
     * Product: QBO
     * City name.Max. length: 255 characters.
     *
     * @param string $City
     *
     * @return PhysicalAddressModel
     */
    public function setCity(
        $City
    )
    {
        $this->City = $City;
        return $this;
    }

    /**
     * Product: QBW
     * Country name.Max. length: 31 characters.
     * Product: QBO
     * Country name.Max. length: 255 characters.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Product: QBW
     * Country name.Max. length: 31 characters.
     * Product: QBO
     * Country name.Max. length: 255 characters.
     *
     * @param string $Country
     *
     * @return PhysicalAddressModel
     */
    public function setCountry(
        $Country
    )
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * Product: ALL
     * Country code per ISO 3166.Unsupported field.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Product: ALL
     * Country code per ISO 3166.Unsupported field.
     *
     * @param string $CountryCode
     *
     * @return PhysicalAddressModel
     */
    public function setCountryCode(
        $CountryCode
    )
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * Product: QBW
     * Region within a country.  For example, state name for USA, province
     * name for Canada.Max. length: 21 characters.
     * Product: QBO
     * Globalized representation of a region. For example, state name for
     * USA, province name for Canada.Max. length: 255 characters.
     *
     * @return string
     */
    public function getCountrySubDivisionCode()
    {
        return $this->CountrySubDivisionCode;
    }

    /**
     * Product: QBW
     * Region within a country.  For example, state name for USA, province
     * name for Canada.Max. length: 21 characters.
     * Product: QBO
     * Globalized representation of a region. For example, state name for
     * USA, province name for Canada.Max. length: 255 characters.
     *
     * @param string $CountrySubDivisionCode
     *
     * @return PhysicalAddressModel
     */
    public function setCountrySubDivisionCode(
        $CountrySubDivisionCode
    )
    {
        $this->CountrySubDivisionCode = $CountrySubDivisionCode;
        return $this;
    }

    /**
     * Product: ALL
     * Unique identifier of the Intuit entity for the address, mainly used
     * for modifying the address.Note: There is no SyncToken for this entity
     * because it is always associated with the IntuitEntity type that is the
     * top level or parent entity.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Product: ALL
     * Unique identifier of the Intuit entity for the address, mainly used
     * for modifying the address.Note: There is no SyncToken for this entity
     * because it is always associated with the IntuitEntity type that is the
     * top level or parent entity.
     *
     * @param string $Id
     *
     * @return PhysicalAddressModel
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
     * Latitude coordinate of Geocode (Geospatial Entity Object
     * Code).Unsupported field.
     *
     * @return string
     */
    public function getLat()
    {
        return $this->Lat;
    }

    /**
     * Product: ALL
     * Latitude coordinate of Geocode (Geospatial Entity Object
     * Code).Unsupported field.
     *
     * @param string $Lat
     *
     * @return PhysicalAddressModel
     */
    public function setLat(
        $Lat
    )
    {
        $this->Lat = $Lat;
        return $this;
    }

    /**
     * Product: QBW
     * First line of the address.Max. length: 41 characters.
     * Product: QBO
     * First line of the address.Max. length: 500 characters.
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->Line1;
    }

    /**
     * Product: QBW
     * First line of the address.Max. length: 41 characters.
     * Product: QBO
     * First line of the address.Max. length: 500 characters.
     *
     * @param string $Line1
     *
     * @return PhysicalAddressModel
     */
    public function setLine1(
        $Line1
    )
    {
        $this->Line1 = $Line1;
        return $this;
    }

    /**
     * Product: QBW
     * Second line of the address.Max. length: 41 characters.
     * Product: QBO
     * Second line of the address.Max. length: 500 characters.
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->Line2;
    }

    /**
     * Product: QBW
     * Second line of the address.Max. length: 41 characters.
     * Product: QBO
     * Second line of the address.Max. length: 500 characters.
     *
     * @param string $Line2
     *
     * @return PhysicalAddressModel
     */
    public function setLine2(
        $Line2
    )
    {
        $this->Line2 = $Line2;
        return $this;
    }

    /**
     * Product: QBW
     * Third line of the address.Max. length: 41 characters.
     * Product: QBO
     * Third line of the address.Max. length: 500 characters.
     *
     * @return string
     */
    public function getLine3()
    {
        return $this->Line3;
    }

    /**
     * Product: QBW
     * Third line of the address.Max. length: 41 characters.
     * Product: QBO
     * Third line of the address.Max. length: 500 characters.
     *
     * @param string $Line3
     *
     * @return PhysicalAddressModel
     */
    public function setLine3(
        $Line3
    )
    {
        $this->Line3 = $Line3;
        return $this;
    }

    /**
     * Product: QBW
     * Fourth line of the address.Max. length: 41 characters.
     * Product: QBO
     * Fourth line of the address.Max. length: 500 characters.
     *
     * @return string
     */
    public function getLine4()
    {
        return $this->Line4;
    }

    /**
     * Product: QBW
     * Fourth line of the address.Max. length: 41 characters.
     * Product: QBO
     * Fourth line of the address.Max. length: 500 characters.
     *
     * @param string $Line4
     *
     * @return PhysicalAddressModel
     */
    public function setLine4(
        $Line4
    )
    {
        $this->Line4 = $Line4;
        return $this;
    }

    /**
     * Product: QBW
     * Fifth line of the address.Max. length: 41 characters.
     * Product: QBO
     * Fifth line of the address.Max. length: 500 characters.
     *
     * @return string
     */
    public function getLine5()
    {
        return $this->Line5;
    }

    /**
     * Product: QBW
     * Fifth line of the address.Max. length: 41 characters.
     * Product: QBO
     * Fifth line of the address.Max. length: 500 characters.
     *
     * @param string $Line5
     *
     * @return PhysicalAddressModel
     */
    public function setLine5(
        $Line5
    )
    {
        $this->Line5 = $Line5;
        return $this;
    }

    /**
     * Product: ALL
     * Longitude coordinate of Geocode (Geospatial Entity Object
     * Code).Unsupported field.
     *
     * @return string
     */
    public function getLong()
    {
        return $this->Long;
    }

    /**
     * Product: ALL
     * Longitude coordinate of Geocode (Geospatial Entity Object
     * Code).Unsupported field.
     *
     * @param string $Long
     *
     * @return PhysicalAddressModel
     */
    public function setLong(
        $Long
    )
    {
        $this->Long = $Long;
        return $this;
    }

    /**
     * Product: ALL
     * Note for .
     *
     * @return string
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * Product: ALL
     * Note for .
     *
     * @param string $Note
     *
     * @return PhysicalAddressModel
     */
    public function setNote(
        $Note
    )
    {
        $this->Note = $Note;
        return $this;
    }

    /**
     * Product: QBW
     * Postal code. For example, zip code for USA and Canada.Max. length: 13
     * characters.
     * Product: QBO
     * Postal code. For example, zip code for USA and Canada.Max. length: 30
     * characters.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * Product: QBW
     * Postal code. For example, zip code for USA and Canada.Max. length: 13
     * characters.
     * Product: QBO
     * Postal code. For example, zip code for USA and Canada.Max. length: 30
     * characters.
     *
     * @param string $PostalCode
     *
     * @return PhysicalAddressModel
     */
    public function setPostalCode(
        $PostalCode
    )
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * Product: ALL
     * Postal Code extension. For example, in the USA this is a 4 digit
     * extension of the zip code.
     *
     * @return string
     */
    public function getPostalCodeSuffix()
    {
        return $this->PostalCodeSuffix;
    }

    /**
     * Product: ALL
     * Postal Code extension. For example, in the USA this is a 4 digit
     * extension of the zip code.
     *
     * @param string $PostalCodeSuffix
     *
     * @return PhysicalAddressModel
     */
    public function setPostalCodeSuffix(
        $PostalCodeSuffix
    )
    {
        $this->PostalCodeSuffix = $PostalCodeSuffix;
        return $this;
    }

    /**
     * Product: ALL
     * Descriptive tag (or label) associated with the physical address. Valid
     * values are Shipping and Billing, as defined in the
     * PhysicalAddressLabelType.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Product: ALL
     * Descriptive tag (or label) associated with the physical address. Valid
     * values are Shipping and Billing, as defined in the
     * PhysicalAddressLabelType.
     *
     * @param string $Tag
     *
     * @return PhysicalAddressModel
     */
    public function setTag(
        $Tag
    )
    {
        $this->Tag = $Tag;
        return $this;
    }

}