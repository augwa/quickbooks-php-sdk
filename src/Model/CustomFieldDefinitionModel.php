<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * The definition of a custom field for an Intuit type to add additional
 * columns dynamically on a existing Intuit entities. This entity is not
 * extended from IntuitEntity so that it can be manipulated by specifying
 * the DefinitionId.
 *
 * Class CustomFieldDefinitionModel
 * @package Augwa\QuickBooks\Model
 */
class CustomFieldDefinitionModel
    extends IntuitEntityModel
{

    /**
     * @var string
     */
    private $AppId;

    /**
     * @var string
     */
    private $EntityType;

    /**
     * @var bool
     */
    private $Hidden;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var bool
     */
    private $Required;


    /**
     * Product: ALL
     * Identifier of Partner AppId that corresponds to this CustomField.
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->AppId;
    }

    /**
     * Product: ALL
     * Identifier of Partner AppId that corresponds to this CustomField.
     *
     * @param string $AppId
     *
     * @return CustomFieldDefinitionModel
     */
    public function setAppId(
        $AppId
    )
    {
        $this->AppId = $AppId;
        return $this;
    }

    /**
     * Product: ALL
     * Intuit entity type to which the CustomFieldDefinition is associated.
     * Valid values are defined in the objectNameEnumType.Required for the
     * create operation.
     * Required: ALL
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->EntityType;
    }

    /**
     * Product: ALL
     * Intuit entity type to which the CustomFieldDefinition is associated.
     * Valid values are defined in the objectNameEnumType.Required for the
     * create operation.
     * Required: ALL
     *
     * @param string $EntityType
     *
     * @return CustomFieldDefinitionModel
     */
    public function setEntityType(
        $EntityType
    )
    {
        $this->EntityType = $EntityType;
        return $this;
    }

    /**
     * Product: ALL
     * True if the custom field is Private; false if Public and can be shared
     * among different applications.
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->Hidden;
    }

    /**
     * Product: ALL
     * True if the custom field is Private; false if Public and can be shared
     * among different applications.
     *
     * @param bool $Hidden
     *
     * @return CustomFieldDefinitionModel
     */
    public function setHidden(
        $Hidden
    )
    {
        $this->Hidden = $Hidden;
        return $this;
    }

    /**
     * Product: ALL
     * Name of the CustomField entity.Required for the create operation.
     * Required: ALL
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: ALL
     * Name of the CustomField entity.Required for the create operation.
     * Required: ALL
     *
     * @param string $Name
     *
     * @return CustomFieldDefinitionModel
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
     * True if the custom field must be specified for every instance of the
     * Parent entity for which the CustomFieldDefinition is defined. Data
     * Services dpes not verify the value of that field.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->Required;
    }

    /**
     * Product: ALL
     * True if the custom field must be specified for every instance of the
     * Parent entity for which the CustomFieldDefinition is defined. Data
     * Services dpes not verify the value of that field.
     *
     * @param bool $Required
     *
     * @return CustomFieldDefinitionModel
     */
    public function setRequired(
        $Required
    )
    {
        $this->Required = $Required;
        return $this;
    }

}