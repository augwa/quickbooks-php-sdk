<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * Describes metadata associated with TDS entity.
 *
 * Class TDSMetadataModel
 * @package Augwa\QuickBooks\Model
 */
class TDSMetadataModel
    extends IntuitEntityModel
{

    /**
     * @var NameValueModel
     */
    private $TDSEntityTypes;

    /**
     * @var NameValueModel
     */
    private $TDSSectionTypes;


    /**
     * Product: QBO
     * Provides list of TDS entity types supported for India region.
     *
     * @return NameValueModel
     */
    public function getTDSEntityTypes()
    {
        return $this->TDSEntityTypes;
    }

    /**
     * Product: QBO
     * Provides list of TDS entity types supported for India region.
     *
     * @param NameValueModel $TDSEntityTypes
     *
     * @return TDSMetadataModel
     */
    public function setTDSEntityTypes(
        $TDSEntityTypes
    )
    {
        $this->TDSEntityTypes = $TDSEntityTypes;
        return $this;
    }

    /**
     * Product: QBO
     * Provides list of TDS section types supported for India region.
     *
     * @return NameValueModel
     */
    public function getTDSSectionTypes()
    {
        return $this->TDSSectionTypes;
    }

    /**
     * Product: QBO
     * Provides list of TDS section types supported for India region.
     *
     * @param NameValueModel $TDSSectionTypes
     *
     * @return TDSMetadataModel
     */
    public function setTDSSectionTypes(
        $TDSSectionTypes
    )
    {
        $this->TDSSectionTypes = $TDSSectionTypes;
        return $this;
    }

}