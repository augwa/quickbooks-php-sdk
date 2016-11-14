<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * Provides upload/writeback activity for a given period of time. Query
 * activity using
 * StartSyncTMS OR EndSyncTMS
 *
 * Class SyncActivityModel
 * @package Augwa\QuickBooks\Model
 */
class SyncActivityModel
    extends IntuitEntityModel
{

    /**
     * @var \DateTime
     */
    private $EndSyncTMS;

    /**
     * @var string
     */
    private $EntityName;

    /**
     * @var int
     */
    private $EntityRowCount;

    /**
     * @var \DateTime
     */
    private $LatestUploadDateTime;

    /**
     * @var \DateTime
     */
    private $LatestWriteBackDateTime;

    /**
     * @var \DateTime
     */
    private $StartSyncTMS;

    /**
     * @var string
     * @see SyncTypeEnum
     */
    private $SyncType;


    /**
     * Product: QBW
     * Indicates when the data sync upload or write back completed
     * Filterable: QBW
     *
     * @return \DateTime
     */
    public function getEndSyncTMS()
    {
        return $this->EndSyncTMS;
    }

    /**
     * Product: QBW
     * Indicates when the data sync upload or write back completed
     * Filterable: QBW
     *
     * @param \DateTime $EndSyncTMS
     *
     * @return SyncActivityModel
     */
    public function setEndSyncTMS(
        $EndSyncTMS
    )
    {
        $this->EndSyncTMS = $EndSyncTMS;
        return $this;
    }

    /**
     * Product: QBW
     * Name of the entity that is part of the data sync
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->EntityName;
    }

    /**
     * Product: QBW
     * Name of the entity that is part of the data sync
     *
     * @param string $EntityName
     *
     * @return SyncActivityModel
     */
    public function setEntityName(
        $EntityName
    )
    {
        $this->EntityName = $EntityName;
        return $this;
    }

    /**
     * Product: QBW
     * Number of rows of this entity that have been uploaded or written back
     * to QB
     *
     * @return int
     */
    public function getEntityRowCount()
    {
        return $this->EntityRowCount;
    }

    /**
     * Product: QBW
     * Number of rows of this entity that have been uploaded or written back
     * to QB
     *
     * @param int $EntityRowCount
     *
     * @return SyncActivityModel
     */
    public function setEntityRowCount(
        $EntityRowCount
    )
    {
        $this->EntityRowCount = $EntityRowCount;
        return $this;
    }

    /**
     * Product:QBW
     * Indicates when the data sync upload or write back started
     *
     * @return \DateTime
     */
    public function getLatestUploadDateTime()
    {
        return $this->LatestUploadDateTime;
    }

    /**
     * Product:QBW
     * Indicates when the data sync upload or write back started
     *
     * @param \DateTime $LatestUploadDateTime
     *
     * @return SyncActivityModel
     */
    public function setLatestUploadDateTime(
        $LatestUploadDateTime
    )
    {
        $this->LatestUploadDateTime = $LatestUploadDateTime;
        return $this;
    }

    /**
     * Product: QBW
     * Indicates when the data sync upload or write back completed
     *
     * @return \DateTime
     */
    public function getLatestWriteBackDateTime()
    {
        return $this->LatestWriteBackDateTime;
    }

    /**
     * Product: QBW
     * Indicates when the data sync upload or write back completed
     *
     * @param \DateTime $LatestWriteBackDateTime
     *
     * @return SyncActivityModel
     */
    public function setLatestWriteBackDateTime(
        $LatestWriteBackDateTime
    )
    {
        $this->LatestWriteBackDateTime = $LatestWriteBackDateTime;
        return $this;
    }

    /**
     * Product: QBW
     * Indicates when the data sync upload or write back started
     * Filterable: QBW
     *
     * @return \DateTime
     */
    public function getStartSyncTMS()
    {
        return $this->StartSyncTMS;
    }

    /**
     * Product: QBW
     * Indicates when the data sync upload or write back started
     * Filterable: QBW
     *
     * @param \DateTime $StartSyncTMS
     *
     * @return SyncActivityModel
     */
    public function setStartSyncTMS(
        $StartSyncTMS
    )
    {
        $this->StartSyncTMS = $StartSyncTMS;
        return $this;
    }

    /**
     * Product: QBW
     * Can be either Upload or Write back sync type
     *
     * @return string
     *
     * @see SyncTypeEnum
     */
    public function getSyncType()
    {
        return $this->SyncType;
    }

    /**
     * Product: QBW
     * Can be either Upload or Write back sync type
     *
     * @param string $SyncType
     *
     * @return SyncActivityModel
     *
     * @see SyncTypeEnum
     */
    public function setSyncType(
        $SyncType
    )
    {
        $this->SyncType = $SyncType;
        return $this;
    }

}