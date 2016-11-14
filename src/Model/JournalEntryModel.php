<?php

namespace Augwa\QuickBooks\Model;

/**
 * Accounting transaction, consists of journal lines, each of which is
 * either a debit or a credit. The total of the debits must equal the
 * total of the credits.
 *
 * Class JournalEntryModel
 * @package Augwa\QuickBooks\Model
 */
class JournalEntryModel
    extends TransactionModel
{

    /**
     * @var bool
     */
    private $Adjustment;

    /**
     * @var bool
     */
    private $EnteredInHomeCurrency;

    /**
     * @var bool
     */
    private $HomeCurrencyAdjustment;

    /**
     * @var float
     */
    private $HomeTotalAmt;

    /**
     * @var IntuitAnyTypeModel
     */
    private $JournalEntryEx;

    /**
     * @var float
     */
    private $TotalAmt;


    /**
     * Indicates that the Journal Entry is after-the-fact entry to make
     * changes to specific accounts.
     *
     * @return bool
     */
    public function getAdjustment()
    {
        return $this->Adjustment;
    }

    /**
     * Indicates that the Journal Entry is after-the-fact entry to make
     * changes to specific accounts.
     *
     * @param bool $Adjustment
     *
     * @return JournalEntryModel
     */
    public function setAdjustment(
        $Adjustment
    )
    {
        $this->Adjustment = $Adjustment;
        return $this;
    }

    /**
     * Valid only if the company file is set up to use Multi-Currency
     * feature.
     * QuickBooks Notes
     * Amounts are always entered in home currency for a
     * HomeCurrencyAdjustment JournalEntry.
     *
     * @return bool
     */
    public function getEnteredInHomeCurrency()
    {
        return $this->EnteredInHomeCurrency;
    }

    /**
     * Valid only if the company file is set up to use Multi-Currency
     * feature.
     * QuickBooks Notes
     * Amounts are always entered in home currency for a
     * HomeCurrencyAdjustment JournalEntry.
     *
     * @param bool $EnteredInHomeCurrency
     *
     * @return JournalEntryModel
     */
    public function setEnteredInHomeCurrency(
        $EnteredInHomeCurrency
    )
    {
        $this->EnteredInHomeCurrency = $EnteredInHomeCurrency;
        return $this;
    }

    /**
     * Valid only if the company file is set up to use Multi-Currency
     * feature.
     * QuickBooks Notes
     * At the end of a reporting period, when financial reports need to
     * reflect a current home currency value of the foreign balances, enter a
     * home currency adjustment.
     * Until the home currency value of the foreign balances is recalculated
     * using current exchange rates, reports reflect the home currency value
     * based on the exchange rates used at the time of each transaction.
     *
     * @return bool
     */
    public function getHomeCurrencyAdjustment()
    {
        return $this->HomeCurrencyAdjustment;
    }

    /**
     * Valid only if the company file is set up to use Multi-Currency
     * feature.
     * QuickBooks Notes
     * At the end of a reporting period, when financial reports need to
     * reflect a current home currency value of the foreign balances, enter a
     * home currency adjustment.
     * Until the home currency value of the foreign balances is recalculated
     * using current exchange rates, reports reflect the home currency value
     * based on the exchange rates used at the time of each transaction.
     *
     * @param bool $HomeCurrencyAdjustment
     *
     * @return JournalEntryModel
     */
    public function setHomeCurrencyAdjustment(
        $HomeCurrencyAdjustment
    )
    {
        $this->HomeCurrencyAdjustment = $HomeCurrencyAdjustment;
        return $this;
    }

    /**
     * Product: ALL
     * Total amount of the transaction in the home currency for
     * multi-currency enabled companies. Single currency companies will not
     * have this field. Includes the total of all the charges, allowances and
     * taxes. Calculated by QuickBooks business logic. Cannot be written to
     * QuickBooks.
     *
     * @return float
     */
    public function getHomeTotalAmt()
    {
        return $this->HomeTotalAmt;
    }

    /**
     * Product: ALL
     * Total amount of the transaction in the home currency for
     * multi-currency enabled companies. Single currency companies will not
     * have this field. Includes the total of all the charges, allowances and
     * taxes. Calculated by QuickBooks business logic. Cannot be written to
     * QuickBooks.
     *
     * @param float $HomeTotalAmt
     *
     * @return JournalEntryModel
     */
    public function setHomeTotalAmt(
        $HomeTotalAmt
    )
    {
        $this->HomeTotalAmt = $HomeTotalAmt;
        return $this;
    }

    /**
     * Internal use only: extension place holder for JournalEntry
     *
     * @return IntuitAnyTypeModel
     */
    public function getJournalEntryEx()
    {
        return $this->JournalEntryEx;
    }

    /**
     * Internal use only: extension place holder for JournalEntry
     *
     * @param IntuitAnyTypeModel $JournalEntryEx
     *
     * @return JournalEntryModel
     */
    public function setJournalEntryEx(
        $JournalEntryEx
    )
    {
        $this->JournalEntryEx = $JournalEntryEx;
        return $this;
    }

    /**
     * Product: All
     * Indicates the total amount of the transaction. This includes the total
     * of all the charges, allowances and taxes. By default, this is
     * recalculated based on sub items total and overridden.
     * Product: QBW
     * Indicates the total amount of the transaction. This includes the total
     * of all the charges, allowances and taxes.Calculated by QuickBooks
     * business logic; cannot be written to QuickBooks.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }

    /**
     * Product: All
     * Indicates the total amount of the transaction. This includes the total
     * of all the charges, allowances and taxes. By default, this is
     * recalculated based on sub items total and overridden.
     * Product: QBW
     * Indicates the total amount of the transaction. This includes the total
     * of all the charges, allowances and taxes.Calculated by QuickBooks
     * business logic; cannot be written to QuickBooks.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $TotalAmt
     *
     * @return JournalEntryModel
     */
    public function setTotalAmt(
        $TotalAmt
    )
    {
        $this->TotalAmt = $TotalAmt;
        return $this;
    }

}