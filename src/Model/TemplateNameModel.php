<?php

namespace Augwa\QuickBooks\Model;

/**
 * The name of a template used for a specific form presentation.
 *
 * Class TemplateNameModel
 * @package Augwa\QuickBooks\Model
 */
class TemplateNameModel
    extends IntuitEntityModel
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     * @see TemplateTypeEnum
     */
    private $Type;


    /**
     * Whether or not active inactive templates may be hidden from most
     * display purposes and may not be used on financial tansactions.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Whether or not active inactive templates may be hidden from most
     * display purposes and may not be used on financial tansactions.
     *
     * @param bool $Active
     *
     * @return TemplateNameModel
     */
    public function setActive(
        $Active
    )
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * User recognizable name for the Template name.
     * 
     * Required for the create operation.
     * Max Length: 31
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * User recognizable name for the Template name.
     * 
     * Required for the create operation.
     * Max Length: 31
     *
     * @param string $Name
     *
     * @return TemplateNameModel
     */
    public function setName(
        $Name
    )
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     *
     * @see TemplateTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return TemplateNameModel
     *
     * @see TemplateTypeEnum
     */
    public function setType(
        $Type
    )
    {
        $this->Type = $Type;
        return $this;
    }

}