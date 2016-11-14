<?php

namespace Augwa\QuickBooks\Model;

/**
 * Class CashBackInfoModel
 * @package Augwa\QuickBooks\Model
 */
class CashBackInfoModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var string
     */
    private $Memo;


    /**
     * AccountReferenceGroup Identifies the Asset Account (bank account) to
     * be used for this Cash back.
     * QuickBooks Notes
     * Required for the create operation.
     *
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * AccountReferenceGroup Identifies the Asset Account (bank account) to
     * be used for this Cash back.
     * QuickBooks Notes
     * Required for the create operation.
     *
     * @param ReferenceTypeModel $AccountRef
     *
     * @return CashBackInfoModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     *
     * @return CashBackInfoModel
     */
    public function setAmount(
        $Amount
    )
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
        return $this->Memo;
    }

    /**
     * @param string $Memo
     *
     * @return CashBackInfoModel
     */
    public function setMemo(
        $Memo
    )
    {
        $this->Memo = $Memo;
        return $this;
    }

}