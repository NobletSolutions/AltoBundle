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
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDowerAffidavitOption()
    {
        return $this->DowerAffidavitOption;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getJudgementDate()
    {
        return $this->JudgementDate;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getReleaseRegistrationDate()
    {
        return $this->ReleaseRegistrationDate;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getJudgementInstrumentNumber()
    {
        return $this->JudgementInstrumentNumber;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getReleaseOfDowerRightsInstrumentNumber()
    {
        return $this->ReleaseOfDowerRightsInstrumentNumber;
    }


}

