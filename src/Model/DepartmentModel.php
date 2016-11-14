<?php

namespace Augwa\QuickBooks\Model;

/**
 * Department provide a way to track different segments of the business,
 * and to break down the income and expenses for each segment. Department
 * can apply to all transactions, so they're not tied to a particular
 * client or project.
 *
 * Class DepartmentModel
 * @package Augwa\QuickBooks\Model
 */
class DepartmentModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var IntuitAnyTypeModel
     */
    private $DepartmentEx;

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
    private $SubDepartment;


    /**
     * Whether or not active inactive classes may be hidden from most display
     * purposes and may not be used on financial transactions
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
     *
     * @param bool $Active
     *
     * @return DepartmentModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Internal use only: extension place holder for DepartmentEx extensible
     * element
     *
     * @return IntuitAnyTypeModel
     */
    public function getDepartmentEx()
    {
        return $this->DepartmentEx;
    }

    /**
     * Internal use only: extension place holder for DepartmentEx extensible
     * element
     *
     * @param IntuitAnyTypeModel $DepartmentEx
     *
     * @return DepartmentModel
     */
    public function setDepartmentEx(
        $DepartmentEx
    )
    {
        $this->DepartmentEx = $DepartmentEx;
        return $this;
    }

    /**
     * Product: ALL
     * Output Only. Fully qualified name of the entity. The fully qualified
     * name prepends the topmost parent, followed by each sub element
     * separated by colons. Takes the form of: 
     * Parent:Location1:SubLocation1:SubLocation2
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
     * Parent:Location1:SubLocation1:SubLocation2
     *
     * @param string $FullyQualifiedName
     *
     * @return DepartmentModel
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
     * QBW: 1024
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
     * QBW: 1024
     *
     * @param string $Name
     *
     * @return DepartmentModel
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
     * @return DepartmentModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

    /**
     * Specifies the Department is a SubDepartment or Not. True if
     * subdepartment, false or null if it is top-level department
     *
     * @return bool
     */
    public function getSubDepartment()
    {
        return $this->SubDepartment;
    }

    /**
     * Specifies the Department is a SubDepartment or Not. True if
     * subdepartment, false or null if it is top-level department
     *
     * @param bool $SubDepartment
     *
     * @return DepartmentModel
     */
    public function setSubDepartment(
        $SubDepartment
    )
    {
        $this->SubDepartment = $SubDepartment;
        return $this;
    }

}