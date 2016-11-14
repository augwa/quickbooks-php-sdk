<?php

namespace Augwa\QuickBooks\Model;

/**
 * QueryResponse entity describing the response of query
 *
 * Class QueryResponseModel
 * @package Augwa\QuickBooks\Model
 */
class QueryResponseModel
    extends Model
{

    /**
     * @var WarningsModel
     */
    private $Warnings;


    /**
     * Indication that a request was processed, but with possible exceptional
     * circumstances (i.e. ignored unsupported fields) that the client may
     * want to be aware of
     *
     * @return WarningsModel
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * Indication that a request was processed, but with possible exceptional
     * circumstances (i.e. ignored unsupported fields) that the client may
     * want to be aware of
     *
     * @param WarningsModel $Warnings
     *
     * @return QueryResponseModel
     */
    public function setWarnings(
        $Warnings
    )
    {
        $this->Warnings = $Warnings;
        return $this;
    }

}