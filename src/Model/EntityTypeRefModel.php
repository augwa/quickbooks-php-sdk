<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Reference information for an entity.
 *
 * Class EntityTypeRefModel
 * @package Augwa\QuickBooks\Model
 */
class EntityTypeRefModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $EntityRef;

    /**
     * @var string
     * @see EntityTypeEnum
     */
    private $Type;


    /**
     * Product: ALL
     * Reference to the entity.
     *
     * @return ReferenceTypeModel
     */
    public function getEntityRef()
    {
        return $this->EntityRef;
    }

    /**
     * Product: ALL
     * Reference to the entity.
     *
     * @param ReferenceTypeModel $EntityRef
     *
     * @return EntityTypeRefModel
     */
    public function setEntityRef(
        $EntityRef
    )
    {
        $this->EntityRef = $EntityRef;
        return $this;
    }

    /**
     * Product: ALL
     * Entity type.
     *
     * @return string
     *
     * @see EntityTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: ALL
     * Entity type.
     *
     * @param string $Type
     *
     * @return EntityTypeRefModel
     *
     * @see EntityTypeEnum
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}