<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * The InventorySite resource represents a location where inventory is
 * stored.
 * Endpoint: inventorysite
 * Business Rules: The site name must be unique.
 *
 * Class InventorySiteModel
 * @package Augwa\QuickBooks\Model
 */
class InventorySiteModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var PhysicalAddressModel
     */
    private $Addr;

    /**
     * @var string
     */
    private $Contact;

    /**
     * @var ContactInfoModel
     */
    private $ContactInfo;

    /**
     * @var bool
     */
    private $DefaultSite;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var IntuitAnyTypeModel
     */
    private $InventorySiteEx;

    /**
     * @var string
     */
    private $Name;


    /**
     * Product: QBW
     * Filterable: QBW
     * Whether the site is considered "active", still in use by the business
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBW
     * Filterable: QBW
     * Whether the site is considered "active", still in use by the business
     *
     * @param bool $Active
     *
     * @return InventorySiteModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: QBW
     * Tagged postal addresses
     *
     * @return PhysicalAddressModel
     */
    public function getAddr()
    {
        return $this->Addr;
    }

    /**
     * Product: QBW
     * Tagged postal addresses
     *
     * @param PhysicalAddressModel $Addr
     *
     * @return InventorySiteModel
     */
    public function setAddr(
        $Addr
    )
    {
        $this->Addr = $Addr;
        return $this;
    }

    /**
     * Product: QBW
     * Name of the person responsible for the site
     *
     * @return string
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * Product: QBW
     * Name of the person responsible for the site
     *
     * @param string $Contact
     *
     * @return InventorySiteModel
     */
    public function setContact(
        $Contact
    )
    {
        $this->Contact = $Contact;
        return $this;
    }

    /**
     * Product: QBW
     * Tagged phone number, possibly include pagers.
     *
     * @return ContactInfoModel
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }

    /**
     * Product: QBW
     * Tagged phone number, possibly include pagers.
     *
     * @param ContactInfoModel $ContactInfo
     *
     * @return InventorySiteModel
     */
    public function setContactInfo(
        $ContactInfo
    )
    {
        $this->ContactInfo = $ContactInfo;
        return $this;
    }

    /**
     * Product: QBW
     * Whether this is the default site for inventory items that do not
     * indicate a site
     *
     * @return bool
     */
    public function getDefaultSite()
    {
        return $this->DefaultSite;
    }

    /**
     * Product: QBW
     * Whether this is the default site for inventory items that do not
     * indicate a site
     *
     * @param bool $DefaultSite
     *
     * @return InventorySiteModel
     */
    public function setDefaultSite(
        $DefaultSite
    )
    {
        $this->DefaultSite = $DefaultSite;
        return $this;
    }

    /**
     * Product: QBW
     * Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Product: QBW
     * Description
     *
     * @param string $Description
     *
     * @return InventorySiteModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Internal use only: extension place holder for InventorySite
     *
     * @return IntuitAnyTypeModel
     */
    public function getInventorySiteEx()
    {
        return $this->InventorySiteEx;
    }

    /**
     * Internal use only: extension place holder for InventorySite
     *
     * @param IntuitAnyTypeModel $InventorySiteEx
     *
     * @return InventorySiteModel
     */
    public function setInventorySiteEx(
        $InventorySiteEx
    )
    {
        $this->InventorySiteEx = $InventorySiteEx;
        return $this;
    }

    /**
     * Product: QBW
     * Filterable: QBW
     * User recognizable name for the site
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Product: QBW
     * Filterable: QBW
     * User recognizable name for the site
     *
     * @param string $Name
     *
     * @return InventorySiteModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

}