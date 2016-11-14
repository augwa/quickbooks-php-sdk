<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Information about Description.
 *
 * Class DescriptionLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class DescriptionLineDetailModel
    extends Model
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $DescriptionLineDetailEx;

    /**
     * @var \DateTime
     */
    private $ServiceDate;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxCodeRef;


    /**
     * Product: ALL
     * Internal use only: extension place holder for DescriptionLineDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getDescriptionLineDetailEx()
    {
        return $this->DescriptionLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for DescriptionLineDetail
     *
     * @param IntuitAnyTypeModel $DescriptionLineDetailEx
     *
     * @return DescriptionLineDetailModel
     */
    public function setDescriptionLineDetailEx(
        $DescriptionLineDetailEx
    )
    {
        $this->DescriptionLineDetailEx = $DescriptionLineDetailEx;
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
     * @return DescriptionLineDetailModel
     */
    public function setServiceDate(
        $ServiceDate
    )
    {
        $this->ServiceDate = $ServiceDate;
        return $this;
    }

    /**
     * Product: QBO
     * Reference to the TaxCode for description only line.
     * Though it appears that TaxCode is not applicable to
     * DescriptionOnlyLine as there is no amount associated with it, UK and
     * Canada model
     * Seems to associate the notion of TaxCode even for just a description
     * line
     * Marking this as QBO only at this time but it looks like applicable for
     * QB in general
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Product: QBO
     * Reference to the TaxCode for description only line.
     * Though it appears that TaxCode is not applicable to
     * DescriptionOnlyLine as there is no amount associated with it, UK and
     * Canada model
     * Seems to associate the notion of TaxCode even for just a description
     * line
     * Marking this as QBO only at this time but it looks like applicable for
     * QB in general
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return DescriptionLineDetailModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
        return $this;
    }

}