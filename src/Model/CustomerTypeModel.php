<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Customer types allow categorizing customers in ways that are
 * meaningful to the business. For example, one could set up customer
 * types so that they indicate which industry a customer represents, a
 * customer's geographic location, or how a customer first heard about
 * the business. The categorization then can be used for reporting or
 * mailings.
 *
 * Class CustomerTypeModel
 * @package Augwa\QuickBooks\Model
 */
class CustomerTypeModel
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
     * True if the Customer is active. Inactive customer types may be hidden
     * from display and may not be used on financial transactions.
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
     * True if the Customer is active. Inactive customer types may be hidden
     * from display and may not be used on financial transactions.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return CustomerTypeModel
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
     * @return CustomerTypeModel
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
     * User recognizable name for the CustomerType.Max. length: 31
     * characters.
     * Product: QBO
     * User recognizable name for the CustomerType.Max. length: 15
     * characters.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBW
     * User recognizable name for the CustomerType.Max. length: 31
     * characters.
     * Product: QBO
     * User recognizable name for the CustomerType.Max. length: 15
     * characters.
     *
     * @param string $Name
     *
     * @return CustomerTypeModel
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
     * Reference to the CustomerTypeParent.
     *
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * Product: ALL
     * Reference to the CustomerTypeParent.
     *
     * @param ReferenceTypeModel $ParentRef
     *
     * @return CustomerTypeModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

}