<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Tax detail for a transaction line.
 *
 * Class TaxLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class TaxLineDetailModel
    extends Model
{

    /**
     * @var float
     */
    private $NetAmountTaxable;

    /**
     * @var float
     */
    private $OverrideDeltaAmount;

    /**
     * @var bool
     */
    private $PercentBased;

    /**
     * @var \DateTime
     */
    private $ServiceDate;

    /**
     * @var float
     */
    private $TaxInclusiveAmount;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TaxLineDetailEx;

    /**
     * @var float
     */
    private $TaxPercent;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxRateRef;


    /**
     * Product: QBO
     * This is taxable amount on the total of the applicable tax rates
     * If TaxRate is applicable on two lines, the taxableamount represents
     * total of the two lines for which this rate is applied
     * This is different from the Line.Amount which represent the final tax
     * amount after the tax has been applied
     *
     * @return float
     */
    public function getNetAmountTaxable()
    {
        return $this->NetAmountTaxable;
    }

    /**
     * Product: QBO
     * This is taxable amount on the total of the applicable tax rates
     * If TaxRate is applicable on two lines, the taxableamount represents
     * total of the two lines for which this rate is applied
     * This is different from the Line.Amount which represent the final tax
     * amount after the tax has been applied
     *
     * @param float $NetAmountTaxable
     *
     * @return TaxLineDetailModel
     */
    public function setNetAmountTaxable(
        $NetAmountTaxable
    )
    {
        $this->NetAmountTaxable = $NetAmountTaxable;
        return $this;
    }

    /**
     * Product: QBO
     * This holds the difference between the actual tax and overridden amount
     * supplied by the user.
     *
     * @return float
     */
    public function getOverrideDeltaAmount()
    {
        return $this->OverrideDeltaAmount;
    }

    /**
     * Product: QBO
     * This holds the difference between the actual tax and overridden amount
     * supplied by the user.
     *
     * @param float $OverrideDeltaAmount
     *
     * @return TaxLineDetailModel
     */
    public function setOverrideDeltaAmount(
        $OverrideDeltaAmount
    )
    {
        $this->OverrideDeltaAmount = $OverrideDeltaAmount;
        return $this;
    }

    /**
     * Product: ALL
     * True if the sales tax is expressed as a percentage; false if expressed
     * as a number amount.
     *
     * @return bool
     */
    public function getPercentBased()
    {
        return $this->PercentBased;
    }

    /**
     * Product: ALL
     * True if the sales tax is expressed as a percentage; false if expressed
     * as a number amount.
     *
     * @param bool $PercentBased
     *
     * @return TaxLineDetailModel
     */
    public function setPercentBased(
        $PercentBased
    )
    {
        $this->PercentBased = $PercentBased;
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
     * @return TaxLineDetailModel
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
     * This is the amount which also includes tax.
     *
     * @return float
     */
    public function getTaxInclusiveAmount()
    {
        return $this->TaxInclusiveAmount;
    }

    /**
     * Product: QBO
     * This is the amount which also includes tax.
     *
     * @param float $TaxInclusiveAmount
     *
     * @return TaxLineDetailModel
     */
    public function setTaxInclusiveAmount(
        $TaxInclusiveAmount
    )
    {
        $this->TaxInclusiveAmount = $TaxInclusiveAmount;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxLine.
     *
     * @return IntuitAnyTypeModel
     */
    public function getTaxLineDetailEx()
    {
        return $this->TaxLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for TaxLine.
     *
     * @param IntuitAnyTypeModel $TaxLineDetailEx
     *
     * @return TaxLineDetailModel
     */
    public function setTaxLineDetailEx(
        $TaxLineDetailEx
    )
    {
        $this->TaxLineDetailEx = $TaxLineDetailEx;
        return $this;
    }

    /**
     * Product: ALL
     * Numerical expression of the sales tax percent. For example, use "8.5"
     * not "0.085".
     *
     * @return float
     */
    public function getTaxPercent()
    {
        return $this->TaxPercent;
    }

    /**
     * Product: ALL
     * Numerical expression of the sales tax percent. For example, use "8.5"
     * not "0.085".
     *
     * @param float $TaxPercent
     *
     * @return TaxLineDetailModel
     */
    public function setTaxPercent(
        $TaxPercent
    )
    {
        $this->TaxPercent = $TaxPercent;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to a TaxRate. For all editions of QuickBooks, for
     * TaxLineDetail line types that apply a specific TaxRate to the
     * preceding line of the transaction, this
     * Is a reference to that TaxRate. For a TaxLineDetail in a TxnTaxDetail,
     * where the TxnTaxCodeRef is set, the TaxRate referenced here MUST also
     * be
     * One of the rates in the referenced tax code's rate list (either the
     * SalesTaxRateList or the PurchaseTaxRateList) that applies to the
     * transaction type.
     * For international editions of QuickBooks, for a TaxLineDetail in a
     * TxnTaxDetail, the rate referenced here must be referenced by a TaxCode
     * used on  a transaction
     * Line. Any given rate may only be listed once.See Global Tax Model.
     * Product: QBO
     * For US editions of QuickBooks Online, and in TxnTaxDetail only, this
     * references the TaxRate applied to the entire transaction.
     * For international editions of QuickBooks Online, for a TaxLineDetail
     * in a TxnTaxDetail, where the TxnTaxCodeRef is set, the TaxRate
     * referenced
     * Here MUST also be one of the rates in the referenced tax code's rate
     * list (either the SalesTaxRateList or the PurchaseTaxRateList) that
     * applies to the
     * Transaction type. Any given rate may only be listed once.Does not
     * apply to a TaxLineDetail apart from a TxnTaxDetail.See Global Tax
     * Model.
     *
     * @return ReferenceTypeModel
     */
    public function getTaxRateRef()
    {
        return $this->TaxRateRef;
    }

    /**
     * Product: QBW
     * Reference to a TaxRate. For all editions of QuickBooks, for
     * TaxLineDetail line types that apply a specific TaxRate to the
     * preceding line of the transaction, this
     * Is a reference to that TaxRate. For a TaxLineDetail in a TxnTaxDetail,
     * where the TxnTaxCodeRef is set, the TaxRate referenced here MUST also
     * be
     * One of the rates in the referenced tax code's rate list (either the
     * SalesTaxRateList or the PurchaseTaxRateList) that applies to the
     * transaction type.
     * For international editions of QuickBooks, for a TaxLineDetail in a
     * TxnTaxDetail, the rate referenced here must be referenced by a TaxCode
     * used on  a transaction
     * Line. Any given rate may only be listed once.See Global Tax Model.
     * Product: QBO
     * For US editions of QuickBooks Online, and in TxnTaxDetail only, this
     * references the TaxRate applied to the entire transaction.
     * For international editions of QuickBooks Online, for a TaxLineDetail
     * in a TxnTaxDetail, where the TxnTaxCodeRef is set, the TaxRate
     * referenced
     * Here MUST also be one of the rates in the referenced tax code's rate
     * list (either the SalesTaxRateList or the PurchaseTaxRateList) that
     * applies to the
     * Transaction type. Any given rate may only be listed once.Does not
     * apply to a TaxLineDetail apart from a TxnTaxDetail.See Global Tax
     * Model.
     *
     * @param ReferenceTypeModel $TaxRateRef
     *
     * @return TaxLineDetailModel
     */
    public function setTaxRateRef(
        $TaxRateRef
    )
    {
        $this->TaxRateRef = $TaxRateRef;
        return $this;
    }

}