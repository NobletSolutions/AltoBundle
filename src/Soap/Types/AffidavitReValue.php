<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitReValue
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $SigningIndividual = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Consideration
     */
    private $Consideration = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Affidavit = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Commissioner = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Agent = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSigningIndividual()
    {
        return $this->SigningIndividual;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Consideration
     */
    public function getConsideration()
    {
        return $this->Consideration;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavit()
    {
        return $this->Affidavit;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCommissioner()
    {
        return $this->Commissioner;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAgent()
    {
        return $this->Agent;
    }


}

