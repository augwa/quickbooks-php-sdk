<?php

namespace Augwa\QuickBooks\Model;

/**
 * Classes provide a way to track different segments of the business, and
 * to break down the income and expenses for each segment. Classes can
 * apply to all transactions, so they're not tied to a particular client
 * or project.
 *
 * Class ClassModel
 * @package Augwa\QuickBooks\Model
 */
class ClassModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var IntuitAnyTypeModel
     */
    private $ClassEx;

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
     * @var bool
     */
    private $SubClass;


    /**
     * Whether or not active inactive classes may be hidden from most display
     * purposes and may not be used on financial transactions
     * Filterable: ALL
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not active inactive classes may be hidden from most display
     * purposes and may not be used on financial transactions
     * Filterable: ALL
     *
     * @param bool $Active
     *
     * @return ClassModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Class extensible element
     *
     * @return IntuitAnyTypeModel
     */
    public function getClassEx()
    {
        return $this->ClassEx;
    }

    /**
     * Internal use only: extension place holder for Class extensible element
     *
     * @param IntuitAnyTypeModel $ClassEx
     *
     * @return ClassModel
     */
    public function setClassEx(
        $ClassEx
    )
    {
        $this->ClassEx = $ClassEx;
        return $this;
    }

    /**
     * Product: ALL
     * Output Only. Fully qualified name of the entity. The fully qualified
     * name prepends the topmost parent, followed by each sub element
     * separated by colons. Takes the form of:
     * Parent:class1:Subclass1:Subclass2
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->FullyQualifiedName;
    }

    /**
     * Product: ALL
     * Output Only. Fully qualified name of the entity. The fully qualified
     * name prepends the topmost parent, followed by each sub element
     * separated by colons. Takes the form of:
     * Parent:class1:Subclass1:Subclass2
     *
     * @param string $FullyQualifiedName
     *
     * @return ClassModel
     */
    public function setFullyQualifiedName(
        $FullyQualifiedName
    )
    {
        $this->FullyQualifiedName = $FullyQualifiedName;
        return $this;
    }

    /**
     * User recognizable name for the Class.
     * Length Restriction:
     * QBO: 100 characters
     * QBW: 31 characters
     * Sortable: ALL
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * User recognizable name for the Class.
     * Length Restriction:
     * QBO: 100 characters
     * QBW: 31 characters
     * Sortable: ALL
     *
     * @param string $Name
     *
     * @return ClassModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Reference to parent class entity
     *
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * Reference to parent class entity
     *
     * @param ReferenceTypeModel $ParentRef
     *
     * @return ClassModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

    /**
     * Specifies the Class is a SubClass or Not. True if subclass, false or
     * null if it is top-level class
     *
     * @return bool
     */
    public function getSubClass()
    {
        return $this->SubClass;
    }

    /**
     * Specifies the Class is a SubClass or Not. True if subclass, false or
     * null if it is top-level class
     *
     * @param bool $SubClass
     *
     * @return ClassModel
     */
    public function setSubClass(
        $SubClass
    )
    {
        $this->SubClass = $SubClass;
        return $this;
    }

}