<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * TDS line detail for the transaction.
 *
 * Class TDSLineDetailModel
 * @package Augwa\QuickBooks\Model
 */
class TDSLineDetailModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $TDSAccountRef;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TDSLineDetailEx;

    /**
     * @var int
     */
    private $TDSSectionTypeId;


    /**
     * Product: QBO
     * Reference to TDS account associated with this transaction
     *
     * @return ReferenceTypeModel
     */
    public function getTDSAccountRef()
    {
        return $this->TDSAccountRef;
    }

    /**
     * Product: QBO
     * Reference to TDS account associated with this transaction
     *
     * @param ReferenceTypeModel $TDSAccountRef
     *
     * @return TDSLineDetailModel
     */
    public function setTDSAccountRef(
        $TDSAccountRef
    )
    {
        $this->TDSAccountRef = $TDSAccountRef;
        return $this;
    }

    /**
     * Product: QBO
     * Extension place holder for TDSLineDetail
     *
     * @return IntuitAnyTypeModel
     */
    public function getTDSLineDetailEx()
    {
        return $this->TDSLineDetailEx;
    }

    /**
     * Product: QBO
     * Extension place holder for TDSLineDetail
     *
     * @param IntuitAnyTypeModel $TDSLineDetailEx
     *
     * @return TDSLineDetailModel
     */
    public function setTDSLineDetailEx(
        $TDSLineDetailEx
    )
    {
        $this->TDSLineDetailEx = $TDSLineDetailEx;
        return $this;
    }

    /**
     * Product: QBO
     * TDS section type of the transaction.
     *
     * @return int
     */
    public function getTDSSectionTypeId()
    {
        return $this->TDSSectionTypeId;
    }

    /**
     * Product: QBO
     * TDS section type of the transaction.
     *
     * @param int $TDSSectionTypeId
     *
     * @return TDSLineDetailModel
     */
    public function setTDSSectionTypeId(
        $TDSSectionTypeId
    )
    {
        $this->TDSSectionTypeId = $TDSSectionTypeId;
        return $this;
    }

}