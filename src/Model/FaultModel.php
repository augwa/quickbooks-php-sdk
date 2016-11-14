<?php

namespace Augwa\QuickBooks\Model;

/**
 * Fault entity describing the fault
 *
 * Class FaultModel
 * @package Augwa\QuickBooks\Model
 */
class FaultModel
    extends Model
{

    /**
     * @var ErrorModel
     */
    private $Error;


    /**
     * Error entity that describes the details of the error, if there are
     * multiple errors, multiple occurrence of error object will be
     * represented as multiple errors
     *
     * @return ErrorModel
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Error entity that describes the details of the error, if there are
     * multiple errors, multiple occurrence of error object will be
     * represented as multiple errors
     *
     * @param ErrorModel $Error
     *
     * @return FaultModel
     */
    public function setError(
        $Error
    )
    {
        $this->Error = $Error;
        return $this;
    }

}