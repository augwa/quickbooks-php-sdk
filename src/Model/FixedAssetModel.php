<?php

namespace Augwa\QuickBooks\Model;

/**
 * An asset you do not expect to convert to cash during one year of
 * normal operations.
 * A fixed asset is usually something that is necessary for the operation
 * of your business, such as a truck, cash register, or computer.
 *
 * Class FixedAssetModel
 * @package Augwa\QuickBooks\Model
 */
class FixedAssetModel
    extends IntuitEntityModel
{

    /**
     * @var string
     * @see AcquiredAsEnum
     */
    private $AcquiredAs;

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var ReferenceTypeModel
     */
    private $AssetAccountRef;

    /**
     * @var int
     */
    private $AssetNum;

    /**
     * @var float
     */
    private $BookValue;

    /**
     * @var float
     */
    private $CostBasis;

    /**
     * @var float
     */
    private $Depreciation;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var IntuitAnyTypeModel
     */
    private $FixedAssetEx;

    /**
     * @var string
     */
    private $Location;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Notes;

    /**
     * @var string
     */
    private $PONumber;

    /**
     * @var float
     */
    private $PurchaseCost;

    /**
     * @var \DateTime
     */
    private $PurchaseDate;

    /**
     * @var string
     */
    private $PurchaseDesc;

    /**
     * @var \DateTime
     */
    private $SalesDate;

    /**
     * @var string
     */
    private $SalesDesc;

    /**
     * @var float
     */
    private $SalesExpense;

    /**
     * @var float
     */
    private $SalesPrice;

    /**
     * @var string
     */
    private $SerialNumber;

    /**
     * @var string
     */
    private $Vendor;

    /**
     * @var \DateTime
     */
    private $WarrantyExpDate;


    /**
     * Specifies whether the asset is new or used. This will aid in
     * calculating depreciation.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @return string
     *
     * @see AcquiredAsEnum
     */
    public function getAcquiredAs()
    {
        return $this->AcquiredAs;
    }

    /**
     * Specifies whether the asset is new or used. This will aid in
     * calculating depreciation.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @param string $AcquiredAs
     *
     * @return FixedAssetModel
     *
     * @see AcquiredAsEnum
     */
    public function setAcquiredAs(
        $AcquiredAs
    )
    {
        $this->AcquiredAs = $AcquiredAs;
        return $this;
    }

    /**
     * Whether or not active inactive fixed assets may be hidden from most
     * display purposes and may not be used on financial transactions.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not active inactive fixed assets may be hidden from most
     * display purposes and may not be used on financial transactions.
     *
     * @param bool $Active
     *
     * @return FixedAssetModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Indicates the Fixed Asset account that tracks the current value of the
     * asset. If the same account is used for all fixed assets, the current
     * balance of this account will represent the current total value of the
     * fixed assets.
     * 
     * Required for the create operation.
     *
     * @return ReferenceTypeModel
     */
    public function getAssetAccountRef()
    {
        return $this->AssetAccountRef;
    }

    /**
     * Indicates the Fixed Asset account that tracks the current value of the
     * asset. If the same account is used for all fixed assets, the current
     * balance of this account will represent the current total value of the
     * fixed assets.
     * 
     * Required for the create operation.
     *
     * @param ReferenceTypeModel $AssetAccountRef
     *
     * @return FixedAssetModel
     */
    public function setAssetAccountRef(
        $AssetAccountRef
    )
    {
        $this->AssetAccountRef = $AssetAccountRef;
        return $this;
    }

    /**
     * QBW only: asset number. Maintained by the QB Fixed Asset Manager.
     *
     * @return int
     */
    public function getAssetNum()
    {
        return $this->AssetNum;
    }

    /**
     * QBW only: asset number. Maintained by the QB Fixed Asset Manager.
     *
     * @param int $AssetNum
     *
     * @return FixedAssetModel
     */
    public function setAssetNum(
        $AssetNum
    )
    {
        $this->AssetNum = $AssetNum;
        return $this;
    }

    /**
     * QBW only: the asset's cost or basis less accumulated depreciation as
     * of the end of the year. Maintained by the QB Fixed Asset Manager.
     *
     * @return float
     */
    public function getBookValue()
    {
        return $this->BookValue;
    }

    /**
     * QBW only: the asset's cost or basis less accumulated depreciation as
     * of the end of the year. Maintained by the QB Fixed Asset Manager.
     *
     * @param float $BookValue
     *
     * @return FixedAssetModel
     */
    public function setBookValue(
        $BookValue
    )
    {
        $this->BookValue = $BookValue;
        return $this;
    }

    /**
     * QBW only: The total cost of the fixed asset. This can include the cost
     * of improvements or repairs. This amount is used to calculate
     * depreciation. Maintained by the QB Fixed Asset Manager.
     *
     * @return float
     */
    public function getCostBasis()
    {
        return $this->CostBasis;
    }

    /**
     * QBW only: The total cost of the fixed asset. This can include the cost
     * of improvements or repairs. This amount is used to calculate
     * depreciation. Maintained by the QB Fixed Asset Manager.
     *
     * @param float $CostBasis
     *
     * @return FixedAssetModel
     */
    public function setCostBasis(
        $CostBasis
    )
    {
        $this->CostBasis = $CostBasis;
        return $this;
    }

    /**
     * QBW only: the total amount of depreciation expense since the fixed
     * asset was acquired as of the end of the year. Maintained by the QB
     * Fixed Asset Manager.
     *
     * @return float
     */
    public function getDepreciation()
    {
        return $this->Depreciation;
    }

    /**
     * QBW only: the total amount of depreciation expense since the fixed
     * asset was acquired as of the end of the year. Maintained by the QB
     * Fixed Asset Manager.
     *
     * @param float $Depreciation
     *
     * @return FixedAssetModel
     */
    public function setDepreciation(
        $Depreciation
    )
    {
        $this->Depreciation = $Depreciation;
        return $this;
    }

    /**
     * Any description of the asset, like maker, brand, and so on.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Any description of the asset, like maker, brand, and so on.
     *
     * @param string $Description
     *
     * @return FixedAssetModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Internal use only: extension place holder for FixedAsset
     *
     * @return IntuitAnyTypeModel
     */
    public function getFixedAssetEx()
    {
        return $this->FixedAssetEx;
    }

    /**
     * Internal use only: extension place holder for FixedAsset
     *
     * @param IntuitAnyTypeModel $FixedAssetEx
     *
     * @return FixedAssetModel
     */
    public function setFixedAssetEx(
        $FixedAssetEx
    )
    {
        $this->FixedAssetEx = $FixedAssetEx;
        return $this;
    }

    /**
     * Information about where the asset is located or has been placed into
     * service.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * Information about where the asset is located or has been placed into
     * service.
     *
     * @param string $Location
     *
     * @return FixedAssetModel
     */
    public function setLocation(
        $Location
    )
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * User recognizable name for the Fixed Asset Item.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * User recognizable name for the Fixed Asset Item.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @param string $Name
     *
     * @return FixedAssetModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * Notes about the asset that might help to track it properly, such as
     * notes about repairs or upkeep.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * Notes about the asset that might help to track it properly, such as
     * notes about repairs or upkeep.
     *
     * @param string $Notes
     *
     * @return FixedAssetModel
     */
    public function setNotes(
        $Notes
    )
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * The purchase order number if a purchase order was used to buy the
     * asset.
     *
     * @return string
     */
    public function getPONumber()
    {
        return $this->PONumber;
    }

    /**
     * The purchase order number if a purchase order was used to buy the
     * asset.
     *
     * @param string $PONumber
     *
     * @return FixedAssetModel
     */
    public function setPONumber(
        $PONumber
    )
    {
        $this->PONumber = $PONumber;
        return $this;
    }

    /**
     * Specifies the asset's purchase price.
     *
     * @return float
     */
    public function getPurchaseCost()
    {
        return $this->PurchaseCost;
    }

    /**
     * Specifies the asset's purchase price.
     *
     * @param float $PurchaseCost
     *
     * @return FixedAssetModel
     */
    public function setPurchaseCost(
        $PurchaseCost
    )
    {
        $this->PurchaseCost = $PurchaseCost;
        return $this;
    }

    /**
     * Specifies the date the asset was purchased or acquired.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->PurchaseDate;
    }

    /**
     * Specifies the date the asset was purchased or acquired.
     * Length Restriction:
     * QBO: 15
     * QBW: 1024
     *
     * @param \DateTime $PurchaseDate
     *
     * @return FixedAssetModel
     */
    public function setPurchaseDate(
        $PurchaseDate
    )
    {
        $this->PurchaseDate = $PurchaseDate;
        return $this;
    }

    /**
     * User entered purchase description for the fixed asset which may
     * include user entered information to further describe the details of
     * the purchase.
     *
     * @return string
     */
    public function getPurchaseDesc()
    {
        return $this->PurchaseDesc;
    }

    /**
     * User entered purchase description for the fixed asset which may
     * include user entered information to further describe the details of
     * the purchase.
     *
     * @param string $PurchaseDesc
     *
     * @return FixedAssetModel
     */
    public function setPurchaseDesc(
        $PurchaseDesc
    )
    {
        $this->PurchaseDesc = $PurchaseDesc;
        return $this;
    }

    /**
     * Specifies the date the asset was sold.
     *
     * @return \DateTime
     */
    public function getSalesDate()
    {
        return $this->SalesDate;
    }

    /**
     * Specifies the date the asset was sold.
     *
     * @param \DateTime $SalesDate
     *
     * @return FixedAssetModel
     */
    public function setSalesDate(
        $SalesDate
    )
    {
        $this->SalesDate = $SalesDate;
        return $this;
    }

    /**
     * User entered sales description for the fixed asset which may include
     * user entered information to further describe the details of the sales.
     *
     * @return string
     */
    public function getSalesDesc()
    {
        return $this->SalesDesc;
    }

    /**
     * User entered sales description for the fixed asset which may include
     * user entered information to further describe the details of the sales.
     *
     * @param string $SalesDesc
     *
     * @return FixedAssetModel
     */
    public function setSalesDesc(
        $SalesDesc
    )
    {
        $this->SalesDesc = $SalesDesc;
        return $this;
    }

    /**
     * Additional expenses incurred during the sale of the asset.
     *
     * @return float
     */
    public function getSalesExpense()
    {
        return $this->SalesExpense;
    }

    /**
     * Additional expenses incurred during the sale of the asset.
     *
     * @param float $SalesExpense
     *
     * @return FixedAssetModel
     */
    public function setSalesExpense(
        $SalesExpense
    )
    {
        $this->SalesExpense = $SalesExpense;
        return $this;
    }

    /**
     * Specifies the amount for which the asset was sold.
     *
     * @return float
     */
    public function getSalesPrice()
    {
        return $this->SalesPrice;
    }

    /**
     * Specifies the amount for which the asset was sold.
     *
     * @param float $SalesPrice
     *
     * @return FixedAssetModel
     */
    public function setSalesPrice(
        $SalesPrice
    )
    {
        $this->SalesPrice = $SalesPrice;
        return $this;
    }

    /**
     * The serial number of the asset. For a vehicle, it can be the VIN.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }

    /**
     * The serial number of the asset. For a vehicle, it can be the VIN.
     *
     * @param string $SerialNumber
     *
     * @return FixedAssetModel
     */
    public function setSerialNumber(
        $SerialNumber
    )
    {
        $this->SerialNumber = $SerialNumber;
        return $this;
    }

    /**
     * Specifies the name of the vendor or payee from whom the asset was
     * purchased.
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->Vendor;
    }

    /**
     * Specifies the name of the vendor or payee from whom the asset was
     * purchased.
     *
     * @param string $Vendor
     *
     * @return FixedAssetModel
     */
    public function setVendor(
        $Vendor
    )
    {
        $this->Vendor = $Vendor;
        return $this;
    }

    /**
     * The date the warranty for the asset expires.
     *
     * @return \DateTime
     */
    public function getWarrantyExpDate()
    {
        return $this->WarrantyExpDate;
    }

    /**
     * The date the warranty for the asset expires.
     *
     * @param \DateTime $WarrantyExpDate
     *
     * @return FixedAssetModel
     */
    public function setWarrantyExpDate(
        $WarrantyExpDate
    )
    {
        $this->WarrantyExpDate = $WarrantyExpDate;
        return $this;
    }

}