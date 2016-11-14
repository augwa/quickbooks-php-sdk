<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * EmailAddress type definition. This entity is always manipulated in
 * context of another parent entity like Person, Organization etc.
 *
 * Class EmailAddressModel
 * @package Augwa\QuickBooks\Model
 */
class EmailAddressModel
    extends Model
{

    /**
     * @var string
     */
    private $Address;

    /**
     * @var bool
     */
    private $Default;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var string
     */
    private $Tag;


    /**
     * Product: QBW
     * Email address.Max. length: 1023 characters.
     * Product: QBO
     * Email address.Max. length: 100 characters.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Product: QBW
     * Email address.Max. length: 1023 characters.
     * Product: QBO
     * Email address.Max. length: 100 characters.
     *
     * @param string $Address
     *
     * @return EmailAddressModel
     */
    public function setAddress(
        $Address
    )
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * Product: ALL
     * True if this is the default email address.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->Default;
    }

    /**
     * Product: ALL
     * True if this is the default email address.
     *
     * @param bool $Default
     *
     * @return EmailAddressModel
     */
    public function setDefault(
        $Default
    )
    {
        $this->Default = $Default;
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
     * @return EmailAddressModel
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
     * Descriptive tag (or label) associated with the email address. Valid
     * values are Business and Home, as defined in the EmailAddressLabelType.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Product: ALL
     * Descriptive tag (or label) associated with the email address. Valid
     * values are Business and Home, as defined in the EmailAddressLabelType.
     *
     * @param string $Tag
     *
     * @return EmailAddressModel
     */
    public function setTag(
        $Tag
    )
    {
        $this->Tag = $Tag;
        return $this;
    }

}