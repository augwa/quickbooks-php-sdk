<?php

namespace Augwa\QuickBooks\Model;

/**
 * Defines Messages Prefs details
 *
 * Class PrintDocumentPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class PrintDocumentPrefsModel
    extends Model
{

    /**
     * @var NameValueModel
     */
    private $NameValue;


    /**
     * Specifies Preferences classified as email messages are classified as
     * Name-Value pair
     *
     * @return NameValueModel
     */
    public function getNameValue()
    {
        return $this->NameValue;
    }

    /**
     * Specifies Preferences classified as email messages are classified as
     * Name-Value pair
     *
     * @param NameValueModel $NameValue
     *
     * @return PrintDocumentPrefsModel
     */
    public function setNameValue(
        $NameValue
    )
    {
        $this->NameValue = $NameValue;
        return $this;
    }

}