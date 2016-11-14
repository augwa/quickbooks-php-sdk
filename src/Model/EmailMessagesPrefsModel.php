<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines Messages Prefs details
 *
 * Class EmailMessagesPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class EmailMessagesPrefsModel
    extends Model
{

    /**
     * @var EmailMessageModel
     */
    private $EstimateMessage;

    /**
     * @var EmailMessageModel
     */
    private $InvoiceMessage;

    /**
     * @var NameValueModel
     */
    private $NameValue;

    /**
     * @var EmailMessageModel
     */
    private $SalesReceiptMessage;

    /**
     * @var EmailMessageModel
     */
    private $StatementMessage;


    /**
     * Product:QBO
     * Default email subject and message for Estimate.
     *
     * @return EmailMessageModel
     */
    public function getEstimateMessage()
    {
        return $this->EstimateMessage;
    }

    /**
     * Product:QBO
     * Default email subject and message for Estimate.
     *
     * @param EmailMessageModel $EstimateMessage
     *
     * @return EmailMessagesPrefsModel
     */
    public function setEstimateMessage(
        $EstimateMessage
    )
    {
        $this->EstimateMessage = $EstimateMessage;
        return $this;
    }

    /**
     * Product:QBO
     * Default email subject and message for Invoice.
     *
     * @return EmailMessageModel
     */
    public function getInvoiceMessage()
    {
        return $this->InvoiceMessage;
    }

    /**
     * Product:QBO
     * Default email subject and message for Invoice.
     *
     * @param EmailMessageModel $InvoiceMessage
     *
     * @return EmailMessagesPrefsModel
     */
    public function setInvoiceMessage(
        $InvoiceMessage
    )
    {
        $this->InvoiceMessage = $InvoiceMessage;
        return $this;
    }

    /**
     * Specifies Preferences classified as email messages are classified as
     * Name-Value pair
     *
     * @return NameValueModel
     */
    public function getNameValue()
    {
        return $this->NameValue;
    }

    /**
     * Specifies Preferences classified as email messages are classified as
     * Name-Value pair
     *
     * @param NameValueModel $NameValue
     *
     * @return EmailMessagesPrefsModel
     */
    public function setNameValue(
        $NameValue
    )
    {
        $this->NameValue = $NameValue;
        return $this;
    }

    /**
     * Product:QBO
     * Default email subject and message for Sales receipt.
     *
     * @return EmailMessageModel
     */
    public function getSalesReceiptMessage()
    {
        return $this->SalesReceiptMessage;
    }

    /**
     * Product:QBO
     * Default email subject and message for Sales receipt.
     *
     * @param EmailMessageModel $SalesReceiptMessage
     *
     * @return EmailMessagesPrefsModel
     */
    public function setSalesReceiptMessage(
        $SalesReceiptMessage
    )
    {
        $this->SalesReceiptMessage = $SalesReceiptMessage;
        return $this;
    }

    /**
     * Product:QBO
     * Default email subject and message for Statement.
     *
     * @return EmailMessageModel
     */
    public function getStatementMessage()
    {
        return $this->StatementMessage;
    }

    /**
     * Product:QBO
     * Default email subject and message for Statement.
     *
     * @param EmailMessageModel $StatementMessage
     *
     * @return EmailMessagesPrefsModel
     */
    public function setStatementMessage(
        $StatementMessage
    )
    {
        $this->StatementMessage = $StatementMessage;
        return $this;
    }

}