<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Provides for strong-typing of the NumberType CustomField.
 *
 * Class NumberTypeCustomFieldDefinitionModel
 * @package Augwa\QuickBooks\Model
 */
class NumberTypeCustomFieldDefinitionModel
    extends CustomFieldDefinitionModel
{

    /**
     * @var float
     */
    private $DefaultValue;

    /**
     * @var float
     */
    private $MaxValue;

    /**
     * @var float
     */
    private $MinValue;


    /**
     * Product: ALL
     * Default decimal value for the NumberType CustomField.
     *
     * @return float
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }

    /**
     * Product: ALL
     * Default decimal value for the NumberType CustomField.
     *
     * @param float $DefaultValue
     *
     * @return NumberTypeCustomFieldDefinitionModel
     */
    public function setDefaultValue(
        $DefaultValue
    )
    {
        $this->DefaultValue = $DefaultValue;
        return $this;
    }

    /**
     * Product: ALL
     * Maximum decimal value allowed when the NumberType CustomField is
     * created/updated.
     *
     * @return float
     */
    public function getMaxValue()
    {
        return $this->MaxValue;
    }

    /**
     * Product: ALL
     * Maximum decimal value allowed when the NumberType CustomField is
     * created/updated.
     *
     * @param float $MaxValue
     *
     * @return NumberTypeCustomFieldDefinitionModel
     */
    public function setMaxValue(
        $MaxValue
    )
    {
        $this->MaxValue = $MaxValue;
        return $this;
    }

    /**
     * Product: ALL
     * Minimum decimal value allowed when the NumberType CustomField is
     * created/updated.
     *
     * @return float
     */
    public function getMinValue()
    {
        return $this->MinValue;
    }

    /**
     * Product: ALL
     * Minimum decimal value allowed when the NumberType CustomField is
     * created/updated.
     *
     * @param float $MinValue
     *
     * @return NumberTypeCustomFieldDefinitionModel
     */
    public function setMinValue(
        $MinValue
    )
    {
        $this->MinValue = $MinValue;
        return $this;
    }

}