<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class CurrencyPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class CurrencyPrefsModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $HomeCurrency;

    /**
     * @var bool
     */
    private $MultiCurrencyEnabled;


    /**
     * Product: ALL
     * Reference to the Home currency of the company
     *
     * @return ReferenceTypeModel
     */
    public function getHomeCurrency()
    {
        return $this->HomeCurrency;
    }

    /**
     * Product: ALL
     * Reference to the Home currency of the company
     *
     * @param ReferenceTypeModel $HomeCurrency
     *
     * @return CurrencyPrefsModel
     */
    public function setHomeCurrency(
        $HomeCurrency
    )
    {
        $this->HomeCurrency = $HomeCurrency;
        return $this;
    }

    /**
     * Product: ALL
     * Multicurrency enabled for this company
     *
     * @return bool
     */
    public function getMultiCurrencyEnabled()
    {
        return $this->MultiCurrencyEnabled;
    }

    /**
     * Product: ALL
     * Multicurrency enabled for this company
     *
     * @param bool $MultiCurrencyEnabled
     *
     * @return CurrencyPrefsModel
     */
    public function setMultiCurrencyEnabled(
        $MultiCurrencyEnabled
    )
    {
        $this->MultiCurrencyEnabled = $MultiCurrencyEnabled;
        return $this;
    }

}