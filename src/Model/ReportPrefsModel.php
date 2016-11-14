<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines Report Prefs details
 *
 * Class ReportPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class ReportPrefsModel
    extends Model
{

    /**
     * @var bool
     */
    private $CalcAgingReportFromTxnDate;

    /**
     * @var string
     * @see ReportBasisEnum
     */
    private $ReportBasis;


    /**
     * Product:QBW
     * If true, the Aging Reports are based on the transaction date.
     * If false, the Aging Reports are based on the due date.
     *
     * @return bool
     */
    public function getCalcAgingReportFromTxnDate()
    {
        return $this->CalcAgingReportFromTxnDate;
    }

    /**
     * Product:QBW
     * If true, the Aging Reports are based on the transaction date.
     * If false, the Aging Reports are based on the due date.
     *
     * @param bool $CalcAgingReportFromTxnDate
     *
     * @return ReportPrefsModel
     */
    public function setCalcAgingReportFromTxnDate(
        $CalcAgingReportFromTxnDate
    )
    {
        $this->CalcAgingReportFromTxnDate = $CalcAgingReportFromTxnDate;
        return $this;
    }

    /**
     * Product:All
     * Report basis
     *
     * @return string
     *
     * @see ReportBasisEnum
     */
    public function getReportBasis()
    {
        return $this->ReportBasis;
    }

    /**
     * Product:All
     * Report basis
     *
     * @param string $ReportBasis
     *
     * @return ReportPrefsModel
     *
     * @see ReportBasisEnum
     */
    public function setReportBasis(
        $ReportBasis
    )
    {
        $this->ReportBasis = $ReportBasis;
        return $this;
    }

}