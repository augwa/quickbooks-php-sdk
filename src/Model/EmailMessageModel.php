<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBO
 * Base type holding default subject and message for transaction emails.
 *
 * Class EmailMessageModel
 * @package Augwa\QuickBooks\Model
 */
class EmailMessageModel
    extends Model
{

    /**
     * @var string
     */
    private $Message;

    /**
     * @var string
     */
    private $Subject;


    /**
     * Product: QBO
     * Message body for the email
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Product: QBO
     * Message body for the email
     *
     * @param string $Message
     *
     * @return EmailMessageModel
     */
    public function setMessage(
        $Message
    )
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * Product: QBO
     * Subject for the email
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * Product: QBO
     * Subject for the email
     *
     * @param string $Subject
     *
     * @return EmailMessageModel
     */
    public function setSubject(
        $Subject
    )
    {
        $this->Subject = $Subject;
        return $this;
    }

}