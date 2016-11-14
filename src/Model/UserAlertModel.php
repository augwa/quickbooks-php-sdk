<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * A specific user alert to be notified to Quickbooks user, maps to a
 * ToDo record in QuickBooks.
 *
 * Class UserAlertModel
 * @package Augwa\QuickBooks\Model
 */
class UserAlertModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var bool
     */
    private $Done;

    /**
     * @var \DateTime
     */
    private $DueDate;

    /**
     * @var \DateTime
     */
    private $ExpireDate;

    /**
     * @var string
     */
    private $Filter;

    /**
     * @var NameValueModel
     */
    private $NameValue;

    /**
     * @var string
     */
    private $Notes;

    /**
     * @var \DateTime
     */
    private $ReminderDate;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var string
     */
    private $URL;

    /**
     * @var IntuitAnyTypeModel
     */
    private $UserAlertEx;


    /**
     * Product: QBW
     * In use by the business
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Product: QBW
     * In use by the business
     *
     * @param bool $Active
     *
     * @return UserAlertModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * Product: QBW
     * True if the user alert has been completed
     *
     * @return bool
     */
    public function getDone()
    {
        return $this->Done;
    }

    /**
     * Product: QBW
     * True if the user alert has been completed
     *
     * @param bool $Done
     *
     * @return UserAlertModel
     */
    public function setDone(
        $Done
    )
    {
        $this->Done = $Done;
        return $this;
    }

    /**
     * Product: QBO
     * The date the user alert is due
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * Product: QBO
     * The date the user alert is due
     *
     * @param \DateTime $DueDate
     *
     * @return UserAlertModel
     */
    public function setDueDate(
        $DueDate
    )
    {
        $this->DueDate = $DueDate;
        return $this;
    }

    /**
     * Product: QBO
     * The date the user alert will expire
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }

    /**
     * Product: QBO
     * The date the user alert will expire
     *
     * @param \DateTime $ExpireDate
     *
     * @return UserAlertModel
     */
    public function setExpireDate(
        $ExpireDate
    )
    {
        $this->ExpireDate = $ExpireDate;
        return $this;
    }

    /**
     * Product: QBO
     * The filter associated with the user alert
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Product: QBO
     * The filter associated with the user alert
     *
     * @param string $Filter
     *
     * @return UserAlertModel
     */
    public function setFilter(
        $Filter
    )
    {
        $this->Filter = $Filter;
        return $this;
    }

    /**
     * Any other properties not covered in base is covered as name value
     * pair, for detailed explanation look at the document
     *
     * @return NameValueModel
     */
    public function getNameValue()
    {
        return $this->NameValue;
    }

    /**
     * Any other properties not covered in base is covered as name value
     * pair, for detailed explanation look at the document
     *
     * @param NameValueModel $NameValue
     *
     * @return UserAlertModel
     */
    public function setNameValue(
        $NameValue
    )
    {
        $this->NameValue = $NameValue;
        return $this;
    }

    /**
     * Product: ALL
     * The actual content of the user alert
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * Product: ALL
     * The actual content of the user alert
     *
     * @param string $Notes
     *
     * @return UserAlertModel
     */
    public function setNotes(
        $Notes
    )
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * Product: ALL
     * The date to remind the user of this user alert
     *
     * @return \DateTime
     */
    public function getReminderDate()
    {
        return $this->ReminderDate;
    }

    /**
     * Product: ALL
     * The date to remind the user of this user alert
     *
     * @param \DateTime $ReminderDate
     *
     * @return UserAlertModel
     */
    public function setReminderDate(
        $ReminderDate
    )
    {
        $this->ReminderDate = $ReminderDate;
        return $this;
    }

    /**
     * Product: QBO
     * The type of the user alert
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Product: QBO
     * The type of the user alert
     *
     * @param string $Type
     *
     * @return UserAlertModel
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * Product: QBO
     * The URL that can be included in the user alert
     *
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Product: QBO
     * The URL that can be included in the user alert
     *
     * @param string $URL
     *
     * @return UserAlertModel
     */
    public function setURL(
        $URL
    )
    {
        $this->URL = $URL;
        return $this;
    }

    /**
     * Internal use only: extension place holder for user alert
     *
     * @return IntuitAnyTypeModel
     */
    public function getUserAlertEx()
    {
        return $this->UserAlertEx;
    }

    /**
     * Internal use only: extension place holder for user alert
     *
     * @param IntuitAnyTypeModel $UserAlertEx
     *
     * @return UserAlertModel
     */
    public function setUserAlertEx(
        $UserAlertEx
    )
    {
        $this->UserAlertEx = $UserAlertEx;
        return $this;
    }

}