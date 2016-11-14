<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Metadata for the instance of the entity. All properties are read only.
 *
 * Class ModificationMetaDataModel
 * @package Augwa\QuickBooks\Model
 */
class ModificationMetaDataModel
    extends Model
{

    /**
     * @var \DateTime
     */
    private $CreateTime;

    /**
     * @var ReferenceTypeModel
     */
    private $CreatedByRef;

    /**
     * @var \DateTime
     */
    private $LastChangedInQB;

    /**
     * @var ReferenceTypeModel
     */
    private $LastModifiedByRef;

    /**
     * @var \DateTime
     */
    private $LastUpdatedTime;

    /**
     * @var bool
     */
    private $Synchronized;


    /**
     * Product: ALL
     * Time the entity was created in the source domain (QBD or QBO). Read
     * only property.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     * Product: ALL
     * Time the entity was created in the source domain (QBD or QBO). Read
     * only property.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @param \DateTime $CreateTime
     *
     * @return ModificationMetaDataModel
     */
    public function setCreateTime(
        $CreateTime
    )
    {
        $this->CreateTime = $CreateTime;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the user who created the data. Read only property.
     *
     * @return ReferenceTypeModel
     */
    public function getCreatedByRef()
    {
        return $this->CreatedByRef;
    }

    /**
     * Product: QBW
     * Reference to the user who created the data. Read only property.
     *
     * @param ReferenceTypeModel $CreatedByRef
     *
     * @return ModificationMetaDataModel
     */
    public function setCreatedByRef(
        $CreatedByRef
    )
    {
        $this->CreatedByRef = $CreatedByRef;
        return $this;
    }

    /**
     * Product: QBW
     * Time the entity was last updated in QB. Read only property.
     *
     * @return \DateTime
     */
    public function getLastChangedInQB()
    {
        return $this->LastChangedInQB;
    }

    /**
     * Product: QBW
     * Time the entity was last updated in QB. Read only property.
     *
     * @param \DateTime $LastChangedInQB
     *
     * @return ModificationMetaDataModel
     */
    public function setLastChangedInQB(
        $LastChangedInQB
    )
    {
        $this->LastChangedInQB = $LastChangedInQB;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the user who last modified the entity. Read only
     * property.
     *
     * @return ReferenceTypeModel
     */
    public function getLastModifiedByRef()
    {
        return $this->LastModifiedByRef;
    }

    /**
     * Product: QBW
     * Reference to the user who last modified the entity. Read only
     * property.
     *
     * @param ReferenceTypeModel $LastModifiedByRef
     *
     * @return ModificationMetaDataModel
     */
    public function setLastModifiedByRef(
        $LastModifiedByRef
    )
    {
        $this->LastModifiedByRef = $LastModifiedByRef;
        return $this;
    }

    /**
     * Product: ALL
     * Time the entity was last updated in the source domain (QBD or QBO).
     * Read only property.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @return \DateTime
     */
    public function getLastUpdatedTime()
    {
        return $this->LastUpdatedTime;
    }

    /**
     * Product: ALL
     * Time the entity was last updated in the source domain (QBD or QBO).
     * Read only property.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @param \DateTime $LastUpdatedTime
     *
     * @return ModificationMetaDataModel
     */
    public function setLastUpdatedTime(
        $LastUpdatedTime
    )
    {
        $this->LastUpdatedTime = $LastUpdatedTime;
        return $this;
    }

    /**
     * Product: QBW
     * If true, the data on the cloud has been synchronized with QuickBooks
     * for Windows. If false, the data has been created or updated on the
     * cloud but has not been synchronized with QuickBooks for Windows.
     * Read-only field.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getSynchronized()
    {
        return $this->Synchronized;
    }

    /**
     * Product: QBW
     * If true, the data on the cloud has been synchronized with QuickBooks
     * for Windows. If false, the data has been created or updated on the
     * cloud but has not been synchronized with QuickBooks for Windows.
     * Read-only field.
     * Filterable: QBW
     *
     * @param bool $Synchronized
     *
     * @return ModificationMetaDataModel
     */
    public function setSynchronized(
        $Synchronized
    )
    {
        $this->Synchronized = $Synchronized;
        return $this;
    }

}