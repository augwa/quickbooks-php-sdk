<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class DiscountOverrideModel
 * @package Augwa\QuickBooks\Model
 */
class DiscountOverrideModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $DiscountAccountRef;

    /**
     * @var float
     */
    private $DiscountPercent;

    /**
     * @var ReferenceTypeModel
     */
    private $DiscountRef;

    /**
     * @var bool
     */
    private $PercentBased;


    /**
     * Product: ALL
     * Income account used to track discounts received from vendors on
     * purchases.
     *
     * @return ReferenceTypeModel
     */
    public function getDiscountAccountRef()
    {
        return $this->DiscountAccountRef;
    }

    /**
     * Product: ALL
     * Income account used to track discounts received from vendors on
     * purchases.
     *
     * @param ReferenceTypeModel $DiscountAccountRef
     *
     * @return DiscountOverrideModel
     */
    public function setDiscountAccountRef(
        $DiscountAccountRef
    )
    {
        $this->DiscountAccountRef = $DiscountAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Percentage by which the amount due is reduced, from 0% to 100%. To
     * enter a discount of 8.5% use 8.5, not 0.085.
     *
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->DiscountPercent;
    }

    /**
     * Product: ALL
     * Percentage by which the amount due is reduced, from 0% to 100%. To
     * enter a discount of 8.5% use 8.5, not 0.085.
     *
     * @param float $DiscountPercent
     *
     * @return DiscountOverrideModel
     */
    public function setDiscountPercent(
        $DiscountPercent
    )
    {
        $this->DiscountPercent = $DiscountPercent;
        return $this;
    }

    /**
     * Product: ALL
     * Discount used in calculating and applying the discount on the sales
     * transaction paid.
     *
     * @return ReferenceTypeModel
     */
    public function getDiscountRef()
    {
        return $this->DiscountRef;
    }

    /**
     * Product: ALL
     * Discount used in calculating and applying the discount on the sales
     * transaction paid.
     *
     * @param ReferenceTypeModel $DiscountRef
     *
     * @return DiscountOverrideModel
     */
    public function setDiscountRef(
        $DiscountRef
    )
    {
        $this->DiscountRef = $DiscountRef;
        return $this;
    }

    /**
     * Product: ALL
     * True if the discount is a percentage; null or false if discount based
     * on amount.
     *
     * @return bool
     */
    public function getPercentBased()
    {
        return $this->PercentBased;
    }

    /**
     * Product: ALL
     * True if the discount is a percentage; null or false if discount based
     * on amount.
     *
     * @param bool $PercentBased
     *
     * @return DiscountOverrideModel
     */
    public function setPercentBased(
        $PercentBased
    )
    {
        $this->PercentBased = $PercentBased;
        return $this;
    }

}