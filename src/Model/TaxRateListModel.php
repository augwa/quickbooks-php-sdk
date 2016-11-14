<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class TaxRateListModel
 * @package Augwa\QuickBooks\Model
 */
class TaxRateListModel
    extends Model
{

    /**
     * @var TaxRateDetailModel
     */
    private $TaxRateDetail;


    /**
     * Product: All
     * TaxRateDetail that specifies qualified detail of TaxRate
     *
     * @return TaxRateDetailModel
     */
    public function getTaxRateDetail()
    {
        return $this->TaxRateDetail;
    }

    /**
     * Product: All
     * TaxRateDetail that specifies qualified detail of TaxRate
     *
     * @param TaxRateDetailModel $TaxRateDetail
     *
     * @return TaxRateListModel
     */
    public function setTaxRateDetail(
        $TaxRateDetail
    )
    {
        $this->TaxRateDetail = $TaxRateDetail;
        return $this;
    }

}