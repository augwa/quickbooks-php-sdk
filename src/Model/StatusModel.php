<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * Generic meta data response for any add mod
 *
 * Class StatusModel
 * @package Augwa\QuickBooks\Model
 */
class StatusModel
    extends IntuitEntityModel
{

    /**
     * @var string
     */
    private $BatchId;

    /**
     * @var string
     */
    private $MessageCode;

    /**
     * @var string
     */
    private $MessageDesc;

    /**
     * @var string
     */
    private $ObjectType;

    /**
     * @var string
     */
    private $RequestId;

    /**
     * @var string
     */
    private $StateCode;

    /**
     * @var string
     */
    private $StateDesc;


    /**
     * Product: QBW
     * Batch Id to create/update object
     * Filterable: QBW
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }

    /**
     * Product: QBW
     * Batch Id to create/update object
     * Filterable: QBW
     *
     * @param string $BatchId
     *
     * @return StatusModel
     */
    public function setBatchId(
        $BatchId
    )
    {
        $this->BatchId = $BatchId;
        return $this;
    }

    /**
     * Product: QBW
     * Status Message Code
     *
     * @return string
     */
    public function getMessageCode()
    {
        return $this->MessageCode;
    }

    /**
     * Product: QBW
     * Status Message Code
     *
     * @param string $MessageCode
     *
     * @return StatusModel
     */
    public function setMessageCode(
        $MessageCode
    )
    {
        $this->MessageCode = $MessageCode;
        return $this;
    }

    /**
     * Product: QBW
     * Status Message if error occurred else null
     *
     * @return string
     */
    public function getMessageDesc()
    {
        return $this->MessageDesc;
    }

    /**
     * Product: QBW
     * Status Message if error occurred else null
     *
     * @param string $MessageDesc
     *
     * @return StatusModel
     */
    public function setMessageDesc(
        $MessageDesc
    )
    {
        $this->MessageDesc = $MessageDesc;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->ObjectType;
    }

    /**
     * @param string $ObjectType
     *
     * @return StatusModel
     */
    public function setObjectType(
        $ObjectType
    )
    {
        $this->ObjectType = $ObjectType;
        return $this;
    }

    /**
     * Product: QBW
     * Request Id to create/update object
     * Filterable: QBW
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }

    /**
     * Product: QBW
     * Request Id to create/update object
     * Filterable: QBW
     *
     * @param string $RequestId
     *
     * @return StatusModel
     */
    public function setRequestId(
        $RequestId
    )
    {
        $this->RequestId = $RequestId;
        return $this;
    }

    /**
     * Product: QBW
     * Code for Current State of object
     * Filterable: QBW
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->StateCode;
    }

    /**
     * Product: QBW
     * Code for Current State of object
     * Filterable: QBW
     *
     * @param string $StateCode
     *
     * @return StatusModel
     */
    public function setStateCode(
        $StateCode
    )
    {
        $this->StateCode = $StateCode;
        return $this;
    }

    /**
     * Product: QBW
     * Description for Current State of object
     *
     * @return string
     */
    public function getStateDesc()
    {
        return $this->StateDesc;
    }

    /**
     * Product: QBW
     * Description for Current State of object
     *
     * @param string $StateDesc
     *
     * @return StatusModel
     */
    public function setStateDesc(
        $StateDesc
    )
    {
        $this->StateDesc = $StateDesc;
        return $this;
    }

}