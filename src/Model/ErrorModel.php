<?php

namespace Augwa\QuickBooks\Model;

/**
 * Error Type detailing error
 *
 * Class ErrorModel
 * @package Augwa\QuickBooks\Model
 */
class ErrorModel
    extends Model
{

    /**
     * @var string
     */
    private $Detail;

    /**
     * @var string
     */
    private $Message;


    /**
     * Detailed error localized or unlocalized error that is thrown by the
     * business logic backend that caused the error
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * Detailed error localized or unlocalized error that is thrown by the
     * business logic backend that caused the error
     *
     * @param string $Detail
     *
     * @return ErrorModel
     */
    public function setDetail(
        $Detail
    )
    {
        $this->Detail = $Detail;
        return $this;
    }

    /**
     * Localized standard message associated with the error code
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Localized standard message associated with the error code
     *
     * @param string $Message
     *
     * @return ErrorModel
     */
    public function setMessage(
        $Message
    )
    {
        $this->Message = $Message;
        return $this;
    }

}