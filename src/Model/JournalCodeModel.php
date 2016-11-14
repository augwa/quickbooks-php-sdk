<?php

namespace Augwa\QuickBooks\Model;

/**
 * Journal Code is a compliance requirement in FR. A journal code is
 * assigned to each transaction and it depends on whether it is a income
 * or a expense.
 *
 * Class JournalCodeModel
 * @package Augwa\QuickBooks\Model
 */
class JournalCodeModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var IntuitAnyTypeModel
     */
    private $JournalCodeEx;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Type;


    /**
     * Whether or not Journal codes may be hidden for display purposes
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not Journal codes may be hidden for display purposes
     *
     * @param bool $Active
     *
     * @return JournalCodeModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * The description of the Journal Code
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * The description of the Journal Code
     *
     * @param string $Description
     *
     * @return JournalCodeModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Internal use only: extension place holder for Journal Code extensible
     * element
     *
     * @return IntuitAnyTypeModel
     */
    public function getJournalCodeEx()
    {
        return $this->JournalCodeEx;
    }

    /**
     * Internal use only: extension place holder for Journal Code extensible
     * element
     *
     * @param IntuitAnyTypeModel $JournalCodeEx
     *
     * @return JournalCodeModel
     */
    public function setJournalCodeEx(
        $JournalCodeEx
    )
    {
        $this->JournalCodeEx = $JournalCodeEx;
        return $this;
    }

    /**
     * The two letter name for the journal code
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * The two letter name for the journal code
     *
     * @param string $Name
     *
     * @return JournalCodeModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * The type of the Journal Code. The applicable values are those exposed
     * through the JournalCodeTypeEnum.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * The type of the Journal Code. The applicable values are those exposed
     * through the JournalCodeTypeEnum.
     *
     * @param string $Type
     *
     * @return JournalCodeModel
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}