<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Discount detail for a transaction line.
 * Product: QBO
 * Discount detail representing the total discount on a transaction.
 *
 * Class DiscountLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class DiscountLineDetailModel
    extends DiscountOverrideModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $DiscountLineDetailEx;

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
     * Reference to the Class for the discount.
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: ALL
     * Reference to the Class for the discount.
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return DiscountLineDetailModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for DiscountDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getDiscountLineDetailEx()
    {
        return $this->DiscountLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for DiscountDetail
     *
     * @param IntuitAnyTypeModel $DiscountLineDetailEx
     *
     * @return DiscountLineDetailModel
     */
    public function setDiscountLineDetailEx(
        $DiscountLineDetailEx
    )
    {
        $this->DiscountLineDetailEx = $DiscountLineDetailEx;
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
     * @return DiscountLineDetailModel
     */
    public function setServiceDate(
        $ServiceDate
    )
    {
        $this->ServiceDate = $ServiceDate;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the TaxCode for the discount.
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Product: ALL
     * Reference to the TaxCode for the discount.
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return DiscountLineDetailModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
        return $this;
    }

}