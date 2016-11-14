<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * A line item of a transaction.
 *
 * Class LineModel
 * @package Augwa\QuickBooks\Model
 */
class LineModel
    extends Model
{

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var CustomFieldModel
     */
    private $CustomField;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     * @see LineDetailTypeEnum
     */
    private $DetailType;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var IntuitAnyTypeModel
     */
    private $LineEx;

    /**
     * @var int
     */
    private $LineNum;

    /**
     * @var LinkedTxnModel
     */
    private $LinkedTxn;


    /**
     * Product: QBW
     * The amount of the line, which depends on the type of the line. It can
     * represent the discount amount, charge amount, tax amount, or subtotal
     * amount based on the line type detail.
     * Product: QBO
     * The amount of the line depending on the type of the line. It can
     * represent the discount amount, charge amount, tax amount, or subtotal
     * amount based on the line type detail.Required for BillPayment, Check,
     * Estimate, Invoice, JournalEntry, Payment, SalesReceipt.
     * Required: QBO
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Product: QBW
     * The amount of the line, which depends on the type of the line. It can
     * represent the discount amount, charge amount, tax amount, or subtotal
     * amount based on the line type detail.
     * Product: QBO
     * The amount of the line depending on the type of the line. It can
     * represent the discount amount, charge amount, tax amount, or subtotal
     * amount based on the line type detail.Required for BillPayment, Check,
     * Estimate, Invoice, JournalEntry, Payment, SalesReceipt.
     * Required: QBO
     *
     * @param float $Amount
     *
     * @return LineModel
     */
    public function setAmount(
        $Amount
    )
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * Product: QBW
     * Custom field (or data extension). Supported only for QuickBooks
     * Windows desktop.
     *
     * @return CustomFieldModel
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * Product: QBW
     * Custom field (or data extension). Supported only for QuickBooks
     * Windows desktop.
     *
     * @param CustomFieldModel $CustomField
     *
     * @return LineModel
     */
    public function setCustomField(
        $CustomField
    )
    {
        $this->CustomField = $CustomField;
        return $this;
    }

    /**
     * Product: QBO
     * Free form text description of the line item that appears in the
     * printed record.Max. length: 4000 characters.Not supported for
     * BillPayment or Payment.
     * Product: QBW
     * Free form text description of the line item that appears in the
     * printed record. Max. length: 4000 characters.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Product: QBO
     * Free form text description of the line item that appears in the
     * printed record.Max. length: 4000 characters.Not supported for
     * BillPayment or Payment.
     * Product: QBW
     * Free form text description of the line item that appears in the
     * printed record. Max. length: 4000 characters.
     *
     * @param string $Description
     *
     * @return LineModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Product: ALL
     * The type of line in the transaction.
     * Required: ALL
     *
     * @return string
     *
     * @see LineDetailTypeEnum
     */
    public function getDetailType()
    {
        return $this->DetailType;
    }

    /**
     * Product: ALL
     * The type of line in the transaction.
     * Required: ALL
     *
     * @param string $DetailType
     *
     * @return LineModel
     *
     * @see LineDetailTypeEnum
     */
    public function setDetailType(
        $DetailType
    )
    {
        $this->DetailType = $DetailType;
        return $this;
    }

    /**
     * Product: QBW
     * ID of the Line Item.
     * Product: QBO
     * ID of the Line Item.QBO considers a request as an update operation for
     * a line item, if you provide an ID that is greater than zero and the ID
     * exists in QBO.QBO considers a request as an create operation for a
     * line item in any of the following conditions: No ID provided, ID
     * provided is less than or equal to zero, ID provided is greater than
     * zero and does not exist in QuickBooks.Required for updating existing
     * lines.Not supported for BillPayment, Estimate, Invoice, or Payment.
     * Required: QBO
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Product: QBW
     * ID of the Line Item.
     * Product: QBO
     * ID of the Line Item.QBO considers a request as an update operation for
     * a line item, if you provide an ID that is greater than zero and the ID
     * exists in QBO.QBO considers a request as an create operation for a
     * line item in any of the following conditions: No ID provided, ID
     * provided is less than or equal to zero, ID provided is greater than
     * zero and does not exist in QuickBooks.Required for updating existing
     * lines.Not supported for BillPayment, Estimate, Invoice, or Payment.
     * Required: QBO
     *
     * @param string $Id
     *
     * @return LineModel
     */
    public function setId(
        $Id
    )
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for LineBase
     *
     * @return IntuitAnyTypeModel
     */
    public function getLineEx()
    {
        return $this->LineEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for LineBase
     *
     * @param IntuitAnyTypeModel $LineEx
     *
     * @return LineModel
     */
    public function setLineEx(
        $LineEx
    )
    {
        $this->LineEx = $LineEx;
        return $this;
    }

    /**
     * Product: QBW
     * Specifies the position of the line in the collection of transaction
     * lines. Supported only for QuickBooks Windows desktop.
     *
     * @return int
     */
    public function getLineNum()
    {
        return $this->LineNum;
    }

    /**
     * Product: QBW
     * Specifies the position of the line in the collection of transaction
     * lines. Supported only for QuickBooks Windows desktop.
     *
     * @param int $LineNum
     *
     * @return LineModel
     */
    public function setLineNum(
        $LineNum
    )
    {
        $this->LineNum = $LineNum;
        return $this;
    }

    /**
     * Product: ALL
     * A link between this line and a specific transaction.  For example, an
     * invoice line may link to an estimate.
     *
     * @return LinkedTxnModel
     */
    public function getLinkedTxn()
    {
        return $this->LinkedTxn;
    }

    /**
     * Product: ALL
     * A link between this line and a specific transaction.  For example, an
     * invoice line may link to an estimate.
     *
     * @param LinkedTxnModel $LinkedTxn
     *
     * @return LineModel
     */
    public function setLinkedTxn(
        $LinkedTxn
    )
    {
        $this->LinkedTxn = $LinkedTxn;
        return $this;
    }

}