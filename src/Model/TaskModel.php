<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * A specific task to be completed, maps to a ToDo record in QuickBooks.
 *
 * Class TaskModel
 * @package Augwa\QuickBooks\Model
 */
class TaskModel
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
     * @var string
     */
    private $From;

    /**
     * @var string
     */
    private $Notes;

    /**
     * @var \DateTime
     */
    private $ReminderDate;

    /**
     * @var IntuitAnyTypeModel
     */
    private $TaskEx;


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
     * @return TaskModel
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
     * True if the task has been completed
     *
     * @return bool
     */
    public function getDone()
    {
        return $this->Done;
    }

    /**
     * Product: QBW
     * True if the task has been completed
     *
     * @param bool $Done
     *
     * @return TaskModel
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
     * In use by the business
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * Product: QBO
     * In use by the business
     *
     * @param string $From
     *
     * @return TaskModel
     */
    public function setFrom(
        $From
    )
    {
        $this->From = $From;
        return $this;
    }

    /**
     * Product: QBW
     * The actual content of the task reminder
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * Product: QBW
     * The actual content of the task reminder
     *
     * @param string $Notes
     *
     * @return TaskModel
     */
    public function setNotes(
        $Notes
    )
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * Product: QBW
     * The date to remind the user of this task
     *
     * @return \DateTime
     */
    public function getReminderDate()
    {
        return $this->ReminderDate;
    }

    /**
     * Product: QBW
     * The date to remind the user of this task
     *
     * @param \DateTime $ReminderDate
     *
     * @return TaskModel
     */
    public function setReminderDate(
        $ReminderDate
    )
    {
        $this->ReminderDate = $ReminderDate;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Task
     *
     * @return IntuitAnyTypeModel
     */
    public function getTaskEx()
    {
        return $this->TaskEx;
    }

    /**
     * Internal use only: extension place holder for Task
     *
     * @param IntuitAnyTypeModel $TaskEx
     *
     * @return TaskModel
     */
    public function setTaskEx(
        $TaskEx
    )
    {
        $this->TaskEx = $TaskEx;
        return $this;
    }

}