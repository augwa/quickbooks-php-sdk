<?php

namespace Augwa\QuickBooks\Model;

/**
 * Detailed data about a warning condition that occurred when a request
 * was processed
 *
 * Class WarningModel
 * @package Augwa\QuickBooks\Model
 */
class WarningModel
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
     * Detailed message regarding the warning condition with specifics
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * Detailed message regarding the warning condition with specifics
     *
     * @param string $Detail
     *
     * @return WarningModel
     */
    public function setDetail(
        $Detail
    )
    {
        $this->Detail = $Detail;
        return $this;
    }

    /**
     * Localized standard message associated with the warning
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Localized standard message associated with the warning
     *
     * @param string $Message
     *
     * @return WarningModel
     */
    public function setMessage(
        $Message
    )
    {
        $this->Message = $Message;
        return $this;
    }

}