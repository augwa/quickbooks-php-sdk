<?php

namespace Augwa\QuickBooks\Model;

/**
 * QueryResponse entity describing the response of query
 *
 * Class BatchItemResponseModel
 * @package Augwa\QuickBooks\Model
 */
class BatchItemResponseModel
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
     * @return BatchItemResponseModel
     */
    public function setWarnings(
        $Warnings
    )
    {
        $this->Warnings = $Warnings;
        return $this;
    }

}