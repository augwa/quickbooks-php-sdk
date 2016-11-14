<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Job types allow for categorizing jobs so that similar jobs can be
 * grouped and subtotaled on reports. Ultimately, they will help in
 * determining which jobs are most profitable for the business.
 *
 * Class JobTypeModel
 * @package Augwa\QuickBooks\Model
 */
class JobTypeModel
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
     * Product: ALL
     * True if the Job is active. Inactive job types may be hidden from
     * display and may not be used on financial transactions.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: ALL
     * True if the Job is active. Inactive job types may be hidden from
     * display and may not be used on financial transactions.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return JobTypeModel
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
     * @return JobTypeModel
     */
    public function setFullyQualifiedName(
        $FullyQualifiedName
    )
    {
        $this->FullyQualifiedName = $FullyQualifiedName;
        return $this;
    }

    /**
     * Product: QBW
     * User recognizable name for the Job Type.Max. length: 31 characters.
     * Product: QBO
     * User recognizable name for the Job Type.Max. length: 15 characters.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBW
     * User recognizable name for the Job Type.Max. length: 31 characters.
     * Product: QBO
     * User recognizable name for the Job Type.Max. length: 15 characters.
     *
     * @param string $Name
     *
     * @return JobTypeModel
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
     * Reference to the JobTypeParent entity.
     *
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * Product: ALL
     * Reference to the JobTypeParent entity.
     *
     * @param ReferenceTypeModel $ParentRef
     *
     * @return JobTypeModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

}