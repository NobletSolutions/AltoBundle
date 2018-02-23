<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitOfAttestation
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $KnowsTransferor = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Execution = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Witness = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Affidavit = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Commissioner = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getKnowsTransferor()
    {
        return $this->KnowsTransferor;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getExecution()
    {
        return $this->Execution;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getWitness()
    {
        return $this->Witness;
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


}

