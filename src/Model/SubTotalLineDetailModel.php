<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * SubTotalLine detail for a transaction line.
 *
 * Class SubTotalLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class SubTotalLineDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $ItemRef;

    /**
     * @var \DateTime
     */
    private $ServiceDate;


    /**
     * Product: ALL
     * Reference to the Item. When a line lacks an ItemRef it will be treated
     * as "documentation" and the Amount will be ignored.
     *
     * @return ReferenceTypeModel
     */
    public function getItemRef()
    {
        return $this->ItemRef;
    }

    /**
     * Product: ALL
     * Reference to the Item. When a line lacks an ItemRef it will be treated
     * as "documentation" and the Amount will be ignored.
     *
     * @param ReferenceTypeModel $ItemRef
     *
     * @return SubTotalLineDetailModel
     */
    public function setItemRef(
        $ItemRef
    )
    {
        $this->ItemRef = $ItemRef;
        return $this;
    }

    /**
     * Product: ALL
     * Date when the service is performed.
     *
     * @return \DateTime
     */
    public function getServiceDate()
    {
        return $this->ServiceDate;
    }

    /**
     * Product: ALL
     * Date when the service is performed.
     *
     * @param \DateTime $ServiceDate
     *
     * @return SubTotalLineDetailModel
     */
    public function setServiceDate(
        $ServiceDate
    )
    {
        $this->ServiceDate = $ServiceDate;
        return $this;
    }

}