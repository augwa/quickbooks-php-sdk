<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Website address type. This entity is always manipulated in context of
 * another parent entity like Person, Organization etc.Unsupported type.
 *
 * Class WebSiteAddressModel
 * @package Augwa\QuickBooks\Model
 */
class WebSiteAddressModel
    extends Model
{

    /**
     * @var bool
     */
    private $Default;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var string
     */
    private $Tag;

    /**
     * @var string
     */
    private $URI;


    /**
     * Product: ALL
     * True if this is the default web site.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->Default;
    }

    /**
     * Product: ALL
     * True if this is the default web site.
     *
     * @param bool $Default
     *
     * @return WebSiteAddressModel
     */
    public function setDefault(
        $Default
    )
    {
        $this->Default = $Default;
        return $this;
    }

    /**
     * Product: ALL
     * Unique identifier for an Intuit entity.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Product: ALL
     * Unique identifier for an Intuit entity.
     *
     * @param string $Id
     *
     * @return WebSiteAddressModel
     */
    public function setId(
        $Id
    )
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * Product: ALL
     * Descriptive tag associated with the web site.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Product: ALL
     * Descriptive tag associated with the web site.
     *
     * @param string $Tag
     *
     * @return WebSiteAddressModel
     */
    public function setTag(
        $Tag
    )
    {
        $this->Tag = $Tag;
        return $this;
    }

    /**
     * Product: ALL
     * Uniform Resource Identifier for the web site.Max. length: 1000
     * characters.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->URI;
    }

    /**
     * Product: ALL
     * Uniform Resource Identifier for the web site.Max. length: 1000
     * characters.
     *
     * @param string $URI
     *
     * @return WebSiteAddressModel
     */
    public function setURI(
        $URI
    )
    {
        $this->URI = $URI;
        return $this;
    }

}