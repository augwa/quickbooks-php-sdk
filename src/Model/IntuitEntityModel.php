<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Base type of any top level Intuit Entity of small business type.
 *
 * Class IntuitEntityModel
 * @package Augwa\QuickBooks\Model
 */
class IntuitEntityModel
    extends Model
{

    /**
     * @var AttachableRefModel
     */
    private $AttachableRef;

    /**
     * @var CustomFieldModel
     */
    private $CustomField;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var ModificationMetaDataModel
     */
    private $MetaData;

    /**
     * @var string
     */
    private $SyncToken;


    /**
     * Specifies entity name of the attachment from where the attachment was
     * requested
     *
     * @return AttachableRefModel
     */
    public function getAttachableRef()
    {
        return $this->AttachableRef;
    }

    /**
     * Specifies entity name of the attachment from where the attachment was
     * requested
     *
     * @param AttachableRefModel $AttachableRef
     *
     * @return IntuitEntityModel
     */
    public function setAttachableRef(
        $AttachableRef
    )
    {
        $this->AttachableRef = $AttachableRef;
        return $this;
    }

    /**
     * Product: QBW
     * Custom field (or data extension).
     * Filterable: QBW
     *
     * @return CustomFieldModel
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * Product: QBW
     * Custom field (or data extension).
     * Filterable: QBW
     *
     * @param CustomFieldModel $CustomField
     *
     * @return IntuitEntityModel
     */
    public function setCustomField(
        $CustomField
    )
    {
        $this->CustomField = $CustomField;
        return $this;
    }

    /**
     * Product: ALL
     * Unique Identifier for an Intuit entity (object). Required for the
     * update operation.
     * Required: ALL
     * Filterable: ALL
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Product: ALL
     * Unique Identifier for an Intuit entity (object). Required for the
     * update operation.
     * Required: ALL
     * Filterable: ALL
     *
     * @param string $Id
     *
     * @return IntuitEntityModel
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
     * Descriptive information about the entity.  The MetaData values are set
     * by Data Services and are read only for all applications.
     *
     * @return ModificationMetaDataModel
     */
    public function getMetaData()
    {
        return $this->MetaData;
    }

    /**
     * Product: ALL
     * Descriptive information about the entity.  The MetaData values are set
     * by Data Services and are read only for all applications.
     *
     * @param ModificationMetaDataModel $MetaData
     *
     * @return IntuitEntityModel
     */
    public function setMetaData(
        $MetaData
    )
    {
        $this->MetaData = $MetaData;
        return $this;
    }

    /**
     * Product: ALL
     * Version number of the entity.  The SyncToken is used to lock the
     * entity for use by one application at a time. As soon as an application
     * modifies an entity, its SyncToken is incremented; another
     * application's request to modify the entity with the same SyncToken
     * will fail. Only the latest version of the entity is maintained by Data
     * Services.  An attempt to modify an entity specifying an older
     * SyncToken will fail. Required for the update operation.
     * Required: ALL
     *
     * @return string
     */
    public function getSyncToken()
    {
        return $this->SyncToken;
    }

    /**
     * Product: ALL
     * Version number of the entity.  The SyncToken is used to lock the
     * entity for use by one application at a time. As soon as an application
     * modifies an entity, its SyncToken is incremented; another
     * application's request to modify the entity with the same SyncToken
     * will fail. Only the latest version of the entity is maintained by Data
     * Services.  An attempt to modify an entity specifying an older
     * SyncToken will fail. Required for the update operation.
     * Required: ALL
     *
     * @param string $SyncToken
     *
     * @return IntuitEntityModel
     */
    public function setSyncToken(
        $SyncToken
    )
    {
        $this->SyncToken = $SyncToken;
        return $this;
    }

}