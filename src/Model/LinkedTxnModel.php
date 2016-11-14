<?php

namespace Augwa\QuickBooks\Model;

/**
 * That minimal subset of transaction information which is included on
 * another  transaction, so that a client viewing the second transaction
 * entity need not make an additional request to the service in order to
 * render it in human readable form.  (e.g a payment needs to refer to an
 * invoice by number)
 *
 * Class LinkedTxnModel
 * @package Augwa\QuickBooks\Model
 */
class LinkedTxnModel
    extends Model
{

    /**
     * @var string
     */
    private $TxnId;

    /**
     * @var string
     */
    private $TxnLineId;

    /**
     * @var string
     */
    private $TxnType;


    /**
     * Product: QBW
     * Transaction the current entity is related to (linked to), for example,
     * Sales Order.UNSUPPORTED FIELD.
     * Product: QBO
     * A list of Estimate Ids that are to be associated with the
     * invoice.Note: Only Pending and Accepted Estimates can be specified.
     * Closed and Rejected estimates will be ignored.
     *
     * @return string
     */
    public function getTxnId()
    {
        return $this->TxnId;
    }

    /**
     * Product: QBW
     * Transaction the current entity is related to (linked to), for example,
     * Sales Order.UNSUPPORTED FIELD.
     * Product: QBO
     * A list of Estimate Ids that are to be associated with the
     * invoice.Note: Only Pending and Accepted Estimates can be specified.
     * Closed and Rejected estimates will be ignored.
     *
     * @param string $TxnId
     *
     * @return LinkedTxnModel
     */
    public function setTxnId(
        $TxnId
    )
    {
        $this->TxnId = $TxnId;
        return $this;
    }

    /**
     * Product: ALL
     * A link to a specific line of the LinkedTxn.  If supplied the LinkedTxn
     * field must also be populated.
     *
     * @return string
     */
    public function getTxnLineId()
    {
        return $this->TxnLineId;
    }

    /**
     * Product: ALL
     * A link to a specific line of the LinkedTxn.  If supplied the LinkedTxn
     * field must also be populated.
     *
     * @param string $TxnLineId
     *
     * @return LinkedTxnModel
     */
    public function setTxnLineId(
        $TxnLineId
    )
    {
        $this->TxnLineId = $TxnLineId;
        return $this;
    }

    /**
     * Product: ALL
     * Transaction number.
     *
     * @return string
     */
    public function getTxnType()
    {
        return $this->TxnType;
    }

    /**
     * Product: ALL
     * Transaction number.
     *
     * @param string $TxnType
     *
     * @return LinkedTxnModel
     */
    public function setTxnType(
        $TxnType
    )
    {
        $this->TxnType = $TxnType;
        return $this;
    }

}