<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Contact type other than email, phone, address. Examples: "Chat",
 * "SkypeId", "FaceBook" etc.
 *
 * Class GenericContactTypeModel
 * @package Augwa\QuickBooks\Model
 */
class GenericContactTypeModel
    extends Model
{

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
    private $Name;

    /**
     * @var string
     */
    private $Tag;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var string
     */
    private $Value;


    /**
     * Product: ALL
     * True if this is the default contact information.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->Default;
    }

    /**
     * Product: ALL
     * True if this is the default contact information.
     *
     * @param bool $Default
     *
     * @return GenericContactTypeModel
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
     * Unique identifier for an Intuit entity.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Product: ALL
     * Unique identifier for an Intuit entity.
     *
     * @param string $Id
     *
     * @return GenericContactTypeModel
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
     * Name of the generic contact type. For example, "GoogleChat" related
     * contact info can have the Name, "ChatId".
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: ALL
     * Name of the generic contact type. For example, "GoogleChat" related
     * contact info can have the Name, "ChatId".
     *
     * @param string $Name
     *
     * @return GenericContactTypeModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Product: ALL
     * Descriptive tag associated with the contact information.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Product: ALL
     * Descriptive tag associated with the contact information.
     *
     * @param string $Tag
     *
     * @return GenericContactTypeModel
     */
    public function setTag(
        $Tag
    )
    {
        $this->Tag = $Tag;
        return $this;
    }

    /**
     * Product: ALL
     * Type of contact. For example, "GoogleChat" or "Skype".
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: ALL
     * Type of contact. For example, "GoogleChat" or "Skype".
     *
     * @param string $Type
     *
     * @return GenericContactTypeModel
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * Product: ALL
     * Value of the contact type. For example, for a "GoogleChat" contact
     * info, the Value may be the chat ID.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Product: ALL
     * Value of the contact type. For example, for a "GoogleChat" contact
     * info, the Value may be the chat ID.
     *
     * @param string $Value
     *
     * @return GenericContactTypeModel
     */
    public function setValue(
        $Value
    )
    {
        $this->Value = $Value;
        return $this;
    }

}