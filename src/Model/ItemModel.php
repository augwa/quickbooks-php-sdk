<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * The Item resource represents any product or service that is sold or
 * purchased. Inventory items are not currently supported.
 * Product: QBW
 * An item is a thing that your company buys, sells, or re-sells, such as
 * products, shipping and handling charges, discounts, and sales tax (if
 * applicable). An item is shown as a line on an invoice or other sales
 * form.  The Item.Type property, which specifies how the item is used,
 * may have one of the following values: Assembly: The Assembly item
 * allows you combine inventory part items and other assembly items
 * (subassemblies) into a single item by defining a Bill of Materials,
 * that lists the component parts of the assembly item. You can also
 * include the cost of building the assembly item by adding the
 * non-inventory part items, service items, and other charge items to the
 * Bill of Materials.  Fixed Asset: The Fixed Asset item represents those
 * business assets that you do not convert to cash one year of normal
 * operation. A fixed asset is usually something that is integral to your
 * business operations. For example, a truck or computer. Group: The
 * Group item helps you to quickly enter a group of individual items that
 * you often purchase or sell together. Inventory: The Inventory item is
 * used to track merchandise which your business purchases, stocks as
 * inventory, and re-sells. QuickBooks tracks the current number of
 * inventory items in stock and the average value of the inventory after
 * the purchase and sale of every item. Other Charge: The Other Charge
 * item is used to charge customers for the mileage expense. Product The
 * Product item is used to record the sales information of a product.
 * Payment: The Payment item subtracts the amount of a customer payment
 * from the total amount of an invoice or statement. You must create a
 * payment item if you receive payment for an invoice or statement in
 * parts. If you receive full payment at the time of sale, use a sales
 * receipt form instead of an invoice with a payment item. Service: The
 * Service item is used for the services that you charge on the purchase.
 * For example, including specialized labor, consulting hours, and
 * professional fees. Subtotal: The Subtotal item is used when you want
 * the total of all the items. You can use this item to apply a
 * percentage discount or surcharge.
 * Business Rules: The item name must be unique. The item type must not
 * be NULL. The item cannot define both unit price and unit price percent
 * simultaneously. For the Service, Product, and Other Charge items, you
 * must specify the ID or name of the expense account or both. If the
 * purchase order cost is specified for the Service, Product, and Other
 * Charge items, you must specify the ID or name of the expense account
 * or both. For the Inventory and Assembly items, you must specify: the
 * ID or name of the income account or both the ID or name of the cogs
 * account or both the ID or name of the asset account or both For the
 * Group item, you must specify the tax ID or tax name or both. For the
 * Fixed Asset item, you must: set the asset account type to Asset
 * specify the purchase date specify the ID or name of the income account
 * or both
 *
 * Class ItemModel
 * @package Augwa\QuickBooks\Model
 */
