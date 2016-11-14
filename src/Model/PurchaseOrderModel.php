<?php

namespace Augwa\QuickBooks\Model;

/**
 * PurchaseOrder is a non-posting transaction representing a request to
 * purchase goods or services from a third party.
 *
 * Class PurchaseOrderModel
 * @package Augwa\QuickBooks\Model
 */
class PurchaseOrderModel
    extends PurchaseByVendorModel
{

    /**
     * @var ReferenceTypeModel
     */
    private $ClassRef;

    /**
     * @var \DateTime
     */
    private $DueDate;

    /**
     * @var string
     * @see EmailStatusEnum
     */
    private $EmailStatus;

    /**
     * @var \DateTime
     */
    private $ExpectedDate;

    /**
     * @var string
     */
    private $FOB;

    /**
     * @var bool
     */
    private $ManuallyClosed;

    /**
     * @var EmailAddressModel
     */
    private $POEmail;

    /**
     * @var string
     * @see PurchaseOrderStatusEnum
     */
    private $POStatus;

    /**
     * @var string
     * @see PrintStatusEnum
     */
    private $PrintStatus;

    /**
     * @var IntuitAnyTypeModel
     */
    private $PurchaseOrderEx;

    /**
     * @var ReferenceTypeModel
     */
    private $ReimbursableInfoRef;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesTermRef;

    /**
     * @var PhysicalAddressModel
     */
    private $ShipAddr;

    /**
     * @var ReferenceTypeModel
     */
    private $ShipMethodRef;

    /**
     * @var ReferenceTypeModel
     */
    private $TaxCodeRef;

    /**
     * @var ReferenceTypeModel
     */
    private $TemplateRef;

    /**
     * @var PhysicalAddressModel
     */
    private $VendorAddr;


    /**
     * @return ReferenceTypeModel
     */
    public function getClassRef()
    {
        return $this->ClassRef;
    }

    /**
     * @param ReferenceTypeModel $ClassRef
     *
     * @return PurchaseOrderModel
     */
    public function setClassRef(
        $ClassRef
    )
    {
        $this->ClassRef = $ClassRef;
        return $this;
    }

    /**
     * The nominal date by which the bill must be paid, not including any
     * early-payment discount incentives, or late payment penalties.
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * The nominal date by which the bill must be paid, not including any
     * early-payment discount incentives, or late payment penalties.
     *
     * @param \DateTime $DueDate
     *
     * @return PurchaseOrderModel
     */
    public function setDueDate(
        $DueDate
    )
    {
        $this->DueDate = $DueDate;
        return $this;
    }

    /**
     * @return string
     *
     * @see EmailStatusEnum
     */
    public function getEmailStatus()
    {
        return $this->EmailStatus;
    }

    /**
     * @param string $EmailStatus
     *
     * @return PurchaseOrderModel
     *
     * @see EmailStatusEnum
     */
    public function setEmailStatus(
        $EmailStatus
    )
    {
        $this->EmailStatus = $EmailStatus;
        return $this;
    }

    /**
     * The date when the delivery of the product is expected.
     *
     * @return \DateTime
     */
    public function getExpectedDate()
    {
        return $this->ExpectedDate;
    }

    /**
     * The date when the delivery of the product is expected.
     *
     * @param \DateTime $ExpectedDate
     *
     * @return PurchaseOrderModel
     */
    public function setExpectedDate(
        $ExpectedDate
    )
    {
        $this->ExpectedDate = $ExpectedDate;
        return $this;
    }

    /**
     * "Free On Board", specifies the terms between buyer and seller
     * regarding transportation costs; does not have any bookkeeping
     * implications.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @return string
     */
    public function getFOB()
    {
        return $this->FOB;
    }

    /**
     * "Free On Board", specifies the terms between buyer and seller
     * regarding transportation costs; does not have any bookkeeping
     * implications.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @param string $FOB
     *
     * @return PurchaseOrderModel
     */
    public function setFOB(
        $FOB
    )
    {
        $this->FOB = $FOB;
        return $this;
    }

    /**
     * The entire transaction, or individual items are manually closed, i.e.
     * they may not be received.
     *
     * @return bool
     */
    public function getManuallyClosed()
    {
        return $this->ManuallyClosed;
    }

    /**
     * The entire transaction, or individual items are manually closed, i.e.
     * they may not be received.
     *
     * @param bool $ManuallyClosed
     *
     * @return PurchaseOrderModel
     */
    public function setManuallyClosed(
        $ManuallyClosed
    )
    {
        $this->ManuallyClosed = $ManuallyClosed;
        return $this;
    }

    /**
     * The email address to which this purchase order is/was sent.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @return EmailAddressModel
     */
    public function getPOEmail()
    {
        return $this->POEmail;
    }

    /**
     * The email address to which this purchase order is/was sent.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @param EmailAddressModel $POEmail
     *
     * @return PurchaseOrderModel
     */
    public function setPOEmail(
        $POEmail
    )
    {
        $this->POEmail = $POEmail;
        return $this;
    }

    /**
     * @return string
     *
     * @see PurchaseOrderStatusEnum
     */
    public function getPOStatus()
    {
        return $this->POStatus;
    }

    /**
     * @param string $POStatus
     *
     * @return PurchaseOrderModel
     *
     * @see PurchaseOrderStatusEnum
     */
    public function setPOStatus(
        $POStatus
    )
    {
        $this->POStatus = $POStatus;
        return $this;
    }

    /**
     * @return string
     *
     * @see PrintStatusEnum
     */
    public function getPrintStatus()
    {
        return $this->PrintStatus;
    }

    /**
     * @param string $PrintStatus
     *
     * @return PurchaseOrderModel
     *
     * @see PrintStatusEnum
     */
    public function setPrintStatus(
        $PrintStatus
    )
    {
        $this->PrintStatus = $PrintStatus;
        return $this;
    }

    /**
     * Internal use only: extension place holder for PurchaseOrder
     *
     * @return IntuitAnyTypeModel
     */
    public function getPurchaseOrderEx()
    {
        return $this->PurchaseOrderEx;
    }

    /**
     * Internal use only: extension place holder for PurchaseOrder
     *
     * @param IntuitAnyTypeModel $PurchaseOrderEx
     *
     * @return PurchaseOrderModel
     */
    public function setPurchaseOrderEx(
        $PurchaseOrderEx
    )
    {
        $this->PurchaseOrderEx = $PurchaseOrderEx;
        return $this;
    }

    /**
     * Information about the Customer and actual Job or Project the expense
     * must be reimbursed for.
     *
     * @return ReferenceTypeModel
     */
    public function getReimbursableInfoRef()
    {
        return $this->ReimbursableInfoRef;
    }

    /**
     * Information about the Customer and actual Job or Project the expense
     * must be reimbursed for.
     *
     * @param ReferenceTypeModel $ReimbursableInfoRef
     *
     * @return PurchaseOrderModel
     */
    public function setReimbursableInfoRef(
        $ReimbursableInfoRef
    )
    {
        $this->ReimbursableInfoRef = $ReimbursableInfoRef;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getSalesTermRef()
    {
        return $this->SalesTermRef;
    }

    /**
     * @param ReferenceTypeModel $SalesTermRef
     *
     * @return PurchaseOrderModel
     */
    public function setSalesTermRef(
        $SalesTermRef
    )
    {
        $this->SalesTermRef = $SalesTermRef;
        return $this;
    }

    /**
     * Address to which the vendor shipped or will ship any goods associated
     * with the purchase.
     *
     * @return PhysicalAddressModel
     */
    public function getShipAddr()
    {
        return $this->ShipAddr;
    }

    /**
     * Address to which the vendor shipped or will ship any goods associated
     * with the purchase.
     *
     * @param PhysicalAddressModel $ShipAddr
     *
     * @return PurchaseOrderModel
     */
    public function setShipAddr(
        $ShipAddr
    )
    {
        $this->ShipAddr = $ShipAddr;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getShipMethodRef()
    {
        return $this->ShipMethodRef;
    }

    /**
     * @param ReferenceTypeModel $ShipMethodRef
     *
     * @return PurchaseOrderModel
     */
    public function setShipMethodRef(
        $ShipMethodRef
    )
    {
        $this->ShipMethodRef = $ShipMethodRef;
        return $this;
    }

    /**
     * Represents the TaxCode Reference with respect to the purchase
     *
     * @return ReferenceTypeModel
     */
    public function getTaxCodeRef()
    {
        return $this->TaxCodeRef;
    }

    /**
     * Represents the TaxCode Reference with respect to the purchase
     *
     * @param ReferenceTypeModel $TaxCodeRef
     *
     * @return PurchaseOrderModel
     */
    public function setTaxCodeRef(
        $TaxCodeRef
    )
    {
        $this->TaxCodeRef = $TaxCodeRef;
        return $this;
    }

    /**
     * @return ReferenceTypeModel
     */
    public function getTemplateRef()
    {
        return $this->TemplateRef;
    }

    /**
     * @param ReferenceTypeModel $TemplateRef
     *
     * @return PurchaseOrderModel
     */
    public function setTemplateRef(
        $TemplateRef
    )
    {
        $this->TemplateRef = $TemplateRef;
        return $this;
    }

    /**
     * Address to which the payment should be sent.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @return PhysicalAddressModel
     */
    public function getVendorAddr()
    {
        return $this->VendorAddr;
    }

    /**
     * Address to which the payment should be sent.
     * QuickBooks Notes
     * Non QB-writable.
     *
     * @param PhysicalAddressModel $VendorAddr
     *
     * @return PurchaseOrderModel
     */
    public function setVendorAddr(
        $VendorAddr
    )
    {
        $this->VendorAddr = $VendorAddr;
        return $this;
    }

}