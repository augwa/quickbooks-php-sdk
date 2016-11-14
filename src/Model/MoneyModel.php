<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Monetary value represented with as a currency code and decimal value.
 * Moneyis always associated with another IntuitEntity and will not be
 * manipulated as a standalone hence it is not extended from
 * IntuitEntity.
 *
 * Class MoneyModel
 * @package Augwa\QuickBooks\Model
 */
class MoneyModel
    extends Model
{

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var string
     */
    private $CurCode;


    /**
     * Product: ALL
     * Monetary value.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Product: ALL
     * Monetary value.
     *
     * @param float $Amount
     *
     * @return MoneyModel
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
     * Monetary unit as described by the ISO 4217 three letter currency code.
     *
     * @return string
     */
    public function getCurCode()
    {
        return $this->CurCode;
    }

    /**
     * Product: ALL
     * Monetary unit as described by the ISO 4217 three letter currency code.
     *
     * @param string $CurCode
     *
     * @return MoneyModel
     */
    public function setCurCode(
        $CurCode
    )
    {
        $this->CurCode = $CurCode;
        return $this;
    }

}