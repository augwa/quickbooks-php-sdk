<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Holds credit-card information to request a credit card payment from a
 * merchant account service, but NOT any response or authorization
 * information from the merchant account service provider -- see
 * CreditChargeResponse
 *
 * Class CreditChargeInfoModel
 * @package Augwa\QuickBooks\Model
 */
class CreditChargeInfoModel
    extends Model
{

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var string
     */
    private $BillAddrStreet;

    /**
     * @var string
     * @see CCTxnModeEnum
     */
    private $CCTxnMode;

    /**
     * @var string
     * @see CCTxnTypeEnum
     */
    private $CCTxnType;

    /**
     * @var int
     */
    private $CcExpiryMonth;

    /**
     * @var int
     */
    private $CcExpiryYear;

    /**
     * @var string
     */
    private $CommercialCardCode;

    /**
     * @var IntuitAnyTypeModel
     */
    private $CreditCardChargeInfoEx;

    /**
     * @var string
     */
    private $NameOnAcct;

    /**
     * @var string
     */
    private $Number;

    /**
     * @var string
     */
    private $PostalCode;

    /**
     * @var string
     */
    private $PrevCCTransId;

    /**
     * @var bool
     */
    private $ProcessPayment;

    /**
     * @var string
     */
    private $Type;


    /**
     * Product: QBO
     * The Amount processed using the credit card.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Product: QBO
     * The Amount processed using the credit card.
     *
     * @param float $Amount
     *
     * @return CreditChargeInfoModel
     */
    public function setAmount(
        $Amount
    )
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * Product: ALL
     * Credit card holder billing address of record: the street address to
     * which credit card statements are sent.
     *
     * @return string
     */
    public function getBillAddrStreet()
    {
        return $this->BillAddrStreet;
    }

    /**
     * Product: ALL
     * Credit card holder billing address of record: the street address to
     * which credit card statements are sent.
     *
     * @param string $BillAddrStreet
     *
     * @return CreditChargeInfoModel
     */
    public function setBillAddrStreet(
        $BillAddrStreet
    )
    {
        $this->BillAddrStreet = $BillAddrStreet;
        return $this;
    }

    /**
     * Product: ALL
     * Credit card transaction mode used in Credit Card payment transactions.
     * Valid values: CardNotPresent (default) or CardPresent.
     *
     * @return string
     *
     * @see CCTxnModeEnum
     */
    public function getCCTxnMode()
    {
        return $this->CCTxnMode;
    }

    /**
     * Product: ALL
     * Credit card transaction mode used in Credit Card payment transactions.
     * Valid values: CardNotPresent (default) or CardPresent.
     *
     * @param string $CCTxnMode
     *
     * @return CreditChargeInfoModel
     *
     * @see CCTxnModeEnum
     */
    public function setCCTxnMode(
        $CCTxnMode
    )
    {
        $this->CCTxnMode = $CCTxnMode;
        return $this;
    }

    /**
     * Product: ALL
     * Type of credit card transaction. Valid values: Authorization, Capture,
     * Charge, Refund, VoiceAuthorization.
     *
     * @return string
     *
     * @see CCTxnTypeEnum
     */
    public function getCCTxnType()
    {
        return $this->CCTxnType;
    }

    /**
     * Product: ALL
     * Type of credit card transaction. Valid values: Authorization, Capture,
     * Charge, Refund, VoiceAuthorization.
     *
     * @param string $CCTxnType
     *
     * @return CreditChargeInfoModel
     *
     * @see CCTxnTypeEnum
     */
    public function setCCTxnType(
        $CCTxnType
    )
    {
        $this->CCTxnType = $CCTxnType;
        return $this;
    }

    /**
     * Product: ALL
     * Expiration Month on card, expressed as a number: 1 = January, 2 =
     * February, etc.
     *
     * @return int
     */
    public function getCcExpiryMonth()
    {
        return $this->CcExpiryMonth;
    }

    /**
     * Product: ALL
     * Expiration Month on card, expressed as a number: 1 = January, 2 =
     * February, etc.
     *
     * @param int $CcExpiryMonth
     *
     * @return CreditChargeInfoModel
     */
    public function setCcExpiryMonth(
        $CcExpiryMonth
    )
    {
        $this->CcExpiryMonth = $CcExpiryMonth;
        return $this;
    }

    /**
     * Product: ALL
     * Expiration Year on card, expressed as a 4 digit number 1999, 2003,
     * etc.
     *
     * @return int
     */
    public function getCcExpiryYear()
    {
        return $this->CcExpiryYear;
    }

    /**
     * Product: ALL
     * Expiration Year on card, expressed as a 4 digit number 1999, 2003,
     * etc.
     *
     * @param int $CcExpiryYear
     *
     * @return CreditChargeInfoModel
     */
    public function setCcExpiryYear(
        $CcExpiryYear
    )
    {
        $this->CcExpiryYear = $CcExpiryYear;
        return $this;
    }

    /**
     * Product: ALL
     * Code associated with commercial cards: purchase, corporate, and
     * business cards. Lower transaction fee rates apply when these cards are
     * used and this field is provided.
     *
     * @return string
     */
    public function getCommercialCardCode()
    {
        return $this->CommercialCardCode;
    }

    /**
     * Product: ALL
     * Code associated with commercial cards: purchase, corporate, and
     * business cards. Lower transaction fee rates apply when these cards are
     * used and this field is provided.
     *
     * @param string $CommercialCardCode
     *
     * @return CreditChargeInfoModel
     */
    public function setCommercialCardCode(
        $CommercialCardCode
    )
    {
        $this->CommercialCardCode = $CommercialCardCode;
        return $this;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for CreditCardChargeInfo
     *
     * @return IntuitAnyTypeModel
     */
    public function getCreditCardChargeInfoEx()
    {
        return $this->CreditCardChargeInfoEx;
    }

    /**
     * Product: ALL
     * Internal use only: extension place holder for CreditCardChargeInfo
     *
     * @param IntuitAnyTypeModel $CreditCardChargeInfoEx
     *
     * @return CreditChargeInfoModel
     */
    public function setCreditCardChargeInfoEx(
        $CreditCardChargeInfoEx
    )
    {
        $this->CreditCardChargeInfoEx = $CreditCardChargeInfoEx;
        return $this;
    }

    /**
     * Product: ALL
     * Account holder name, as printed on the card.
     *
     * @return string
     */
    public function getNameOnAcct()
    {
        return $this->NameOnAcct;
    }

    /**
     * Product: ALL
     * Account holder name, as printed on the card.
     *
     * @param string $NameOnAcct
     *
     * @return CreditChargeInfoModel
     */
    public function setNameOnAcct(
        $NameOnAcct
    )
    {
        $this->NameOnAcct = $NameOnAcct;
        return $this;
    }

    /**
     * Product: ALL
     * Credit Card account number, as printed on the card. Must not have
     * whitespace or formatting characters.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * Product: ALL
     * Credit Card account number, as printed on the card. Must not have
     * whitespace or formatting characters.
     *
     * @param string $Number
     *
     * @return CreditChargeInfoModel
     */
    public function setNumber(
        $Number
    )
    {
        $this->Number = $Number;
        return $this;
    }

    /**
     * Product: ALL
     * Credit card holder billing postal code. Five digits in the USA.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * Product: ALL
     * Credit card holder billing postal code. Five digits in the USA.
     *
     * @param string $PostalCode
     *
     * @return CreditChargeInfoModel
     */
    public function setPostalCode(
        $PostalCode
    )
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * Product: ALL
     * Unique identifier of the previous payment transaction. It can be used
     * as an input to the Capture transaction type.
     *
     * @return string
     */
    public function getPrevCCTransId()
    {
        return $this->PrevCCTransId;
    }

    /**
     * Product: ALL
     * Unique identifier of the previous payment transaction. It can be used
     * as an input to the Capture transaction type.
     *
     * @param string $PrevCCTransId
     *
     * @return CreditChargeInfoModel
     */
    public function setPrevCCTransId(
        $PrevCCTransId
    )
    {
        $this->PrevCCTransId = $PrevCCTransId;
        return $this;
    }

    /**
     * Product: QBO
     * If false or no value, QBO will not process the payment but just store
     * Credit Card Information. If true, QBO will process the Credit Card
     * Payment (Not supported currently).
     *
     * @return bool
     */
    public function getProcessPayment()
    {
        return $this->ProcessPayment;
    }

    /**
     * Product: QBO
     * If false or no value, QBO will not process the payment but just store
     * Credit Card Information. If true, QBO will process the Credit Card
     * Payment (Not supported currently).
     *
     * @param bool $ProcessPayment
     *
     * @return CreditChargeInfoModel
     */
    public function setProcessPayment(
        $ProcessPayment
    )
    {
        $this->ProcessPayment = $ProcessPayment;
        return $this;
    }

    /**
     * Product: ALL
     * Type of credit card.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: ALL
     * Type of credit card.
     *
     * @param string $Type
     *
     * @return CreditChargeInfoModel
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}