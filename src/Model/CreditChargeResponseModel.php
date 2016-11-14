<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Holds credit-card transaction response information from a merchant
 * account service, but not any credit card or payment request
 * information - see CreditChargeInfo.
 *
 * Class CreditChargeResponseModel
 * @package Augwa\QuickBooks\Model
 */
class CreditChargeResponseModel
    extends Model
{

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * @var string
     * @see CCAVSMatchEnum
     */
    private $AvsStreet;

    /**
     * @var string
     * @see CCAVSMatchEnum
     */
    private $AvsZip;

    /**
     * @var string
     */
    private $CCProcessor;

    /**
     * @var string
     */
    private $CCTransId;

    /**
     * @var string
     * @see CCSecurityCodeMatchEnum
     */
    private $CardSecurityCodeMatch;

    /**
     * @var string
     */
    private $ClientTransID;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CreditChargeResponseEx;

    /**
     * @var string
     */
    private $MerchantAcctNum;

    /**
     * @var int
     */
    private $PaymentGroupingCode;

    /**
     * @var string
     */
    private $ReconBatchId;

    /**
     * @var int
     */
    private $ResultCode;

    /**
     * @var string
     */
    private $ResultMsg;

    /**
     * @var string
     */
    private $SecurityCode;

    /**
     * @var string
     * @see CCPaymentStatusEnum
     */
    private $Status;

    /**
     * @var int
     */
    private $TxnAuthorizationStamp;

    /**
     * @var \DateTime
     */
    private $TxnAuthorizationTime;


    /**
     * Product: ALL
     * Code returned from the credit card processor to indicate that the
     * charge will be paid by the card issuer.
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->AuthCode;
    }

    /**
     * Product: ALL
     * Code returned from the credit card processor to indicate that the
     * charge will be paid by the card issuer.
     *
     * @param string $AuthCode
     *
     * @return CreditChargeResponseModel
     */
    public function setAuthCode(
        $AuthCode
    )
    {
        $this->AuthCode = $AuthCode;
        return $this;
    }

    /**
     * Product: ALL
     * The AVS (Address Verification Service) result for the street address
     * supplied in the transaction. Possible values are Pass, if the
     * information matches the information on file with the cardholder's
     * account, Fail, or NotAvailable.
     *
     * @return string
     *
     * @see CCAVSMatchEnum
     */
    public function getAvsStreet()
    {
        return $this->AvsStreet;
    }

    /**
     * Product: ALL
     * The AVS (Address Verification Service) result for the street address
     * supplied in the transaction. Possible values are Pass, if the
     * information matches the information on file with the cardholder's
     * account, Fail, or NotAvailable.
     *
     * @param string $AvsStreet
     *
     * @return CreditChargeResponseModel
     *
     * @see CCAVSMatchEnum
     */
    public function setAvsStreet(
        $AvsStreet
    )
    {
        $this->AvsStreet = $AvsStreet;
        return $this;
    }

    /**
     * The AVS (Address Verification Service) result for the zip code
     * supplied in the transaction.  Possible values are Pass, if the
     * information matches the information on file with the cardholder's
     * account, Fail, or NotAvailable.
     *
     * @return string
     *
     * @see CCAVSMatchEnum
     */
    public function getAvsZip()
    {
        return $this->AvsZip;
    }

    /**
     * The AVS (Address Verification Service) result for the zip code
     * supplied in the transaction.  Possible values are Pass, if the
     * information matches the information on file with the cardholder's
     * account, Fail, or NotAvailable.
     *
     * @param string $AvsZip
     *
     * @return CreditChargeResponseModel
     *
     * @see CCAVSMatchEnum
     */
    public function setAvsZip(
        $AvsZip
    )
    {
        $this->AvsZip = $AvsZip;
        return $this;
    }

    /**
     * Product: Not used now
     * Credit Card Processor Name for recording the payment processor
     *
     * @return string
     */
    public function getCCProcessor()
    {
        return $this->CCProcessor;
    }

    /**
     * Product: Not used now
     * Credit Card Processor Name for recording the payment processor
     *
     * @param string $CCProcessor
     *
     * @return CreditChargeResponseModel
     */
    public function setCCProcessor(
        $CCProcessor
    )
    {
        $this->CCProcessor = $CCProcessor;
        return $this;
    }

    /**
     * Product: ALL
     * Unique identifier of the payment transaction. It can be used to track
     * the status of transactions, or to search transactions.
     *
     * @return string
     */
    public function getCCTransId()
    {
        return $this->CCTransId;
    }

    /**
     * Product: ALL
     * Unique identifier of the payment transaction. It can be used to track
     * the status of transactions, or to search transactions.
     *
     * @param string $CCTransId
     *
     * @return CreditChargeResponseModel
     */
    public function setCCTransId(
        $CCTransId
    )
    {
        $this->CCTransId = $CCTransId;
        return $this;
    }

    /**
     * Product: ALL
     * Result of comparing the security code supplied in the credit card
     * transaction request with the code on file with the card issuer.
     * Possible values are Pass, Fail, and NotAvailable.
     *
     * @return string
     *
     * @see CCSecurityCodeMatchEnum
     */
    public function getCardSecurityCodeMatch()
    {
        return $this->CardSecurityCodeMatch;
    }

    /**
     * Product: ALL
     * Result of comparing the security code supplied in the credit card
     * transaction request with the code on file with the card issuer.
     * Possible values are Pass, Fail, and NotAvailable.
     *
     * @param string $CardSecurityCodeMatch
     *
     * @return CreditChargeResponseModel
     *
     * @see CCSecurityCodeMatchEnum
     */
    public function setCardSecurityCodeMatch(
        $CardSecurityCodeMatch
    )
    {
        $this->CardSecurityCodeMatch = $CardSecurityCodeMatch;
        return $this;
    }

    /**
     * Product: ALL
     * An identifier returned in settlement data used to support the credit
     * card transaction reconciliation.
     *
     * @return string
     */
    public function getClientTransID()
    {
        return $this->ClientTransID;
    }

    /**
     * Product: ALL
     * An identifier returned in settlement data used to support the credit
     * card transaction reconciliation.
     *
     * @param string $ClientTransID
     *
     * @return CreditChargeResponseModel
     */
    public function setClientTransID(
        $ClientTransID
    )
    {
        $this->ClientTransID = $ClientTransID;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for CreditChargeResponse
     *
     * @return IntuitAnyTypeModel
     */
    public function getCreditChargeResponseEx()
    {
        return $this->CreditChargeResponseEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for CreditChargeResponse
     *
     * @param IntuitAnyTypeModel $CreditChargeResponseEx
     *
     * @return CreditChargeResponseModel
     */
    public function setCreditChargeResponseEx(
        $CreditChargeResponseEx
    )
    {
        $this->CreditChargeResponseEx = $CreditChargeResponseEx;
        return $this;
    }

    /**
     * Product: ALL
     * Merchant account number associated with the credit card transaction.
     *
     * @return string
     */
    public function getMerchantAcctNum()
    {
        return $this->MerchantAcctNum;
    }

    /**
     * Product: ALL
     * Merchant account number associated with the credit card transaction.
     *
     * @param string $MerchantAcctNum
     *
     * @return CreditChargeResponseModel
     */
    public function setMerchantAcctNum(
        $MerchantAcctNum
    )
    {
        $this->MerchantAcctNum = $MerchantAcctNum;
        return $this;
    }

    /**
     * Product: ALL
     * Code that indicates membership in a group of card types that are
     * normally deposited together.
     *
     * @return int
     */
    public function getPaymentGroupingCode()
    {
        return $this->PaymentGroupingCode;
    }

    /**
     * Product: ALL
     * Code that indicates membership in a group of card types that are
     * normally deposited together.
     *
     * @param int $PaymentGroupingCode
     *
     * @return CreditChargeResponseModel
     */
    public function setPaymentGroupingCode(
        $PaymentGroupingCode
    )
    {
        $this->PaymentGroupingCode = $PaymentGroupingCode;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates which deposit batch the transaction belongs to. Allows for
     * integration with Intuit MAS Service and QBFS: enables reconciliation
     * between what is charged on credit card and what is already deposited
     * into bank.
     *
     * @return string
     */
    public function getReconBatchId()
    {
        return $this->ReconBatchId;
    }

    /**
     * Product: ALL
     * Indicates which deposit batch the transaction belongs to. Allows for
     * integration with Intuit MAS Service and QBFS: enables reconciliation
     * between what is charged on credit card and what is already deposited
     * into bank.
     *
     * @param string $ReconBatchId
     *
     * @return CreditChargeResponseModel
     */
    public function setReconBatchId(
        $ReconBatchId
    )
    {
        $this->ReconBatchId = $ReconBatchId;
        return $this;
    }

    /**
     * Product: ALL
     * Numeric code specifying the result of the transaction.
     *
     * @return int
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }

    /**
     * Product: ALL
     * Numeric code specifying the result of the transaction.
     *
     * @param int $ResultCode
     *
     * @return CreditChargeResponseModel
     */
    public function setResultCode(
        $ResultCode
    )
    {
        $this->ResultCode = $ResultCode;
        return $this;
    }

    /**
     * Product: ALL
     * Text specifying the result of the transaction.
     *
     * @return string
     */
    public function getResultMsg()
    {
        return $this->ResultMsg;
    }

    /**
     * Product: ALL
     * Text specifying the result of the transaction.
     *
     * @param string $ResultMsg
     *
     * @return CreditChargeResponseModel
     */
    public function setResultMsg(
        $ResultMsg
    )
    {
        $this->ResultMsg = $ResultMsg;
        return $this;
    }

    /**
     * Product: ALL
     * CardCode or Card Id field that can be optionally provided to use
     * additional security features of credit card authorization. It is
     * typically a 3 digit number located on the back of most credit cards.
     * For American Express, it is a 4 digit number on the front.
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->SecurityCode;
    }

    /**
     * Product: ALL
     * CardCode or Card Id field that can be optionally provided to use
     * additional security features of credit card authorization. It is
     * typically a 3 digit number located on the back of most credit cards.
     * For American Express, it is a 4 digit number on the front.
     *
     * @param string $SecurityCode
     *
     * @return CreditChargeResponseModel
     */
    public function setSecurityCode(
        $SecurityCode
    )
    {
        $this->SecurityCode = $SecurityCode;
        return $this;
    }

    /**
     * Product: ALL
     * Indicates the status of the payment transaction. Possible values
     * include Completed, Unknown.
     *
     * @return string
     *
     * @see CCPaymentStatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Product: ALL
     * Indicates the status of the payment transaction. Possible values
     * include Completed, Unknown.
     *
     * @param string $Status
     *
     * @return CreditChargeResponseModel
     *
     * @see CCPaymentStatusEnum
     */
    public function setStatus(
        $Status
    )
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * Product: ALL
     * This value is used to support the credit card transaction
     * reconciliation.
     *
     * @return int
     */
    public function getTxnAuthorizationStamp()
    {
        return $this->TxnAuthorizationStamp;
    }

    /**
     * Product: ALL
     * This value is used to support the credit card transaction
     * reconciliation.
     *
     * @param int $TxnAuthorizationStamp
     *
     * @return CreditChargeResponseModel
     */
    public function setTxnAuthorizationStamp(
        $TxnAuthorizationStamp
    )
    {
        $this->TxnAuthorizationStamp = $TxnAuthorizationStamp;
        return $this;
    }

    /**
     * Product: ALL
     * Timestamp indicating the time in which the card processor authorized
     * the transaction.
     *
     * @return \DateTime
     */
    public function getTxnAuthorizationTime()
    {
        return $this->TxnAuthorizationTime;
    }

    /**
     * Product: ALL
     * Timestamp indicating the time in which the card processor authorized
     * the transaction.
     *
     * @param \DateTime $TxnAuthorizationTime
     *
     * @return CreditChargeResponseModel
     */
    public function setTxnAuthorizationTime(
        $TxnAuthorizationTime
    )
    {
        $this->TxnAuthorizationTime = $TxnAuthorizationTime;
        return $this;
    }

}