class ItemModel
    extends IntuitEntityModel
{

    /**
     * @var float
     */
    private $AbatementRate;

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var ReferenceTypeModel
     */
    private $AssetAccountRef;

    /**
     * @var float
     */
    private $AvgCost;

    /**
     * @var float
     */
    private $BuildPoint;

    /**
     * @var ReferenceTypeModel
     */
    private $COGSAccountRef;

    /**
     * @var ReferenceTypeModel
     */
    private $DepositToAccountRef;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var ReferenceTypeModel
     */
    private $ExpenseAccountRef;

    /**
     * @var string
     */
    private $FullyQualifiedName;

    /**
     * @var ReferenceTypeModel
     */
    private $IncomeAccountRef;

    /**
     * @var \DateTime
     */
    private $InvStartDate;

    /**
     * @var ItemAssemblyDetailModel
     */
    private $ItemAssemblyDetail;

    /**
     * @var string
     */
    private $ItemCategoryType;

    /**
     * @var IntuitAnyTypeModel
     */
    private $ItemEx;

    /**
     * @var ItemGroupDetailModel
     */
    private $ItemGroupDetail;

    /**
     * @var int
     */
    private $Level;

    /**
     * @var string
     */
    private $ManPartNum;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var ReferenceTypeModel
     */
    private $ParentRef;

    /**
     * @var ReferenceTypeModel
     */
    private $PaymentMethodRef;

    /**
     * @var bool
     */
    private $PercentBased;

    /**
     * @var ReferenceTypeModel
     */
    private $PrefVendorRef;

    /**
     * @var bool
     */
    private $PrintGroupedItems;

    /**
     * @var float
     */
    private $PurchaseCost;

    /**
     * @var string
     */
    private $PurchaseDesc;

    /**
     * @var ReferenceTypeModel
     */
    private $PurchaseTaxCodeRef;

    /**
     * @var bool
     */
    private $PurchaseTaxIncluded;

    /**
     * @var float
     */
    private $QtyOnHand;

    /**
     * @var float
     */
    private $QtyOnPurchaseOrder;

    /**
     * @var float
     */
    private $QtyOnSalesOrder;

    /**
     * @var float
     */
    private $RatePercent;

    /**
     * @var float
     */
    private $ReorderPoint;

    /**
     * @var float
     */
    private $ReverseChargeRate;

    /**
     * @var ReferenceTypeModel
     */
    private $SalesTaxCodeRef;

    /**
     * @var bool
     */
    private $SalesTaxIncluded;

    /**
     * @var string
     */
    private $ServiceType;

    /**
     * @var string
     */
    private $Sku;

    /**
     * @var bool
     */
    private $SpecialItem;

    /**
     * @var string
     * @see SpecialItemTypeEnum
     */
    private $SpecialItemType;

    /**
     * @var bool
     */
    private $SubItem;

    /**
     * @var bool
     */
    private $Taxable;

    /**
     * @var bool
     */
    private $TrackQtyOnHand;

    /**
     * @var string
     * @see ItemTypeEnum
     */
    private $Type;

    /**
     * @var ReferenceTypeModel
     */
    private $UOMSetRef;

    /**
     * @var float
     */
    private $UnitPrice;


    /**
     * Product: QBO
     * India sales tax abatement rate.
     *
     * @return float
     */
    public function getAbatementRate()
    {
        return $this->AbatementRate;
    }

    /**
     * Product: QBO
     * India sales tax abatement rate.
     *
     * @param float $AbatementRate
     *
     * @return ItemModel
     */
    public function setAbatementRate(
        $AbatementRate
    )
    {
        $this->AbatementRate = $AbatementRate;
        return $this;
    }

    /**
     * Product: QBW
     * True if active. Inactive items may be hidden from display and may not
     * be used in financial transactions.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBW
     * True if active. Inactive items may be hidden from display and may not
     * be used in financial transactions.
     * Filterable: QBW
     *
     * @param bool $Active
     *
     * @return ItemModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Inventory Asset account that tracks the current value
     * of the inventory. If the same account is used for all inventory items,
     * the current balance of this account will represent the current total
     * value of the inventory.Required for the the following item types:
     * Assembly, Inventory.
     * Required: ALL
     *
     * @return ReferenceTypeModel
     */
    public function getAssetAccountRef()
    {
        return $this->AssetAccountRef;
    }

    /**
     * Product: ALL
     * Reference to the Inventory Asset account that tracks the current value
     * of the inventory. If the same account is used for all inventory items,
     * the current balance of this account will represent the current total
     * value of the inventory.Required for the the following item types:
     * Assembly, Inventory.
     * Required: ALL
     *
     * @param ReferenceTypeModel $AssetAccountRef
     *
     * @return ItemModel
     */
    public function setAssetAccountRef(
        $AssetAccountRef
    )
    {
        $this->AssetAccountRef = $AssetAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Average cost of the item, expressed in the home currency.
     *
     * @return float
     */
    public function getAvgCost()
    {
        return $this->AvgCost;
    }

    /**
     * Product: ALL
     * Average cost of the item, expressed in the home currency.
     *
     * @param float $AvgCost
     *
     * @return ItemModel
     */
    public function setAvgCost(
        $AvgCost
    )
    {
        $this->AvgCost = $AvgCost;
        return $this;
    }

    /**
     * Product: ALL
     * Assembly item QuantityOnHand threshold below which more assemblies
     * should be built.Applicable to the Assembly Item type only.When he
     * quantity of the assembly item gets below the BuildPoint number,
     * QuickBooks will remind the user to build more.
     *
     * @return float
     */
    public function getBuildPoint()
    {
        return $this->BuildPoint;
    }

    /**
     * Product: ALL
     * Assembly item QuantityOnHand threshold below which more assemblies
     * should be built.Applicable to the Assembly Item type only.When he
     * quantity of the assembly item gets below the BuildPoint number,
     * QuickBooks will remind the user to build more.
     *
     * @param float $BuildPoint
     *
     * @return ItemModel
     */
    public function setBuildPoint(
        $BuildPoint
    )
    {
        $this->BuildPoint = $BuildPoint;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the Cost of Goods Sold account for the inventory
     * item.Required for the the following item types: Assembly, Inventory.
     * Required: ALL
     *
     * @return ReferenceTypeModel
     */
    public function getCOGSAccountRef()
    {
        return $this->COGSAccountRef;
    }

    /**
     * Product: ALL
     * Reference to the Cost of Goods Sold account for the inventory
     * item.Required for the the following item types: Assembly, Inventory.
     * Required: ALL
     *
     * @param ReferenceTypeModel $COGSAccountRef
     *
     * @return ItemModel
     */
    public function setCOGSAccountRef(
        $COGSAccountRef
    )
    {
        $this->COGSAccountRef = $COGSAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Optional reference to the account in which the payment money is
     * deposited.If not specified, the Undeposited Funds account will be
     * used. Applicable to the Payment item type only.
     *
     * @return ReferenceTypeModel
     */
    public function getDepositToAccountRef()
    {
        return $this->DepositToAccountRef;
    }

    /**
     * Product: ALL
     * Optional reference to the account in which the payment money is
     * deposited.If not specified, the Undeposited Funds account will be
     * used. Applicable to the Payment item type only.
     *
     * @param ReferenceTypeModel $DepositToAccountRef
     *
     * @return ItemModel
     */
    public function setDepositToAccountRef(
        $DepositToAccountRef
    )
    {
        $this->DepositToAccountRef = $DepositToAccountRef;
        return $this;
    }

    /**
     * Product: QBW
     * User entered description for the item that describes the details of
     * the service or product.Max. length: 4000 characters.
     * Product: QBO
     * User entered description for the item that describes the details of
     * the service or product.Max. length: 4000 characters.
     * Filterable: QBO
     * Sortable: QBO
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Product: QBW
     * User entered description for the item that describes the details of
     * the service or product.Max. length: 4000 characters.
     * Product: QBO
     * User entered description for the item that describes the details of
     * the service or product.Max. length: 4000 characters.
     * Filterable: QBO
     * Sortable: QBO
     *
     * @param string $Description
     *
     * @return ItemModel
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
     * Reference to the expense account used to pay the vendor for this
     * item.Note: for a service item, this may also be an equity account to
     * record a draw against the company equity to pay for the service.If the
     * Purchase information (PurchaseDesc, PurchaseTaxIncluded, PurchaseCost,
     * etc.) is provided, this account is required for the the following item
     * types: Other Charge, Product, Service.
     * Required: ALL
     *
     * @return ReferenceTypeModel
     */
    public function getExpenseAccountRef()
    {
        return $this->ExpenseAccountRef;
    }

    /**
     * Product: ALL
     * Reference to the expense account used to pay the vendor for this
     * item.Note: for a service item, this may also be an equity account to
     * record a draw against the company equity to pay for the service.If the
     * Purchase information (PurchaseDesc, PurchaseTaxIncluded, PurchaseCost,
     * etc.) is provided, this account is required for the the following item
     * types: Other Charge, Product, Service.
     * Required: ALL
     *
     * @param ReferenceTypeModel $ExpenseAccountRef
     *
     * @return ItemModel
     */
    public function setExpenseAccountRef(
        $ExpenseAccountRef
    )
    {
        $this->ExpenseAccountRef = $ExpenseAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of:  Parent:Customer:Job:Sub-job  Limited to 5 levels.
     * Max. length: 41 characters (single name) or 209 characters (fully
     * qualified name).
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->FullyQualifiedName;
    }

    /**
     * Product: ALL
     * Fully qualified name of the entity. The fully qualified name prepends
     * the topmost parent, followed by each sub element separated by colons.
     * Takes the form of:  Parent:Customer:Job:Sub-job  Limited to 5 levels.
     * Max. length: 41 characters (single name) or 209 characters (fully
     * qualified name).
     *
     * @param string $FullyQualifiedName
     *
     * @return ItemModel
     */
    public function setFullyQualifiedName(
        $FullyQualifiedName
    )
    {
        $this->FullyQualifiedName = $FullyQualifiedName;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the posting account, that is, the account that records
     * the proceeds from the sale of this item.Required for the the following
     * types: Assembly, Inventory, Other Charge, Product, Service.
     * Required: ALL
     *
     * @return ReferenceTypeModel
     */
    public function getIncomeAccountRef()
    {
        return $this->IncomeAccountRef;
    }

    /**
     * Product: ALL
     * Reference to the posting account, that is, the account that records
     * the proceeds from the sale of this item.Required for the the following
     * types: Assembly, Inventory, Other Charge, Product, Service.
     * Required: ALL
     *
     * @param ReferenceTypeModel $IncomeAccountRef
     *
     * @return ItemModel
     */
    public function setIncomeAccountRef(
        $IncomeAccountRef
    )
    {
        $this->IncomeAccountRef = $IncomeAccountRef;
        return $this;
    }

    /**
     * Product: ALL
     * Date of the opening balance for the inventory transaction. QuickBooks
     * creates the Opening Balance inventory transaction as of the given
     * date, and calculates the total value by multiplying the cost by the
     * quantity on hand.Applies to the Quantity On Hand and Total
     * Value.Applicable to the Inventory and Assembly item types only.
     *
     * @return \DateTime
     */
    public function getInvStartDate()
    {
        return $this->InvStartDate;
    }

    /**
     * Product: ALL
     * Date of the opening balance for the inventory transaction. QuickBooks
     * creates the Opening Balance inventory transaction as of the given
     * date, and calculates the total value by multiplying the cost by the
     * quantity on hand.Applies to the Quantity On Hand and Total
     * Value.Applicable to the Inventory and Assembly item types only.
     *
     * @param \DateTime $InvStartDate
     *
     * @return ItemModel
     */
    public function setInvStartDate(
        $InvStartDate
    )
    {
        $this->InvStartDate = $InvStartDate;
        return $this;
    }

    /**
     * Product: ALL
     * Contains the detailed inventory parts used when the assembly is built.
     * Applicable to an inventory assembly item only.
     *
     * @return ItemAssemblyDetailModel
     */
    public function getItemAssemblyDetail()
    {
        return $this->ItemAssemblyDetail;
    }

    /**
     * Product: ALL
     * Contains the detailed inventory parts used when the assembly is built.
     * Applicable to an inventory assembly item only.
     *
     * @param ItemAssemblyDetailModel $ItemAssemblyDetail
     *
     * @return ItemModel
     */
    public function setItemAssemblyDetail(
        $ItemAssemblyDetail
    )
    {
        $this->ItemAssemblyDetail = $ItemAssemblyDetail;
        return $this;
    }

    /**
     * Product: QBO
     * Categorizes the given item as a product or a service. The applicable
     * values are those exposed through the ItemCategoryTypeEnum. This is
     * currently applicable only in FR region.
     *
     * @return string
     */
    public function getItemCategoryType()
    {
        return $this->ItemCategoryType;
    }

    /**
     * Product: QBO
     * Categorizes the given item as a product or a service. The applicable
     * values are those exposed through the ItemCategoryTypeEnum. This is
     * currently applicable only in FR region.
     *
     * @param string $ItemCategoryType
     *
     * @return ItemModel
     */
    public function setItemCategoryType(
        $ItemCategoryType
    )
    {
        $this->ItemCategoryType = $ItemCategoryType;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Item
     *
     * @return IntuitAnyTypeModel
     */
    public function getItemEx()
    {
        return $this->ItemEx;
    }

    /**
     * Internal use only: extension place holder for Item
     *
     * @param IntuitAnyTypeModel $ItemEx
     *
     * @return ItemModel
     */
    public function setItemEx(
        $ItemEx
    )
    {
        $this->ItemEx = $ItemEx;
        return $this;
    }

    /**
     * Product: ALL
     * Contains the detailed components of the group. Applicable to a group
     * item only.
     *
     * @return ItemGroupDetailModel
     */
    public function getItemGroupDetail()
    {
        return $this->ItemGroupDetail;
    }

    /**
     * Product: ALL
     * Contains the detailed components of the group. Applicable to a group
     * item only.
     *
     * @param ItemGroupDetailModel $ItemGroupDetail
     *
     * @return ItemModel
     */
    public function setItemGroupDetail(
        $ItemGroupDetail
    )
    {
        $this->ItemGroupDetail = $ItemGroupDetail;
        return $this;
    }

    /**
     * Product: ALL
     * Specifies the level of the item, 0 if top level parent, otherwise
     * specifies the depth from the top parent.
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Product: ALL
     * Specifies the level of the item, 0 if top level parent, otherwise
     * specifies the depth from the top parent.
     *
     * @param int $Level
     *
     * @return ItemModel
     */
    public function setLevel(
        $Level
    )
    {
        $this->Level = $Level;
        return $this;
    }

    /**
     * Product: ALL
     * Identifier provided by manufacturer for the Item, for example, the
     * model number.Applicable for the the following item types: Inventory,
     * Product.
     *
     * @return string
     */
    public function getManPartNum()
    {
        return $this->ManPartNum;
    }

    /**
     * Product: ALL
     * Identifier provided by manufacturer for the Item, for example, the
     * model number.Applicable for the the following item types: Inventory,
     * Product.
     *
     * @param string $ManPartNum
     *
     * @return ItemModel
     */
    public function setManPartNum(
        $ManPartNum
    )
    {
        $this->ManPartNum = $ManPartNum;
        return $this;
    }

    /**
     * Product: QBW
     * User recognizable name for the Item.Max. length: 31 characters.
     * Product: QBO
     * User recognizable name for the Item.Max. length: 100 characters.
     * Filterable: ALL
     * Sortable: ALL
     * Required: QBW
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBW
     * User recognizable name for the Item.Max. length: 31 characters.
     * Product: QBO
     * User recognizable name for the Item.Max. length: 100 characters.
     * Filterable: ALL
     * Sortable: ALL
     * Required: QBW
     *
     * @param string $Name
     *
     * @return ItemModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the item's parent entity.
     *
     * @return ReferenceTypeModel
     */
    public function getParentRef()
    {
        return $this->ParentRef;
    }

    /**
     * Product: ALL
     * Reference to the item's parent entity.
     *
     * @param ReferenceTypeModel $ParentRef
     *
     * @return ItemModel
     */
    public function setParentRef(
        $ParentRef
    )
    {
        $this->ParentRef = $ParentRef;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to a PaymentMethod for an item of type Payment.
     *
     * @return ReferenceTypeModel
     */
    public function getPaymentMethodRef()
    {
        return $this->PaymentMethodRef;
    }

    /**
     * Product: ALL
     * Reference to a PaymentMethod for an item of type Payment.
     *
     * @param ReferenceTypeModel $PaymentMethodRef
     *
     * @return ItemModel
     */
    public function setPaymentMethodRef(
        $PaymentMethodRef
    )
    {
        $this->PaymentMethodRef = $PaymentMethodRef;
        return $this;
    }

    /**
     * Product: ALL
     * True if the tax amount is percentage based.
     *
     * @return bool
     */
    public function getPercentBased()
    {
        return $this->PercentBased;
    }

    /**
     * Product: ALL
     * True if the tax amount is percentage based.
     *
     * @param bool $PercentBased
     *
     * @return ItemModel
     */
    public function setPercentBased(
        $PercentBased
    )
    {
        $this->PercentBased = $PercentBased;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the preferred vendor of this item.
     *
     * @return ReferenceTypeModel
     */
    public function getPrefVendorRef()
    {
        return $this->PrefVendorRef;
    }

    /**
     * Product: ALL
     * Reference to the preferred vendor of this item.
     *
     * @param ReferenceTypeModel $PrefVendorRef
     *
     * @return ItemModel
     */
    public function setPrefVendorRef(
        $PrefVendorRef
    )
    {
        $this->PrefVendorRef = $PrefVendorRef;
        return $this;
    }

    /**
     * Product: QBW
     * Lets us know if the user wants to display the subitems as a group. 
     * Applicable to items of Group type only.
     * Filterable: QBW
     *
     * @return bool
     */
    public function getPrintGroupedItems()
    {
        return $this->PrintGroupedItems;
    }

    /**
     * Product: QBW
     * Lets us know if the user wants to display the subitems as a group. 
     * Applicable to items of Group type only.
     * Filterable: QBW
     *
     * @param bool $PrintGroupedItems
     *
     * @return ItemModel
     */
    public function setPrintGroupedItems(
        $PrintGroupedItems
    )
    {
        $this->PrintGroupedItems = $PrintGroupedItems;
        return $this;
    }

    /**
     * Product: ALL
     * Amount paid when buying or ordering the item, as expressed in the home
     * currency.
     *
     * @return float
     */
    public function getPurchaseCost()
    {
        return $this->PurchaseCost;
    }

    /**
     * Product: ALL
     * Amount paid when buying or ordering the item, as expressed in the home
     * currency.
     *
     * @param float $PurchaseCost
     *
     * @return ItemModel
     */
    public function setPurchaseCost(
        $PurchaseCost
    )
    {
        $this->PurchaseCost = $PurchaseCost;
        return $this;
    }

    /**
     * Product: ALL
     * User entered purchase description for the item.
     *
     * @return string
     */
    public function getPurchaseDesc()
    {
        return $this->PurchaseDesc;
    }

    /**
     * Product: ALL
     * User entered purchase description for the item.
     *
     * @param string $PurchaseDesc
     *
     * @return ItemModel
     */
    public function setPurchaseDesc(
        $PurchaseDesc
    )
    {
        $this->PurchaseDesc = $PurchaseDesc;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the purchase tax code for the item.Applicable to the
     * Service, Other Charge, and Part (Non-Inventory) item types.
     *
     * @return ReferenceTypeModel
     */
    public function getPurchaseTaxCodeRef()
    {
        return $this->PurchaseTaxCodeRef;
    }

    /**
     * Product: ALL
     * Reference to the purchase tax code for the item.Applicable to the
     * Service, Other Charge, and Part (Non-Inventory) item types.
     *
     * @param ReferenceTypeModel $PurchaseTaxCodeRef
     *
     * @return ItemModel
     */
    public function setPurchaseTaxCodeRef(
        $PurchaseTaxCodeRef
    )
    {
        $this->PurchaseTaxCodeRef = $PurchaseTaxCodeRef;
        return $this;
    }

    /**
     * Product: ALL
     * True if the purchase tax is included in the item amount, and therefore
     * is not calculated for the transaction.
     *
     * @return bool
     */
    public function getPurchaseTaxIncluded()
    {
        return $this->PurchaseTaxIncluded;
    }

    /**
     * Product: ALL
     * True if the purchase tax is included in the item amount, and therefore
     * is not calculated for the transaction.
     *
     * @param bool $PurchaseTaxIncluded
     *
     * @return ItemModel
     */
    public function setPurchaseTaxIncluded(
        $PurchaseTaxIncluded
    )
    {
        $this->PurchaseTaxIncluded = $PurchaseTaxIncluded;
        return $this;
    }

    /**
     * Product: ALL
     * Current quantity of the inventory items available for sale.
     * Sortable: QBW
     *
     * @return float
     */
    public function getQtyOnHand()
    {
        return $this->QtyOnHand;
    }

    /**
     * Product: ALL
     * Current quantity of the inventory items available for sale.
     * Sortable: QBW
     *
     * @param float $QtyOnHand
     *
     * @return ItemModel
     */
    public function setQtyOnHand(
        $QtyOnHand
    )
    {
        $this->QtyOnHand = $QtyOnHand;
        return $this;
    }

    /**
     * Product: ALL
     * Quantity of the inventory item being ordered, for which there is a
     * purchase order issued.
     *
     * @return float
     */
    public function getQtyOnPurchaseOrder()
    {
        return $this->QtyOnPurchaseOrder;
    }

    /**
     * Product: ALL
     * Quantity of the inventory item being ordered, for which there is a
     * purchase order issued.
     *
     * @param float $QtyOnPurchaseOrder
     *
     * @return ItemModel
     */
    public function setQtyOnPurchaseOrder(
        $QtyOnPurchaseOrder
    )
    {
        $this->QtyOnPurchaseOrder = $QtyOnPurchaseOrder;
        return $this;
    }

    /**
     * Product: ALL
     * Quantity of the inventory item that is placed on sales orders.
     *
     * @return float
     */
    public function getQtyOnSalesOrder()
    {
        return $this->QtyOnSalesOrder;
    }

    /**
     * Product: ALL
     * Quantity of the inventory item that is placed on sales orders.
     *
     * @param float $QtyOnSalesOrder
     *
     * @return ItemModel
     */
    public function setQtyOnSalesOrder(
        $QtyOnSalesOrder
    )
    {
        $this->QtyOnSalesOrder = $QtyOnSalesOrder;
        return $this;
    }

    /**
     * Product: ALL
     * The tax amount expressed as a percent of charges entered in the
     * current transaction. To enter a rate of 10% use 10.0, not
     * 0.01.Applicable to the Service, OtherCharge or Part (Non-Inventory)
     * item types only, and only if the Purchase part of the item does not
     * exist, that is, the item is not used as a reimbursable item, or as a
     * part in assemblies.
     *
     * @return float
     */
    public function getRatePercent()
    {
        return $this->RatePercent;
    }

    /**
     * Product: ALL
     * The tax amount expressed as a percent of charges entered in the
     * current transaction. To enter a rate of 10% use 10.0, not
     * 0.01.Applicable to the Service, OtherCharge or Part (Non-Inventory)
     * item types only, and only if the Purchase part of the item does not
     * exist, that is, the item is not used as a reimbursable item, or as a
     * part in assemblies.
     *
     * @param float $RatePercent
     *
     * @return ItemModel
     */
    public function setRatePercent(
        $RatePercent
    )
    {
        $this->RatePercent = $RatePercent;
        return $this;
    }

    /**
     * Product: ALL
     * Quantity on hand threshold below which a purchase order against this
     * inventory item should be issued. When the QtyOnHand is less than the
     * ReorderPoint, the QuickBooks purchase order system will prompt the
     * user to reorder.
     *
     * @return float
     */
    public function getReorderPoint()
    {
        return $this->ReorderPoint;
    }

    /**
     * Product: ALL
     * Quantity on hand threshold below which a purchase order against this
     * inventory item should be issued. When the QtyOnHand is less than the
     * ReorderPoint, the QuickBooks purchase order system will prompt the
     * user to reorder.
     *
     * @param float $ReorderPoint
     *
     * @return ItemModel
     */
    public function setReorderPoint(
        $ReorderPoint
    )
    {
        $this->ReorderPoint = $ReorderPoint;
        return $this;
    }

    /**
     * Product: QBO
     * India sales tax reverse charge rate.
     *
     * @return float
     */
    public function getReverseChargeRate()
    {
        return $this->ReverseChargeRate;
    }

    /**
     * Product: QBO
     * India sales tax reverse charge rate.
     *
     * @param float $ReverseChargeRate
     *
     * @return ItemModel
     */
    public function setReverseChargeRate(
        $ReverseChargeRate
    )
    {
        $this->ReverseChargeRate = $ReverseChargeRate;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the sales tax code for the item.Applicable to the
     * Service, Other Charge, Part (Non-Inventory), Inventory and Assembly
     * item types only.
     *
     * @return ReferenceTypeModel
     */
    public function getSalesTaxCodeRef()
    {
        return $this->SalesTaxCodeRef;
    }

    /**
     * Product: ALL
     * Reference to the sales tax code for the item.Applicable to the
     * Service, Other Charge, Part (Non-Inventory), Inventory and Assembly
     * item types only.
     *
     * @param ReferenceTypeModel $SalesTaxCodeRef
     *
     * @return ItemModel
     */
    public function setSalesTaxCodeRef(
        $SalesTaxCodeRef
    )
    {
        $this->SalesTaxCodeRef = $SalesTaxCodeRef;
        return $this;
    }

    /**
     * Product: ALL
     * True if the sales tax is included in the item amount, and therefore is
     * not calculated for the transaction.
     *
     * @return bool
     */
    public function getSalesTaxIncluded()
    {
        return $this->SalesTaxIncluded;
    }

    /**
     * Product: ALL
     * True if the sales tax is included in the item amount, and therefore is
     * not calculated for the transaction.
     *
     * @param bool $SalesTaxIncluded
     *
     * @return ItemModel
     */
    public function setSalesTaxIncluded(
        $SalesTaxIncluded
    )
    {
        $this->SalesTaxIncluded = $SalesTaxIncluded;
        return $this;
    }

    /**
     * Product: QBO
     * India sales tax service type, see ServiceTypeEnum for values.
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * Product: QBO
     * India sales tax service type, see ServiceTypeEnum for values.
     *
     * @param string $ServiceType
     *
     * @return ItemModel
     */
    public function setServiceType(
        $ServiceType
    )
    {
        $this->ServiceType = $ServiceType;
        return $this;
    }

    /**
     * Product: QBO
     * Stock Keeping Unit - User entered item identifier that identifies an
     * item uniquely Max. length: 100 characters.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @return string
     */
    public function getSku()
    {
        return $this->Sku;
    }

    /**
     * Product: QBO
     * Stock Keeping Unit - User entered item identifier that identifies an
     * item uniquely Max. length: 100 characters.
     * Filterable: ALL
     * Sortable: ALL
     *
     * @param string $Sku
     *
     * @return ItemModel
     */
    public function setSku(
        $Sku
    )
    {
        $this->Sku = $Sku;
        return $this;
    }

    /**
     * Product: ALL
     * True if this is a special item used by QuickBooks in certain
     * accounting functions, including miscellaneous charges that do not fall
     * into the categories of service, labor, materials, or parts. Examples
     * include delivery charges, setup fees, and service charges.
     *
     * @return bool
     */
    public function getSpecialItem()
    {
        return $this->SpecialItem;
    }

    /**
     * Product: ALL
     * True if this is a special item used by QuickBooks in certain
     * accounting functions, including miscellaneous charges that do not fall
     * into the categories of service, labor, materials, or parts. Examples
     * include delivery charges, setup fees, and service charges.
     *
     * @param bool $SpecialItem
     *
     * @return ItemModel
     */
    public function setSpecialItem(
        $SpecialItem
    )
    {
        $this->SpecialItem = $SpecialItem;
        return $this;
    }

    /**
     * Product: ALL
     * Description Type of special item, if SpecialItem is true.
     *
     * @return string
     *
     * @see SpecialItemTypeEnum
     */
    public function getSpecialItemType()
    {
        return $this->SpecialItemType;
    }

    /**
     * Product: ALL
     * Description Type of special item, if SpecialItem is true.
     *
     * @param string $SpecialItemType
     *
     * @return ItemModel
     *
     * @see SpecialItemTypeEnum
     */
    public function setSpecialItemType(
        $SpecialItemType
    )
    {
        $this->SpecialItemType = $SpecialItemType;
        return $this;
    }

    /**
     * Product: ALL
     * True if the item is a subitem; false or null indicates a top-level
     * item.
     *
     * @return bool
     */
    public function getSubItem()
    {
        return $this->SubItem;
    }

    /**
     * Product: ALL
     * True if the item is a subitem; false or null indicates a top-level
     * item.
     *
     * @param bool $SubItem
     *
     * @return ItemModel
     */
    public function setSubItem(
        $SubItem
    )
    {
        $this->SubItem = $SubItem;
        return $this;
    }

    /**
     * Product: ALL
     * True if the item is subject to tax.
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * Product: ALL
     * True if the item is subject to tax.
     *
     * @param bool $Taxable
     *
     * @return ItemModel
     */
    public function setTaxable(
        $Taxable
    )
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * Product: QBO
     * Quantity on hand to be tracked.
     *
     * @return bool
     */
    public function getTrackQtyOnHand()
    {
        return $this->TrackQtyOnHand;
    }

    /**
     * Product: QBO
     * Quantity on hand to be tracked.
     *
     * @param bool $TrackQtyOnHand
     *
     * @return ItemModel
     */
    public function setTrackQtyOnHand(
        $TrackQtyOnHand
    )
    {
        $this->TrackQtyOnHand = $TrackQtyOnHand;
        return $this;
    }

    /**
     * Product: ALL
     * Classification that specifies the use of this item.  See the
     * description at the top of the Item entity page for details.
     * Filterable: ALL
     *
     * @return string
     *
     * @see ItemTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: ALL
     * Classification that specifies the use of this item.  See the
     * description at the top of the Item entity page for details.
     * Filterable: ALL
     *
     * @param string $Type
     *
     * @return ItemModel
     *
     * @see ItemTypeEnum
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * Product: ALL
     * Reference to the unit of measure set (UOM) entity used by this item.
     *
     * @return ReferenceTypeModel
     */
    public function getUOMSetRef()
    {
        return $this->UOMSetRef;
    }

    /**
     * Product: ALL
     * Reference to the unit of measure set (UOM) entity used by this item.
     *
     * @param ReferenceTypeModel $UOMSetRef
     *
     * @return ItemModel
     */
    public function setUOMSetRef(
        $UOMSetRef
    )
    {
        $this->UOMSetRef = $UOMSetRef;
        return $this;
    }

    /**
     * Product: ALL
     * Monetary value of the service or product, as expressed in the home
     * currency.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * Product: ALL
     * Monetary value of the service or product, as expressed in the home
     * currency.
     * Filterable: QBW
     * Sortable: QBW
     *
     * @param float $UnitPrice
     *
     * @return ItemModel
     */
    public function setUnitPrice(
        $UnitPrice
    )
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

}