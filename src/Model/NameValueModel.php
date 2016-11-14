<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * A name/value pair that allows the client to include data that is
 * meaningful in the domain of origin, outside of the Intuit domain.
 *
 * Class NameValueModel
 * @package Augwa\QuickBooks\Model
 */
class NameValueModel
    extends Model
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Value;


    /**
     * Product: ALL
     * Name of the element.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: ALL
     * Name of the element.
     *
     * @param string $Name
     *
     * @return NameValueModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Product: ALL
     * Value of the element.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Product: ALL
     * Value of the element.
     *
     * @param string $Value
     *
     * @return NameValueModel
     */
    public function setValue(
        $Value
    )
    {
        $this->Value = $Value;
        return $this;
    }

}