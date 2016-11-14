<?php

namespace Augwa\QuickBooks\Model;

/**
 * Vendor types allow categorizing vendors in ways that are meaningful to
 * the business. For example, one could set up vendor types so that they
 * indicate a vendor's industry or geographic location. The
 * categorization then can be used for reporting.
 *
 * Class VendorTypeModel
 * @package Augwa\QuickBooks\Model
 */
class VendorTypeModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $FullyQualifiedName;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var ReferenceTypeModel
     */
    private $ParentRef;


    /**
     * Whether or not active inactive customer types may be hidden from most
     * display purposes and may not be used on financial transactions
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not active inactive customer types may be hidden from most
     * display purposes and may not be used on financial transactions
     *
     * @param bool $Active
     *
     * @return VendorTypeModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: ALL
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of Parent:Customer:Job:Sub-job. Limited to 5
     * levels.Max. length: 41 characters (single name) or 209 characters
     * (fully qualified name).
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->FullyQualifiedName;
    }

    /**
     * Product: ALL
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of Parent:Customer:Job:Sub-job. Limited to 5
     * levels.Max. length: 41 characters (single name) or 209 characters
     * (fully qualified name).
     *
     * @param string $FullyQualifiedName
     *
     * @return VendorTypeModel
     */
    public function setFullyQualifiedName(
        $FullyQualifiedName
    )
    {
        $this->FullyQualifiedName = $FullyQualifiedName;
        return $this;
    }

    /**
     * User recognizable name for the Vendor Type.
     * Length Restriction:
     * QBD: 1024
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * User recognizable name for the Vendor Type.
     * Length Restriction:
     * QBD: 1024
     *
     * @param string $Name
     *
     * @return VendorTypeModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * VendorType Parent referene
     *
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * VendorType Parent referene
     *
     * @param ReferenceTypeModel $ParentRef
     *
     * @return VendorTypeModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

}