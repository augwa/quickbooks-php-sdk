<?php

namespace Augwa\QuickBooks\Model;

/**
 * QueryResponse entity describing the response of query
 *
 * Class IntuitBatchRequestModel
 * @package Augwa\QuickBooks\Model
 */
class IntuitBatchRequestModel
    extends Model
{

    /**
     * @var BatchItemRequestModel
     */
    private $BatchItemRequest;


    /**
     * @return BatchItemRequestModel
     */
    public function getBatchItemRequest()
    {
        return $this->BatchItemRequest;
    }

    /**
     * @param BatchItemRequestModel $BatchItemRequest
     *
     * @return IntuitBatchRequestModel
     */
    public function setBatchItemRequest(
        $BatchItemRequest
    )
    {
        $this->BatchItemRequest = $BatchItemRequest;
        return $this;
    }

}