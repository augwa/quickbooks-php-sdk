<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Describes the details of the attachable and provides information such
 * as where they are referenced and custom fields.
 *
 * Class AttachableRefModel
 * @package Augwa\QuickBooks\Model
 */
class AttachableRefModel
    extends Model
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $AttachableRefEx;

    /**
     * @var CustomFieldModel
     */
    private $CustomField;

    /**
     * @var ReferenceTypeModel
     */
    private $EntityRef;

    /**
     * @var bool
     */
    private $IncludeOnSend;

    /**
     * @var string
     */
    private $LineInfo;


    /**
     * Specifies extension entity to allow extension
     *
     * @return IntuitAnyTypeModel
     */
    public function getAttachableRefEx()
    {
        return $this->AttachableRefEx;
    }

    /**
     * Specifies extension entity to allow extension
     *
     * @param IntuitAnyTypeModel $AttachableRefEx
     *
     * @return AttachableRefModel
     */
    public function setAttachableRefEx(
        $AttachableRefEx
    )
    {
        $this->AttachableRefEx = $AttachableRefEx;
        return $this;
    }

    /**
     * Product: ALL
     * Custom field (or data extension).
     * Filterable: ALL
     *
     * @return CustomFieldModel
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * Product: ALL
     * Custom field (or data extension).
     * Filterable: ALL
     *
     * @param CustomFieldModel $CustomField
     *
     * @return AttachableRefModel
     */
    public function setCustomField(
        $CustomField
    )
    {
        $this->CustomField = $CustomField;
        return $this;
    }

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
     * @return AttachableRefModel
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
     * 
     *
     * @return bool
     */
    public function getIncludeOnSend()
    {
        return $this->IncludeOnSend;
    }

    /**
     * Product: ALL
     * 
     *
     * @param bool $IncludeOnSend
     *
     * @return AttachableRefModel
     */
    public function setIncludeOnSend(
        $IncludeOnSend
    )
    {
        $this->IncludeOnSend = $IncludeOnSend;
        return $this;
    }

    /**
     * Product: ALL
     * 
     *
     * @return string
     */
    public function getLineInfo()
    {
        return $this->LineInfo;
    }

    /**
     * Product: ALL
     * 
     *
     * @param string $LineInfo
     *
     * @return AttachableRefModel
     */
    public function setLineInfo(
        $LineInfo
    )
    {
        $this->LineInfo = $LineInfo;
        return $this;
    }

}