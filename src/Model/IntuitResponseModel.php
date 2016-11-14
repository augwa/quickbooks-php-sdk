<?php

namespace Augwa\QuickBooks\Model;

/**
 * IntuitResponse is a holder of all types of entities that come as part
 * of response
 *
 * Class IntuitResponseModel
 * @package Augwa\QuickBooks\Model
 */
class IntuitResponseModel
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
     * @return IntuitResponseModel
     */
    public function setWarnings(
        $Warnings
    )
    {
        $this->Warnings = $Warnings;
        return $this;
    }

}