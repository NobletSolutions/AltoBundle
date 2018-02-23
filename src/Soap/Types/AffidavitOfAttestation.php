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
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $KnowsTransferor
     * @var \NS\AltoBundle\Soap\Types\anyType $Execution
     * @var \NS\AltoBundle\Soap\Types\anyType $Witness
     * @var \NS\AltoBundle\Soap\Types\anyType $Affidavit
     * @var \NS\AltoBundle\Soap\Types\anyType $Commissioner
     */
    public function __construct($KnowsTransferor, $Execution, $Witness, $Affidavit, $Commissioner)
    {
        $this->KnowsTransferor = $KnowsTransferor;
        $this->Execution = $Execution;
        $this->Witness = $Witness;
        $this->Affidavit = $Affidavit;
        $this->Commissioner = $Commissioner;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getKnowsTransferor()
    {
        return $this->KnowsTransferor;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $KnowsTransferor
     * @return AffidavitOfAttestation
     */
    public function withKnowsTransferor($KnowsTransferor)
    {
        $new = clone $this;
        $new->KnowsTransferor = $KnowsTransferor;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getExecution()
    {
        return $this->Execution;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Execution
     * @return AffidavitOfAttestation
     */
    public function withExecution($Execution)
    {
        $new = clone $this;
        $new->Execution = $Execution;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getWitness()
    {
        return $this->Witness;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Witness
     * @return AffidavitOfAttestation
     */
    public function withWitness($Witness)
    {
        $new = clone $this;
        $new->Witness = $Witness;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavit()
    {
        return $this->Affidavit;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Affidavit
     * @return AffidavitOfAttestation
     */
    public function withAffidavit($Affidavit)
    {
        $new = clone $this;
        $new->Affidavit = $Affidavit;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCommissioner()
    {
        return $this->Commissioner;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Commissioner
     * @return AffidavitOfAttestation
     */
    public function withCommissioner($Commissioner)
    {
        $new = clone $this;
        $new->Commissioner = $Commissioner;

        return $new;
    }


}

