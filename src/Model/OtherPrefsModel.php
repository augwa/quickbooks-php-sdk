<?php

namespace Augwa\QuickBooks\Model;

/**
 * Any other preference not covered in base is covered as name value
 * pair, for detailed explanation look at the document
 *
 * Class OtherPrefsModel
 * @package Augwa\QuickBooks\Model
 */
class OtherPrefsModel
    extends Model
{

    /**
     * @var NameValueModel
     */
    private $NameValue;


    /**
     * Specifies extension of Preference entity to allow extension of
     * Name-Value pair based extension at the top level
     *
     * @return NameValueModel
     */
    public function getNameValue()
    {
        return $this->NameValue;
    }

    /**
     * Specifies extension of Preference entity to allow extension of
     * Name-Value pair based extension at the top level
     *
     * @param NameValueModel $NameValue
     *
     * @return OtherPrefsModel
     */
    public function setNameValue(
        $NameValue
    )
    {
        $this->NameValue = $NameValue;
        return $this;
    }

}