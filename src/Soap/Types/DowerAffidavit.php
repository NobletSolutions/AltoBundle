<?php

namespace NS\AltoBundle\Soap\Types;

use NS\AltoBundle\Soap\Exceptions\InvalidOptionException;

class DowerAffidavit
{
    /** @var string */
    private $DowerAffidavitOption = null;

    /** @var \DateTime */
    private $JudgementDate = null;

    /** @var \DateTime */
    private $ReleaseRegistrationDate = null;

    /** @var string */
    private $JudgementInstrumentNumber = null;

    /** @var string */
    private $ReleaseOfDowerRightsInstrumentNumber = null;

    /**
     * Constructor
     *
     * @param string $DowerAffidavitOption
     * @param \DateTime $JudgementDate
     * @param \DateTime $ReleaseRegistrationDate
     * @param string $JudgementInstrumentNumber
     * @param string $ReleaseOfDowerRightsInstrumentNumber
     */
    public function __construct(string $DowerAffidavitOption, \DateTime $JudgementDate, \DateTime $ReleaseRegistrationDate, string $JudgementInstrumentNumber = null, string $ReleaseOfDowerRightsInstrumentNumber = null)
    {
        $allowedOptions = ['Released', 'Judgement', 'NeverResided'];
        if (!in_array($DowerAffidavitOption, $allowedOptions)) {
            throw new InvalidOptionException("Invalid DowerAffidavitOption: $DowerAffidavitOption, allowed: " . implode(',', $allowedOptions));
        }

        $this->DowerAffidavitOption = $DowerAffidavitOption;
        $this->JudgementDate = $JudgementDate;
        $this->ReleaseRegistrationDate = $ReleaseRegistrationDate;
        $this->JudgementInstrumentNumber = $JudgementInstrumentNumber;
        $this->ReleaseOfDowerRightsInstrumentNumber = $ReleaseOfDowerRightsInstrumentNumber;
    }

    public function getDowerAffidavitOption(): string
    {
        return $this->DowerAffidavitOption;
    }

    public function getJudgementDate(): \DateTime
    {
        return $this->JudgementDate;
    }

    public function getReleaseRegistrationDate(): \DateTime
    {
        return $this->ReleaseRegistrationDate;
    }

    public function getJudgementInstrumentNumber(): string
    {
        return $this->JudgementInstrumentNumber;
    }

    public function getReleaseOfDowerRightsInstrumentNumber(): string
    {
        return $this->ReleaseOfDowerRightsInstrumentNumber;
    }
}

