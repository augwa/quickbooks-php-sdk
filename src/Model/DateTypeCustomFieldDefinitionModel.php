<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Provides for strong-typing of the DateType CustomField.
 *
 * Class DateTypeCustomFieldDefinitionModel
 * @package Augwa\QuickBooks\Model
 */
class DateTypeCustomFieldDefinitionModel
    extends CustomFieldDefinitionModel
{

    /**
     * @var \DateTime
     */
    private $DefaultDate;

    /**
     * @var \DateTime
     */
    private $MaxDate;

    /**
     * @var \DateTime
     */
    private $MinDate;


    /**
     * Product: ALL
     * Default date value for the DateType CustomField.
     *
     * @return \DateTime
     */
    public function getDefaultDate()
    {
        return $this->DefaultDate;
    }

    /**
     * Product: ALL
     * Default date value for the DateType CustomField.
     *
     * @param \DateTime $DefaultDate
     *
     * @return DateTypeCustomFieldDefinitionModel
     */
    public function setDefaultDate(
        $DefaultDate
    )
    {
        $this->DefaultDate = $DefaultDate;
        return $this;
    }

    /**
     * Product: ALL
     * Maximum date value allowed when the DateType CustomField is
     * created/updated.
     *
     * @return \DateTime
     */
    public function getMaxDate()
    {
        return $this->MaxDate;
    }

    /**
     * Product: ALL
     * Maximum date value allowed when the DateType CustomField is
     * created/updated.
     *
     * @param \DateTime $MaxDate
     *
     * @return DateTypeCustomFieldDefinitionModel
     */
    public function setMaxDate(
        $MaxDate
    )
    {
        $this->MaxDate = $MaxDate;
        return $this;
    }

    /**
     * Product: ALL
     * Minimum date value allowed when the DateType CustomField is
     * created/updated.
     *
     * @return \DateTime
     */
    public function getMinDate()
    {
        return $this->MinDate;
    }

    /**
     * Product: ALL
     * Minimum date value allowed when the DateType CustomField is
     * created/updated.
     *
     * @param \DateTime $MinDate
     *
     * @return DateTypeCustomFieldDefinitionModel
     */
    public function setMinDate(
        $MinDate
    )
    {
        $this->MinDate = $MinDate;
        return $this;
    }

}