<?php

namespace Augwa\QuickBooks\Model;

/**
 * Product: QBW
 * Details for the Job. This is applicable only to QuickBooks Windows
 * desktop.
 *
 * Class JobInfoModel
 * @package Augwa\QuickBooks\Model
 */
class JobInfoModel
    extends Model
{

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \DateTime
     */
    private $EndDate;

    /**
     * @var ReferenceTypeModel
     */
    private $JobTypeRef;

    /**
     * @var \DateTime
     */
    private $ProjectedEndDate;

    /**
     * @var \DateTime
     */
    private $StartDate;

    /**
     * @var string
     * @see JobStatusEnum
     */
    private $Status;


    /**
     * Product: QBW
     * Job description. Max. length: 99 characters.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Product: QBW
     * Job description. Max. length: 99 characters.
     *
     * @param string $Description
     *
     * @return JobInfoModel
     */
    public function setDescription(
        $Description
    )
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Product: QBW
     * End date of the job.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Product: QBW
     * End date of the job.
     *
     * @param \DateTime $EndDate
     *
     * @return JobInfoModel
     */
    public function setEndDate(
        $EndDate
    )
    {
        $this->EndDate = $EndDate;
        return $this;
    }

    /**
     * Product: QBW
     * Reference to the JobType.
     *
     * @return ReferenceTypeModel
     */
    public function getJobTypeRef()
    {
        return $this->JobTypeRef;
    }

    /**
     * Product: QBW
     * Reference to the JobType.
     *
     * @param ReferenceTypeModel $JobTypeRef
     *
     * @return JobInfoModel
     */
    public function setJobTypeRef(
        $JobTypeRef
    )
    {
        $this->JobTypeRef = $JobTypeRef;
        return $this;
    }

    /**
     * Product: QBW
     * Projected end date of the job.
     *
     * @return \DateTime
     */
    public function getProjectedEndDate()
    {
        return $this->ProjectedEndDate;
    }

    /**
     * Product: QBW
     * Projected end date of the job.
     *
     * @param \DateTime $ProjectedEndDate
     *
     * @return JobInfoModel
     */
    public function setProjectedEndDate(
        $ProjectedEndDate
    )
    {
        $this->ProjectedEndDate = $ProjectedEndDate;
        return $this;
    }

    /**
     * Product: QBW
     * Starting date of the Job.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Product: QBW
     * Starting date of the Job.
     *
     * @param \DateTime $StartDate
     *
     * @return JobInfoModel
     */
    public function setStartDate(
        $StartDate
    )
    {
        $this->StartDate = $StartDate;
        return $this;
    }

    /**
     * Product: ALL
     * Current status of the job. Valid values are: Awarded, Closed,
     * InProgress, None, NotAwarded, Pending, as defined in the
     * JobStatusEnum.
     *
     * @return string
     *
     * @see JobStatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Product: ALL
     * Current status of the job. Valid values are: Awarded, Closed,
     * InProgress, None, NotAwarded, Pending, as defined in the
     * JobStatusEnum.
     *
     * @param string $Status
     *
     * @return JobInfoModel
     *
     * @see JobStatusEnum
     */
    public function setStatus(
        $Status
    )
    {
        $this->Status = $Status;
        return $this;
    }

}