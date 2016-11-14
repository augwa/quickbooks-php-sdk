<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class FinanceChargePrefsModel
 * @package Augwa\QuickBooks\Model
 */
class FinanceChargePrefsModel
    extends Model
{

    /**
     * @var float
     */
    private $AnnualInterestRate;

    /**
     * @var bool
     */
    private $AssessFinChrgForOverdueCharges;

    /**
     * @var bool
     */
    private $CalcFinChrgFromTxnDate;

    /**
     * @var ReferenceTypeModel
     */
    private $FinChrgAccountRef;

    /**
     * @var int
     */
    private $GracePeriod;

    /**
     * @var float
     */
    private $MinFinChrg;


    /**
     * Product:QBW
     * Annual Interest Rate in percent
     *
     * @return float
     */
    public function getAnnualInterestRate()
    {
        return $this->AnnualInterestRate;
    }

    /**
     * Product:QBW
     * Annual Interest Rate in percent
     *
     * @param float $AnnualInterestRate
     *
     * @return FinanceChargePrefsModel
     */
    public function setAnnualInterestRate(
        $AnnualInterestRate
    )
    {
        $this->AnnualInterestRate = $AnnualInterestRate;
        return $this;
    }

    /**
     * Product:QBW
     * True if finance charges should apply to overdue charges, in which case
     * the charges will be applied to the account referenced in
     * FinChrgAccountRef
     *
     * @return bool
     */
    public function getAssessFinChrgForOverdueCharges()
    {
        return $this->AssessFinChrgForOverdueCharges;
    }

    /**
     * Product:QBW
     * True if finance charges should apply to overdue charges, in which case
     * the charges will be applied to the account referenced in
     * FinChrgAccountRef
     *
     * @param bool $AssessFinChrgForOverdueCharges
     *
     * @return FinanceChargePrefsModel
     */
    public function setAssessFinChrgForOverdueCharges(
        $AssessFinChrgForOverdueCharges
    )
    {
        $this->AssessFinChrgForOverdueCharges = $AssessFinChrgForOverdueCharges;
        return $this;
    }

    /**
     * Product:QBW
     * If true, the Finance Charges are calculated from the transaction date
     * (Invoice, or Bill).
     * If false, the Finance Charges are calculated from the due date.
     *
     * @return bool
     */
    public function getCalcFinChrgFromTxnDate()
    {
        return $this->CalcFinChrgFromTxnDate;
    }

    /**
     * Product:QBW
     * If true, the Finance Charges are calculated from the transaction date
     * (Invoice, or Bill).
     * If false, the Finance Charges are calculated from the due date.
     *
     * @param bool $CalcFinChrgFromTxnDate
     *
     * @return FinanceChargePrefsModel
     */
    public function setCalcFinChrgFromTxnDate(
        $CalcFinChrgFromTxnDate
    )
    {
        $this->CalcFinChrgFromTxnDate = $CalcFinChrgFromTxnDate;
        return $this;
    }

    /**
     * Product:QBW
     * QuickBooks Notes
     * Max Length: 31 or 159 (for a fully qualified name)
     *
     * @return ReferenceTypeModel
     */
    public function getFinChrgAccountRef()
    {
        return $this->FinChrgAccountRef;
    }

    /**
     * Product:QBW
     * QuickBooks Notes
     * Max Length: 31 or 159 (for a fully qualified name)
     *
     * @param ReferenceTypeModel $FinChrgAccountRef
     *
     * @return FinanceChargePrefsModel
     */
    public function setFinChrgAccountRef(
        $FinChrgAccountRef
    )
    {
        $this->FinChrgAccountRef = $FinChrgAccountRef;
        return $this;
    }

    /**
     * Product:QBW
     *
     * @return int
     */
    public function getGracePeriod()
    {
        return $this->GracePeriod;
    }

    /**
     * Product:QBW
     *
     * @param int $GracePeriod
     *
     * @return FinanceChargePrefsModel
     */
    public function setGracePeriod(
        $GracePeriod
    )
    {
        $this->GracePeriod = $GracePeriod;
        return $this;
    }

    /**
     * Product:QBW
     *
     * @return float
     */
    public function getMinFinChrg()
    {
        return $this->MinFinChrg;
    }

    /**
     * Product:QBW
     *
     * @param float $MinFinChrg
     *
     * @return FinanceChargePrefsModel
     */
    public function setMinFinChrg(
        $MinFinChrg
    )
    {
        $this->MinFinChrg = $MinFinChrg;
        return $this;
    }

}