<?php

namespace Augwa\QuickBooks\Model;

/**
 * Detailed data about warnings that occurred when a request was
 * processed
 *
 * Class WarningsModel
 * @package Augwa\QuickBooks\Model
 */
class WarningsModel
    extends Model
{

    /**
     * @var WarningModel
     */
    private $Warning;


    /**
     * Warning details specifies each warning
     *
     * @return WarningModel
     */
    public function getWarning()
    {
        return $this->Warning;
    }

    /**
     * Warning details specifies each warning
     *
     * @param WarningModel $Warning
     *
     * @return WarningsModel
     */
    public function setWarning(
        $Warning
    )
    {
        $this->Warning = $Warning;
        return $this;
    }

}