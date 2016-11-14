<?php

namespace Augwa\QuickBooks\Model;

/**
 * Financial Transaction information that pertains to the entire Check.
 *
 * Class CreditCardPurchaseModel
 * @package Augwa\QuickBooks\Model
 */
class CreditCardPurchaseModel
    extends Model
{

    /**
     * @var ReferenceTypeModel
     */
    private $AccountRef;

    /**
     * @var bool
     */
    private $Credit;


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
     * @return CreditCardPurchaseModel
     */
    public function setAccountRef(
        $AccountRef
    )
    {
        $this->AccountRef = $AccountRef;
        return $this;
    }

    /**
     * If false or null it represents a CreditCard charge expense, true
     * represent Credit (money-in or returned)
     *
     * @return bool
     */
    public function getCredit()
    {
        return $this->Credit;
    }

    /**
     * If false or null it represents a CreditCard charge expense, true
     * represent Credit (money-in or returned)
     *
     * @param bool $Credit
     *
     * @return CreditCardPurchaseModel
     */
    public function setCredit(
        $Credit
    )
    {
        $this->Credit = $Credit;
        return $this;
    }

}