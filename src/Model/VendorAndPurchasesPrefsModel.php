<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines VendorAndPurchase Prefs details
 *
 * Class VendorAndPurchasesPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class VendorAndPurchasesPrefsModel
    extends Model
{

    /**
     * @var bool
     */
    private $AutomaticBillPayment;

    /**
     * @var bool
     */
    private $BillableExpenseTracking;

    /**
     * @var int
     */
    private $DaysBillsAreDue;

    /**
     * @var float
     */
    private $DefaultMarkup;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultMarkupAccount;

    /**
     * @var ReferenceTypeModel
     */
    private $DefaultTerms;

    /**
     * @var ReferenceTypeModel
     */
    private $DiscountAccountRef;

    /**
     * @var bool
     */
    private $EnableBills;

    /**
     * @var string
     */
    private $MsgToVendors;

    /**
     * @var CustomFieldDefinitionModel
     */
    private $POCustomField;

    /**
     * @var bool
     */
    private $TrackingByCustomer;

    /**
     * @var bool
     */
    private $UsingInventory;

    /**
     * @var bool
     */
    private $UsingMultiLocationInventory;


    /**
     * Product:All
     * Apply automatic bill payment
     *
     * @return bool
     */
    public function getAutomaticBillPayment()
    {
        return $this->AutomaticBillPayment;
    }

    /**
     * Product:All
     * Apply automatic bill payment
     *
     * @param bool $AutomaticBillPayment
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setAutomaticBillPayment(
        $AutomaticBillPayment
    )
    {
        $this->AutomaticBillPayment = $AutomaticBillPayment;
        return $this;
    }

    /**
     * Product:All
     * Enable BillableExpense tracking
     *
     * @return bool
     */
    public function getBillableExpenseTracking()
    {
        return $this->BillableExpenseTracking;
    }

    /**
     * Product:All
     * Enable BillableExpense tracking
     *
     * @param bool $BillableExpenseTracking
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setBillableExpenseTracking(
        $BillableExpenseTracking
    )
    {
        $this->BillableExpenseTracking = $BillableExpenseTracking;
        return $this;
    }

    /**
     * Product:QBW
     *
     * @return int
     */
    public function getDaysBillsAreDue()
    {
        return $this->DaysBillsAreDue;
    }

    /**
     * Product:QBW
     *
     * @param int $DaysBillsAreDue
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setDaysBillsAreDue(
        $DaysBillsAreDue
    )
    {
        $this->DaysBillsAreDue = $DaysBillsAreDue;
        return $this;
    }

    /**
     * Product:All
     * Default markup rate used to calculate the markup amount on the
     * transactions. To enter a markup rate of 8.5%, enter 8.5, not 0.085.
     *
     * @return float
     */
    public function getDefaultMarkup()
    {
        return $this->DefaultMarkup;
    }

    /**
     * Product:All
     * Default markup rate used to calculate the markup amount on the
     * transactions. To enter a markup rate of 8.5%, enter 8.5, not 0.085.
     *
     * @param float $DefaultMarkup
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setDefaultMarkup(
        $DefaultMarkup
    )
    {
        $this->DefaultMarkup = $DefaultMarkup;
        return $this;
    }

    /**
     * Product:All
     * Default markup Account used to calculate the markup amount on the
     * transactions.
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultMarkupAccount()
    {
        return $this->DefaultMarkupAccount;
    }

    /**
     * Product:All
     * Default markup Account used to calculate the markup amount on the
     * transactions.
     *
     * @param ReferenceTypeModel $DefaultMarkupAccount
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setDefaultMarkupAccount(
        $DefaultMarkupAccount
    )
    {
        $this->DefaultMarkupAccount = $DefaultMarkupAccount;
        return $this;
    }

    /**
     * Product:All
     * Default Terms
     *
     * @return ReferenceTypeModel
     */
    public function getDefaultTerms()
    {
        return $this->DefaultTerms;
    }

    /**
     * Product:All
     * Default Terms
     *
     * @param ReferenceTypeModel $DefaultTerms
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setDefaultTerms(
        $DefaultTerms
    )
    {
        $this->DefaultTerms = $DefaultTerms;
        return $this;
    }

    /**
     * Cloud Max Length: 4000
     * QuickBooks Notes
     * Max Length: 31 or 159 (for a fully qualified name)
     *
     * @return ReferenceTypeModel
     */
    public function getDiscountAccountRef()
    {
        return $this->DiscountAccountRef;
    }

    /**
     * Cloud Max Length: 4000
     * QuickBooks Notes
     * Max Length: 31 or 159 (for a fully qualified name)
     *
     * @param ReferenceTypeModel $DiscountAccountRef
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setDiscountAccountRef(
        $DiscountAccountRef
    )
    {
        $this->DiscountAccountRef = $DiscountAccountRef;
        return $this;
    }

    /**
     * Product:All
     * Enables manage bills
     *
     * @return bool
     */
    public function getEnableBills()
    {
        return $this->EnableBills;
    }

    /**
     * Product:All
     * Enables manage bills
     *
     * @param bool $EnableBills
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setEnableBills(
        $EnableBills
    )
    {
        $this->EnableBills = $EnableBills;
        return $this;
    }

    /**
     * Product:All
     * Message to vendors
     *
     * @return string
     */
    public function getMsgToVendors()
    {
        return $this->MsgToVendors;
    }

    /**
     * Product:All
     * Message to vendors
     *
     * @param string $MsgToVendors
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setMsgToVendors(
        $MsgToVendors
    )
    {
        $this->MsgToVendors = $MsgToVendors;
        return $this;
    }

    /**
     * Product:QBW
     * Defines the CustomField definitions
     *
     * @return CustomFieldDefinitionModel
     */
    public function getPOCustomField()
    {
        return $this->POCustomField;
    }

    /**
     * Product:QBW
     * Defines the CustomField definitions
     *
     * @param CustomFieldDefinitionModel $POCustomField
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setPOCustomField(
        $POCustomField
    )
    {
        $this->POCustomField = $POCustomField;
        return $this;
    }

    /**
     * Product:All
     * Enables tracking by customers
     *
     * @return bool
     */
    public function getTrackingByCustomer()
    {
        return $this->TrackingByCustomer;
    }

    /**
     * Product:All
     * Enables tracking by customers
     *
     * @param bool $TrackingByCustomer
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setTrackingByCustomer(
        $TrackingByCustomer
    )
    {
        $this->TrackingByCustomer = $TrackingByCustomer;
        return $this;
    }

    /**
     * Product:QBO
     *
     * @return bool
     */
    public function getUsingInventory()
    {
        return $this->UsingInventory;
    }

    /**
     * Product:QBO
     *
     * @param bool $UsingInventory
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setUsingInventory(
        $UsingInventory
    )
    {
        $this->UsingInventory = $UsingInventory;
        return $this;
    }

    /**
     * Product:QBW
     *
     * @return bool
     */
    public function getUsingMultiLocationInventory()
    {
        return $this->UsingMultiLocationInventory;
    }

    /**
     * Product:QBW
     *
     * @param bool $UsingMultiLocationInventory
     *
     * @return VendorAndPurchasesPrefsModel
     */
    public function setUsingMultiLocationInventory(
        $UsingMultiLocationInventory
    )
    {
        $this->UsingMultiLocationInventory = $UsingMultiLocationInventory;
        return $this;
    }

}