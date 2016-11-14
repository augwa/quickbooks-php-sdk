<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: ALL
 * Describes the details of the attachment.
 *
 * Class AttachableModel
 * @package Augwa\QuickBooks\Model
 */
class AttachableModel
    extends IntuitEntityModel
{

    /**
     * @var IntuitAnyTypeModel
     */
    private $AttachableEx;

    /**
     * @var string
     */
    private $Category;

    /**
     * @var string
     */
    private $ContentType;

    /**
     * @var string
     */
    private $FileAccessUri;

    /**
     * @var string
     */
    private $FileName;

    /**
     * @var string
     */
    private $Lat;

    /**
     * @var string
     */
    private $Long;

    /**
     * @var string
     */
    private $Note;

    /**
     * @var string
     */
    private $PlaceName;

    /**
     * @var int
     */
    private $Size;

    /**
     * @var string
     */
    private $Tag;

    /**
     * @var string
     */
    private $TempDownloadUri;

    /**
     * @var string
     */
    private $ThumbnailFileAccessUri;

    /**
     * @var string
     */
    private $ThumbnailTempDownloadUri;


    /**
     * Specifies extension entity to allow extension
     *
     * @return IntuitAnyTypeModel
     */
    public function getAttachableEx()
    {
        return $this->AttachableEx;
    }

    /**
     * Specifies extension entity to allow extension
     *
     * @param IntuitAnyTypeModel $AttachableEx
     *
     * @return AttachableModel
     */
    public function setAttachableEx(
        $AttachableEx
    )
    {
        $this->AttachableEx = $AttachableEx;
        return $this;
    }

    /**
     * Category of the attachment
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * Category of the attachment
     *
     * @param string $Category
     *
     * @return AttachableModel
     */
    public function setCategory(
        $Category
    )
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * ContentType of the attachment
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->ContentType;
    }

    /**
     * ContentType of the attachment
     *
     * @param string $ContentType
     *
     * @return AttachableModel
     */
    public function setContentType(
        $ContentType
    )
    {
        $this->ContentType = $ContentType;
        return $this;
    }

    /**
     * FullPath FileAccess URI of the attachment, output only
     *
     * @return string
     */
    public function getFileAccessUri()
    {
        return $this->FileAccessUri;
    }

    /**
     * FullPath FileAccess URI of the attachment, output only
     *
     * @param string $FileAccessUri
     *
     * @return AttachableModel
     */
    public function setFileAccessUri(
        $FileAccessUri
    )
    {
        $this->FileAccessUri = $FileAccessUri;
        return $this;
    }

    /**
     * FileName of the attachment
     * Max Length: 1000
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * FileName of the attachment
     * Max Length: 1000
     *
     * @param string $FileName
     *
     * @return AttachableModel
     */
    public function setFileName(
        $FileName
    )
    {
        $this->FileName = $FileName;
        return $this;
    }

    /**
     * Latitude from where the attachment was requested
     *
     * @return string
     */
    public function getLat()
    {
        return $this->Lat;
    }

    /**
     * Latitude from where the attachment was requested
     *
     * @param string $Lat
     *
     * @return AttachableModel
     */
    public function setLat(
        $Lat
    )
    {
        $this->Lat = $Lat;
        return $this;
    }

    /**
     * Longitude from where the attachment was requested
     *
     * @return string
     */
    public function getLong()
    {
        return $this->Long;
    }

    /**
     * Longitude from where the attachment was requested
     *
     * @param string $Long
     *
     * @return AttachableModel
     */
    public function setLong(
        $Long
    )
    {
        $this->Long = $Long;
        return $this;
    }

    /**
     * Note for the attachment or standalone note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * Note for the attachment or standalone note
     *
     * @param string $Note
     *
     * @return AttachableModel
     */
    public function setNote(
        $Note
    )
    {
        $this->Note = $Note;
        return $this;
    }

    /**
     * PlaceName from where the attachment was requested
     *
     * @return string
     */
    public function getPlaceName()
    {
        return $this->PlaceName;
    }

    /**
     * PlaceName from where the attachment was requested
     *
     * @param string $PlaceName
     *
     * @return AttachableModel
     */
    public function setPlaceName(
        $PlaceName
    )
    {
        $this->PlaceName = $PlaceName;
        return $this;
    }

    /**
     * Size of the attachment
     *
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * Size of the attachment
     *
     * @param int $Size
     *
     * @return AttachableModel
     */
    public function setSize(
        $Size
    )
    {
        $this->Size = $Size;
        return $this;
    }

    /**
     * Tag name for the requested attachment
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Tag name for the requested attachment
     *
     * @param string $Tag
     *
     * @return AttachableModel
     */
    public function setTag(
        $Tag
    )
    {
        $this->Tag = $Tag;
        return $this;
    }

    /**
     * Output only. TempDownload URI which can be directly downloaded by
     * clients
     *
     * @return string
     */
    public function getTempDownloadUri()
    {
        return $this->TempDownloadUri;
    }

    /**
     * Output only. TempDownload URI which can be directly downloaded by
     * clients
     *
     * @param string $TempDownloadUri
     *
     * @return AttachableModel
     */
    public function setTempDownloadUri(
        $TempDownloadUri
    )
    {
        $this->TempDownloadUri = $TempDownloadUri;
        return $this;
    }

    /**
     * FullPath FileAccess URI of the attachment thumbnail if the attachment
     * file is of a content type with thumbnail support, output only
     *
     * @return string
     */
    public function getThumbnailFileAccessUri()
    {
        return $this->ThumbnailFileAccessUri;
    }

    /**
     * FullPath FileAccess URI of the attachment thumbnail if the attachment
     * file is of a content type with thumbnail support, output only
     *
     * @param string $ThumbnailFileAccessUri
     *
     * @return AttachableModel
     */
    public function setThumbnailFileAccessUri(
        $ThumbnailFileAccessUri
    )
    {
        $this->ThumbnailFileAccessUri = $ThumbnailFileAccessUri;
        return $this;
    }

    /**
     * Output only. Thumbnail TempDownload URI which can be directly
     * downloaded by clients. This is only available if the attachment file
     * is of a content type with thumbnail support
     *
     * @return string
     */
    public function getThumbnailTempDownloadUri()
    {
        return $this->ThumbnailTempDownloadUri;
    }

    /**
     * Output only. Thumbnail TempDownload URI which can be directly
     * downloaded by clients. This is only available if the attachment file
     * is of a content type with thumbnail support
     *
     * @param string $ThumbnailTempDownloadUri
     *
     * @return AttachableModel
     */
    public function setThumbnailTempDownloadUri(
        $ThumbnailTempDownloadUri
    )
    {
        $this->ThumbnailTempDownloadUri = $ThumbnailTempDownloadUri;
        return $this;
    }

}