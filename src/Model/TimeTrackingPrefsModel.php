<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines VendorAndPurchase Prefs details
 *
 * Class TimeTrackingPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class TimeTrackingPrefsModel
    extends Model
{

    /**
     * @var bool
     */
    private $BillCustomers;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultTimeItem;

    /**
     * @var bool
     */
    private $MarkExpensesAsBillable;

    /**
     * @var bool
     */
    private $MarkTimeEntriesBillable;

    /**
     * @var bool
     */
    private $ShowBillRateToAll;

    /**
     * @var bool
     */
    private $TimeTrackingEnabled;

    /**
     * @var bool
     */
    private $UseServices;

    /**
     * @var string
     * @see WeekEnum
     */
    private $WorkWeekStartDate;


    /**
     * Product:QBO
     * Enables billing customers for time
     *
     * @return bool
     */
    public function getBillCustomers()
    {
        return $this->BillCustomers;
    }

    /**
     * Product:QBO
     * Enables billing customers for time
     *
     * @param bool $BillCustomers
     *
     * @return TimeTrackingPrefsModel
     */
    public function setBillCustomers(
        $BillCustomers
    )
    {
        $this->BillCustomers = $BillCustomers;
        return $this;
    }

    /**
     * Product:QBO Default TimeItem Id
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultTimeItem()
    {
        return $this->DefaultTimeItem;
    }

    /**
     * Product:QBO Default TimeItem Id
     *
     * @param ReferenceTypeModel $DefaultTimeItem
     *
     * @return TimeTrackingPrefsModel
     */
    public function setDefaultTimeItem(
        $DefaultTimeItem
    )
    {
        $this->DefaultTimeItem = $DefaultTimeItem;
        return $this;
    }

    /**
     * Product:QBW
     * MarkExpensesAsBillable preference from QB Desktop
     *
     * @return bool
     */
    public function getMarkExpensesAsBillable()
    {
        return $this->MarkExpensesAsBillable;
    }

    /**
     * Product:QBW
     * MarkExpensesAsBillable preference from QB Desktop
     *
     * @param bool $MarkExpensesAsBillable
     *
     * @return TimeTrackingPrefsModel
     */
    public function setMarkExpensesAsBillable(
        $MarkExpensesAsBillable
    )
    {
        $this->MarkExpensesAsBillable = $MarkExpensesAsBillable;
        return $this;
    }

    /**
     * Product:QBW
     * MarkTimeEntriesBillable preference from QB Desktop
     *
     * @return bool
     */
    public function getMarkTimeEntriesBillable()
    {
        return $this->MarkTimeEntriesBillable;
    }

    /**
     * Product:QBW
     * MarkTimeEntriesBillable preference from QB Desktop
     *
     * @param bool $MarkTimeEntriesBillable
     *
     * @return TimeTrackingPrefsModel
     */
    public function setMarkTimeEntriesBillable(
        $MarkTimeEntriesBillable
    )
    {
        $this->MarkTimeEntriesBillable = $MarkTimeEntriesBillable;
        return $this;
    }

    /**
     * Product:QBO
     * Enables billing rate to all employees
     *
     * @return bool
     */
    public function getShowBillRateToAll()
    {
        return $this->ShowBillRateToAll;
    }

    /**
     * Product:QBO
     * Enables billing rate to all employees
     *
     * @param bool $ShowBillRateToAll
     *
     * @return TimeTrackingPrefsModel
     */
    public function setShowBillRateToAll(
        $ShowBillRateToAll
    )
    {
        $this->ShowBillRateToAll = $ShowBillRateToAll;
        return $this;
    }

    /**
     * Product:QBW
     * Time Tracking preference from QB Desktop
     *
     * @return bool
     */
    public function getTimeTrackingEnabled()
    {
        return $this->TimeTrackingEnabled;
    }

    /**
     * Product:QBW
     * Time Tracking preference from QB Desktop
     *
     * @param bool $TimeTrackingEnabled
     *
     * @return TimeTrackingPrefsModel
     */
    public function setTimeTrackingEnabled(
        $TimeTrackingEnabled
    )
    {
        $this->TimeTrackingEnabled = $TimeTrackingEnabled;
        return $this;
    }

    /**
     * Product:QBO
     * Enables services for time tracking
     *
     * @return bool
     */
    public function getUseServices()
    {
        return $this->UseServices;
    }

    /**
     * Product:QBO
     * Enables services for time tracking
     *
     * @param bool $UseServices
     *
     * @return TimeTrackingPrefsModel
     */
    public function setUseServices(
        $UseServices
    )
    {
        $this->UseServices = $UseServices;
        return $this;
    }

    /**
     * Product:All
     * Work week starting day
     *
     * @return string
     *
     * @see WeekEnum
     */
    public function getWorkWeekStartDate()
    {
        return $this->WorkWeekStartDate;
    }

    /**
     * Product:All
     * Work week starting day
     *
     * @param string $WorkWeekStartDate
     *
     * @return TimeTrackingPrefsModel
     *
     * @see WeekEnum
     */
    public function setWorkWeekStartDate(
        $WorkWeekStartDate
    )
    {
        $this->WorkWeekStartDate = $WorkWeekStartDate;
        return $this;
    }

}