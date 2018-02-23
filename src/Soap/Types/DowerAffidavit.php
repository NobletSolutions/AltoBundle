<?php

namespace NS\AltoBundle\Soap\Types;

class DowerAffidavit
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $DowerAffidavitOption = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $JudgementDate = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $ReleaseRegistrationDate = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $JudgementInstrumentNumber = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $ReleaseOfDowerRightsInstrumentNumber = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $DowerAffidavitOption
     * @var \NS\AltoBundle\Soap\Types\anyType $JudgementDate
     * @var \NS\AltoBundle\Soap\Types\anyType $ReleaseRegistrationDate
     * @var \NS\AltoBundle\Soap\Types\anyType $JudgementInstrumentNumber
     * @var \NS\AltoBundle\Soap\Types\anyType $ReleaseOfDowerRightsInstrumentNumber
     */
    public function __construct($DowerAffidavitOption, $JudgementDate, $ReleaseRegistrationDate, $JudgementInstrumentNumber, $ReleaseOfDowerRightsInstrumentNumber)
    {
        $this->DowerAffidavitOption = $DowerAffidavitOption;
        $this->JudgementDate = $JudgementDate;
        $this->ReleaseRegistrationDate = $ReleaseRegistrationDate;
        $this->JudgementInstrumentNumber = $JudgementInstrumentNumber;
        $this->ReleaseOfDowerRightsInstrumentNumber = $ReleaseOfDowerRightsInstrumentNumber;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDowerAffidavitOption()
    {
        return $this->DowerAffidavitOption;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $DowerAffidavitOption
     * @return DowerAffidavit
     */
    public function withDowerAffidavitOption($DowerAffidavitOption)
    {
        $new = clone $this;
        $new->DowerAffidavitOption = $DowerAffidavitOption;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getJudgementDate()
    {
        return $this->JudgementDate;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $JudgementDate
     * @return DowerAffidavit
     */
    public function withJudgementDate($JudgementDate)
    {
        $new = clone $this;
        $new->JudgementDate = $JudgementDate;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getReleaseRegistrationDate()
    {
        return $this->ReleaseRegistrationDate;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ReleaseRegistrationDate
     * @return DowerAffidavit
     */
    public function withReleaseRegistrationDate($ReleaseRegistrationDate)
    {
        $new = clone $this;
        $new->ReleaseRegistrationDate = $ReleaseRegistrationDate;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getJudgementInstrumentNumber()
    {
        return $this->JudgementInstrumentNumber;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $JudgementInstrumentNumber
     * @return DowerAffidavit
     */
    public function withJudgementInstrumentNumber($JudgementInstrumentNumber)
    {
        $new = clone $this;
        $new->JudgementInstrumentNumber = $JudgementInstrumentNumber;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getReleaseOfDowerRightsInstrumentNumber()
    {
        return $this->ReleaseOfDowerRightsInstrumentNumber;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ReleaseOfDowerRightsInstrumentNumber
     * @return DowerAffidavit
     */
    public function withReleaseOfDowerRightsInstrumentNumber($ReleaseOfDowerRightsInstrumentNumber)
    {
        $new = clone $this;
        $new->ReleaseOfDowerRightsInstrumentNumber = $ReleaseOfDowerRightsInstrumentNumber;

        return $new;
    }


}

