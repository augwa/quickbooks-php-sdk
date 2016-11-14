<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO  Object representing cascading events on entities
 * resulting from a transaction event. Used by messaging. Not intended
 * for external clients.
 *
 * Class CascadeModel
 * @package Augwa\QuickBooks\Model
 */
class CascadeModel
    extends Model
{

    /**
     * @var string
     */
    private $EntityName;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var NameValueModel
     */
    private $KeyValue;


    /**
     * Any IntuitEntity derived object name like Customer, Item, Invoice, ...
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->EntityName;
    }

    /**
     * Any IntuitEntity derived object name like Customer, Item, Invoice, ...
     *
     * @param string $EntityName
     *
     * @return CascadeModel
     */
    public function setEntityName(
        $EntityName
    )
    {
        $this->EntityName = $EntityName;
        return $this;
    }

    /**
     * Unique identifier for an Intuit entity.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Unique identifier for an Intuit entity.
     *
     * @param string $Id
     *
     * @return CascadeModel
     */
    public function setId(
        $Id
    )
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * Cascading events resulting from a transaction event in the form of key
     * value pairs. Key names are user defined.
     *
     * @return NameValueModel
     */
    public function getKeyValue()
    {
        return $this->KeyValue;
    }

    /**
     * Cascading events resulting from a transaction event in the form of key
     * value pairs. Key names are user defined.
     *
     * @param NameValueModel $KeyValue
     *
     * @return CascadeModel
     */
    public function setKeyValue(
        $KeyValue
    )
    {
        $this->KeyValue = $KeyValue;
        return $this;
    }

}