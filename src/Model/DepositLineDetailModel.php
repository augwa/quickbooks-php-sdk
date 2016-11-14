<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Deposit detail for a transaction line.
 *
 * Class DepositLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class DepositLineDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;

    /**
     * @var string
     */
    private $CheckNum;

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $DepositLineDetailEx;

    /**
     * @var ReferenceTypeModel
     */
    private $Entity;

    /**
     * @var ReferenceTypeModel
     */
    private $PaymentMethodRef;

    /**
     * @var string
     * @see TaxApplicableOnEnum
     */
    private $TaxApplicableOn;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxCodeRef;

    /**
     * @var string
     * @see TxnTypeEnum
     */
    private $TxnType;


    /**
     * Product: ALL
     * Reference to an Expense account associated with the
     * service/non-sellable item billing.
     *
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * Product: ALL
     * Reference to an Expense account associated with the
     * service/non-sellable item billing.
     *
     * @param ReferenceTypeModel $AccountRef
     *
     * @return DepositLineDetailModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Check number for the desposit.
     *
     * @return string
     */
    public function getCheckNum()
    {
        return $this->CheckNum;
    }

    /**
     * Product: ALL
     * Check number for the desposit.
     *
     * @param string $CheckNum
     *
     * @return DepositLineDetailModel
     */
    public function setCheckNum(
        $CheckNum
    )
    {
        $this->CheckNum = $CheckNum;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Class for the deposit.
     *
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * Product: ALL
     * Reference to the Class for the deposit.
     *
     * @param ReferenceTypeModel $ClassRef
     *
     * @return DepositLineDetailModel
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
     * Internal use only: extension place holder for DepositDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getDepositLineDetailEx()
    {
        return $this->DepositLineDetailEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for DepositDetail
     *
     * @param IntuitAnyTypeModel $DepositLineDetailEx
     *
     * @return DepositLineDetailModel
     */
    public function setDepositLineDetailEx(
        $DepositLineDetailEx
    )
    {
        $this->DepositLineDetailEx = $DepositLineDetailEx;
        return $this;
    }

    /**
     * Product: ALL
     * Information about the Customer or Job associated with the deposit.
     *
     * @return ReferenceTypeModel
     */
    public function getEntity()
    {
        return $this->Entity;
    }

    /**
     * Product: ALL
     * Information about the Customer or Job associated with the deposit.
     *
     * @param ReferenceTypeModel $Entity
     *
     * @return DepositLineDetailModel
     */
    public function setEntity(
        $Entity
    )
    {
        $this->Entity = $Entity;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the PaymentMethod for the deposit.
     *
     * @return ReferenceTypeModel
     */
    public function getPaymentMethodRef()
    {
        return $this->PaymentMethodRef;
    }

    /**
     * Product: ALL
     * Reference to the PaymentMethod for the deposit.
     *
     * @param ReferenceTypeModel $PaymentMethodRef
     *
     * @return DepositLineDetailModel
     */
    public function setPaymentMethodRef(
        $PaymentMethodRef
    )
    {
        $this->PaymentMethodRef = $PaymentMethodRef;
        return $this;
    }

    /**
     * Product: QBO
     * Indicates whether the tax applicable on the line is sales or purchase
     *
     * @return string
     *
     * @see TaxApplicableOnEnum
     */
    public function getTaxApplicableOn()
    {
        return $this->TaxApplicableOn;
    }

    /**
     * Product: QBO
     * Indicates whether the tax applicable on the line is sales or purchase
     *
     * @param string $TaxApplicableOn
     *
     * @return DepositLineDetailModel
     *
     * @see TaxApplicableOnEnum
     */
    public function setTaxApplicableOn(
        $TaxApplicableOn
    )
    {
        $this->TaxApplicableOn = $TaxApplicableOn;
        return $this;
    }

    /**
     * Product: QBO
     * Sales/Purchase tax code. For Non US/CA Companies
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Product: QBO
     * Sales/Purchase tax code. For Non US/CA Companies
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return DepositLineDetailModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
        return $this;
    }

    /**
     * Product: ALL
     * Type of the payment transaction. For information purposes only.
     *
     * @return string
     *
     * @see TxnTypeEnum
     */
    public function getTxnType()
    {
        return $this->TxnType;
    }

    /**
     * Product: ALL
     * Type of the payment transaction. For information purposes only.
     *
     * @param string $TxnType
     *
     * @return DepositLineDetailModel
     *
     * @see TxnTypeEnum
     */
    public function setTxnType(
        $TxnType
    )
    {
        $this->TxnType = $TxnType;
        return $this;
    }

}