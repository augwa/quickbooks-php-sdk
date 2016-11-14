<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * Provides a wrapper for SyncError for Conflict API Response
 * Consists of list of SyncError objects
 *
 * Class SyncErrorResponseModel
 * @package Augwa\QuickBooks\Model
 */
class SyncErrorResponseModel
    extends Model
{

    /**
     * @var SyncErrorModel
     */
    private $SyncError;


    /**
     * Product:QBW
     * Wrapper of both types of Objects CloudVersion and QBVersion of objects
     * If there are multiple errored objects you will get a list of errored
     * objects
     *
     * @return SyncErrorModel
     */
    public function getSyncError()
    {
        return $this->SyncError;
    }

    /**
     * Product:QBW
     * Wrapper of both types of Objects CloudVersion and QBVersion of objects
     * If there are multiple errored objects you will get a list of errored
     * objects
     *
     * @param SyncErrorModel $SyncError
     *
     * @return SyncErrorResponseModel
     */
    public function setSyncError(
        $SyncError
    )
    {
        $this->SyncError = $SyncError;
        return $this;
    }

}