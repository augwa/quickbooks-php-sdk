<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Provides for strong-typing of the BooleanType CustomField.
 *
 * Class BooleanTypeCustomFieldDefinitionModel
 * @package Augwa\QuickBooks\Model
 */
class BooleanTypeCustomFieldDefinitionModel
    extends CustomFieldDefinitionModel
{

    /**
     * @var bool
     */
    private $DefaultValue;


    /**
     * Product: ALL
     * Default value of the BooleanType CustomField.
     *
     * @return bool
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }

    /**
     * Product: ALL
     * Default value of the BooleanType CustomField.
     *
     * @param bool $DefaultValue
     *
     * @return BooleanTypeCustomFieldDefinitionModel
     */
    public function setDefaultValue(
        $DefaultValue
    )
    {
        $this->DefaultValue = $DefaultValue;
        return $this;
    }

}