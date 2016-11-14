<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO  Holder for a collection of Cascade objects. Used by
 * messaging. Not intended for external clients.
 *
 * Class CascadeResponseModel
 * @package Augwa\QuickBooks\Model
 */
class CascadeResponseModel
    extends Model
{

    /**
     * @var CascadeModel
     */
    private $Cascade;


    /**
     * Cascading events for an entity
     *
     * @return CascadeModel
     */
    public function getCascade()
    {
        return $this->Cascade;
    }

    /**
     * Cascading events for an entity
     *
     * @param CascadeModel $Cascade
     *
     * @return CascadeResponseModel
     */
    public function setCascade(
        $Cascade
    )
    {
        $this->Cascade = $Cascade;
        return $this;
    }

}