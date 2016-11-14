<?php

namespace Augwa\QuickBooks\Model;

/**
 * Provides the mapping between ListId and TxnId in
 * Desktop to the same Entity Id in QBO. These mappings are available
 * For only companies that have migrated from Desktop to QBO
 *
 * Class QbdtEntityIdMappingModel
 * @package Augwa\QuickBooks\Model
 */
class QbdtEntityIdMappingModel
    extends IntuitEntityModel
{

    /**
     * @var string
     */
    private $QbdtEntityType;

    /**
     * @var string
     */
    private $QbdtExportableId;

    /**
     * @var string
     */
    private $QboEntityId;

    /**
     * @var string
     */
    private $QboEntityType;


    /**
     * Product: QBO
     * The entity type name of the entity in QBO. Refer
     * QbdtEntityTypeEnum for all the values.
     *
     * @return string
     */
    public function getQbdtEntityType()
    {
        return $this->QbdtEntityType;
    }

    /**
     * Product: QBO
     * The entity type name of the entity in QBO. Refer
     * QbdtEntityTypeEnum for all the values.
     *
     * @param string $QbdtEntityType
     *
     * @return QbdtEntityIdMappingModel
     */
    public function setQbdtEntityType(
        $QbdtEntityType
    )
    {
        $this->QbdtEntityType = $QbdtEntityType;
        return $this;
    }

    /**
     * Product: QBO
     * The ListId or TxnId of the QB Desktop Entity. They uniquely
     * Identify the entity in QB Desktop for that company.
     *
     * @return string
     */
    public function getQbdtExportableId()
    {
        return $this->QbdtExportableId;
    }

    /**
     * Product: QBO
     * The ListId or TxnId of the QB Desktop Entity. They uniquely
     * Identify the entity in QB Desktop for that company.
     *
     * @param string $QbdtExportableId
     *
     * @return QbdtEntityIdMappingModel
     */
    public function setQbdtExportableId(
        $QbdtExportableId
    )
    {
        $this->QbdtExportableId = $QbdtExportableId;
        return $this;
    }

    /**
     * Product: QBO
     * The Id of the QBO Entity. This id is accepted by V3 APIs. They
     * Uniquely identify the entity in QBO for that company.
     *
     * @return string
     */
    public function getQboEntityId()
    {
        return $this->QboEntityId;
    }

    /**
     * Product: QBO
     * The Id of the QBO Entity. This id is accepted by V3 APIs. They
     * Uniquely identify the entity in QBO for that company.
     *
     * @param string $QboEntityId
     *
     * @return QbdtEntityIdMappingModel
     */
    public function setQboEntityId(
        $QboEntityId
    )
    {
        $this->QboEntityId = $QboEntityId;
        return $this;
    }

    /**
     * Product: QBO
     * The entity type name of the entity in QBO. Refer
     * QboEntityTypeEnum for all the values.
     *
     * @return string
     */
    public function getQboEntityType()
    {
        return $this->QboEntityType;
    }

    /**
     * Product: QBO
     * The entity type name of the entity in QBO. Refer
     * QboEntityTypeEnum for all the values.
     *
     * @param string $QboEntityType
     *
     * @return QbdtEntityIdMappingModel
     */
    public function setQboEntityType(
        $QboEntityType
    )
    {
        $this->QboEntityType = $QboEntityType;
        return $this;
    }

}