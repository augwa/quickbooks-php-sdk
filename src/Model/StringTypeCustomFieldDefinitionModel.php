<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Provides for strong-typing of the StringType CustomField.
 *
 * Class StringTypeCustomFieldDefinitionModel
 * @package Augwa\QuickBooks\Model
 */
class StringTypeCustomFieldDefinitionModel
    extends CustomFieldDefinitionModel
{

    /**
     * @var string
     */
    private $DefaultString;

    /**
     * @var int
     */
    private $MaxLength;

    /**
     * @var string
     */
    private $RegularExpression;


    /**
     * Product: ALL
     * Default string value of the StringType CustomField.Max. length: 31
     * characters.
     *
     * @return string
     */
    public function getDefaultString()
    {
        return $this->DefaultString;
    }

    /**
     * Product: ALL
     * Default string value of the StringType CustomField.Max. length: 31
     * characters.
     *
     * @param string $DefaultString
     *
     * @return StringTypeCustomFieldDefinitionModel
     */
    public function setDefaultString(
        $DefaultString
    )
    {
        $this->DefaultString = $DefaultString;
        return $this;
    }

    /**
     * Product: ALL
     * Maximum length allowed for the value of the string when
     * creating/updating a StringType CustomField.
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->MaxLength;
    }

    /**
     * Product: ALL
     * Maximum length allowed for the value of the string when
     * creating/updating a StringType CustomField.
     *
     * @param int $MaxLength
     *
     * @return StringTypeCustomFieldDefinitionModel
     */
    public function setMaxLength(
        $MaxLength
    )
    {
        $this->MaxLength = $MaxLength;
        return $this;
    }

    /**
     * Product: ALL
     * The regular expression string used to validate the StringType
     * CustomField value.Max. length: 31 characters.
     *
     * @return string
     */
    public function getRegularExpression()
    {
        return $this->RegularExpression;
    }

    /**
     * Product: ALL
     * The regular expression string used to validate the StringType
     * CustomField value.Max. length: 31 characters.
     *
     * @param string $RegularExpression
     *
     * @return StringTypeCustomFieldDefinitionModel
     */
    public function setRegularExpression(
        $RegularExpression
    )
    {
        $this->RegularExpression = $RegularExpression;
        return $this;
    }

}