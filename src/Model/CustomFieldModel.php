<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Custom field that can be added to an entity. This type is not extended
 * from IntuitEntity as CustomField can not be manipulated as independent
 * entity and will always be considered in association with another top
 * level Intuit entity.
 *
 * Class CustomFieldModel
 * @package Augwa\QuickBooks\Model
 */
class CustomFieldModel
    extends Model
{

    /**
     * @var string
     */
    private $DefinitionId;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     * @see CustomFieldTypeEnum
     */
    private $Type;


    /**
     * Product: ALL
     * Unique identifier of the CustomFieldDefinition that corresponds to
     * this CustomField.  DefinitionId is required for every CustomField.
     *
     * @return string
     */
    public function getDefinitionId()
    {
        return $this->DefinitionId;
    }

    /**
     * Product: ALL
     * Unique identifier of the CustomFieldDefinition that corresponds to
     * this CustomField.  DefinitionId is required for every CustomField.
     *
     * @param string $DefinitionId
     *
     * @return CustomFieldModel
     */
    public function setDefinitionId(
        $DefinitionId
    )
    {
        $this->DefinitionId = $DefinitionId;
        return $this;
    }

    /**
     * Product: ALL
     * Name of the custom field.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: ALL
     * Name of the custom field.
     *
     * @param string $Name
     *
     * @return CustomFieldModel
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
     * Data type of custom field.
     *
     * @return string
     *
     * @see CustomFieldTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: ALL
     * Data type of custom field.
     *
     * @param string $Type
     *
     * @return CustomFieldModel
     *
     * @see CustomFieldTypeEnum
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}