<?php

namespace Augwa\QuickBooks\Model;

/**
 * Describes properties of an exchange rate between source and target
 * currencies.
 *
 * Class ExchangeRateModel
 * @package Augwa\QuickBooks\Model
 */
class ExchangeRateModel
    extends IntuitEntityModel
{

    /**
     * @var \DateTime
     */
    private $AsOfDate;

    /**
     * @var IntuitAnyTypeModel
     */
    private $ExchangeRateEx;

    /**
     * @var float
     */
    private $Rate;

    /**
     * @var string
     */
    private $SourceCurrencyCode;

    /**
     * @var string
     */
    private $TargetCurrencyCode;


    /**
     * Product: QBO
     * Date as on which the exchange rate needs to be set.
     *
     * @return \DateTime
     */
    public function getAsOfDate()
    {
        return $this->AsOfDate;
    }

    /**
     * Product: QBO
     * Date as on which the exchange rate needs to be set.
     *
     * @param \DateTime $AsOfDate
     *
     * @return ExchangeRateModel
     */
    public function setAsOfDate(
        $AsOfDate
    )
    {
        $this->AsOfDate = $AsOfDate;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Exchange Rate
     *
     * @return IntuitAnyTypeModel
     */
    public function getExchangeRateEx()
    {
        return $this->ExchangeRateEx;
    }

    /**
     * Internal use only: extension place holder for Exchange Rate
     *
     * @param IntuitAnyTypeModel $ExchangeRateEx
     *
     * @return ExchangeRateModel
     */
    public function setExchangeRateEx(
        $ExchangeRateEx
    )
    {
        $this->ExchangeRateEx = $ExchangeRateEx;
        return $this;
    }

    /**
     * Product: QBO
     * Exchange rate to be set between these two currencies for the mentioned
     * date.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->Rate;
    }

    /**
     * Product: QBO
     * Exchange rate to be set between these two currencies for the mentioned
     * date.
     *
     * @param float $Rate
     *
     * @return ExchangeRateModel
     */
    public function setRate(
        $Rate
    )
    {
        $this->Rate = $Rate;
        return $this;
    }

    /**
     * Product: QBO
     * Universal 3-letter code of source currency from which exchange rate is
     * required, usually LHS of the equation. Example: 1 USD = 65 INR. Here
     * USD would be the source currency.
     * Max Length: 3
     *
     * @return string
     */
    public function getSourceCurrencyCode()
    {
        return $this->SourceCurrencyCode;
    }

    /**
     * Product: QBO
     * Universal 3-letter code of source currency from which exchange rate is
     * required, usually LHS of the equation. Example: 1 USD = 65 INR. Here
     * USD would be the source currency.
     * Max Length: 3
     *
     * @param string $SourceCurrencyCode
     *
     * @return ExchangeRateModel
     */
    public function setSourceCurrencyCode(
        $SourceCurrencyCode
    )
    {
        $this->SourceCurrencyCode = $SourceCurrencyCode;
        return $this;
    }

    /**
     * Product: QBO
     * Universal 3-letter currency code of target currency against which
     * exchange rate is required, usually RHS of the equation. Usually this
     * would be the home currency.
     * Max Length: 3
     *
     * @return string
     */
    public function getTargetCurrencyCode()
    {
        return $this->TargetCurrencyCode;
    }

    /**
     * Product: QBO
     * Universal 3-letter currency code of target currency against which
     * exchange rate is required, usually RHS of the equation. Usually this
     * would be the home currency.
     * Max Length: 3
     *
     * @param string $TargetCurrencyCode
     *
     * @return ExchangeRateModel
     */
    public function setTargetCurrencyCode(
        $TargetCurrencyCode
    )
    {
        $this->TargetCurrencyCode = $TargetCurrencyCode;
        return $this;
    }

}