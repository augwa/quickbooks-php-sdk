<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * Wrapper object for specifying both version of the objects
 * If there is any warnings on a object basis that is also send back
 * This object is output object only
 *
 * Class SyncErrorModel
 * @package Augwa\QuickBooks\Model
 */
class SyncErrorModel
    extends Model
{

    /**
     * @var SyncObjectModel
     */
    private $CloudVersion;

    /**
     * @var ErrorModel
     */
    private $Error;

    /**
     * @var SyncObjectModel
     */
    private $QBVersion;


    /**
     * Product: QBW
     * Indicates the cloud version of the synced object
     *
     * @return SyncObjectModel
     */
    public function getCloudVersion()
    {
        return $this->CloudVersion;
    }

    /**
     * Product: QBW
     * Indicates the cloud version of the synced object
     *
     * @param SyncObjectModel $CloudVersion
     *
     * @return SyncErrorModel
     */
    public function setCloudVersion(
        $CloudVersion
    )
    {
        $this->CloudVersion = $CloudVersion;
        return $this;
    }

    /**
     * Indicates the type of error that happened in the sync to desktop
     *
     * @return ErrorModel
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Indicates the type of error that happened in the sync to desktop
     *
     * @param ErrorModel $Error
     *
     * @return SyncErrorModel
     */
    public function setError(
        $Error
    )
    {
        $this->Error = $Error;
        return $this;
    }

    /**
     * Product: QBW
     * Indicates the QB version of the synced object
     *
     * @return SyncObjectModel
     */
    public function getQBVersion()
    {
        return $this->QBVersion;
    }

    /**
     * Product: QBW
     * Indicates the QB version of the synced object
     *
     * @param SyncObjectModel $QBVersion
     *
     * @return SyncErrorModel
     */
    public function setQBVersion(
        $QBVersion
    )
    {
        $this->QBVersion = $QBVersion;
        return $this;
    }

}