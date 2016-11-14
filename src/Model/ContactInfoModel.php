<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Contact information identified by Type.
 *
 * Class ContactInfoModel
 * @package Augwa\QuickBooks\Model
 */
class ContactInfoModel
    extends Model
{

    /**
     * @var string
     * @see ContactTypeEnum
     */
    private $Type;


    /**
     * Product: ALL
     * The type of contact information.
     *
     * @return string
     *
     * @see ContactTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: ALL
     * The type of contact information.
     *
     * @param string $Type
     *
     * @return ContactInfoModel
     *
     * @see ContactTypeEnum
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}