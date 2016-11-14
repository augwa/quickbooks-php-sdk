<?php

namespace Augwa\QuickBooks\Model;

/**
 * Cash based expense type definition
 *
 * Class CashPurchaseModel
 * @package Augwa\QuickBooks\Model
 */
class CashPurchaseModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;


    /**
     * @return ReferenceTypeModel
     */
    public function getAccountRef()
    {
        return $this->AccountRef;
    }

    /**
     * @param ReferenceTypeModel $AccountRef
     *
     * @return CashPurchaseModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

}