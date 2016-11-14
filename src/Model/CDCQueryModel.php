<?php

namespace Augwa\QuickBooks\Model;

/**
 * CDCQuery entity describing need for query
 *
 * Class CDCQueryModel
 * @package Augwa\QuickBooks\Model
 */
class CDCQueryModel
    extends Model
{

    /**
     * @var \DateTime
     */
    private $ChangedSince;

    /**
     * @var string
     */
    private $Entities;


    /**
     * Time after which changes are required on the entities that are
     * updated, created, deleted
     *
     * @return \DateTime
     */
    public function getChangedSince()
    {
        return $this->ChangedSince;
    }

    /**
     * Time after which changes are required on the entities that are
     * updated, created, deleted
     *
     * @param \DateTime $ChangedSince
     *
     * @return CDCQueryModel
     */
    public function setChangedSince(
        $ChangedSince
    )
    {
        $this->ChangedSince = $ChangedSince;
        return $this;
    }

    /**
     * Coma separated entity list of entities required
     *
     * @return string
     */
    public function getEntities()
    {
        return $this->Entities;
    }

    /**
     * Coma separated entity list of entities required
     *
     * @param string $Entities
     *
     * @return CDCQueryModel
     */
    public function setEntities(
        $Entities
    )
    {
        $this->Entities = $Entities;
        return $this;
    }

}