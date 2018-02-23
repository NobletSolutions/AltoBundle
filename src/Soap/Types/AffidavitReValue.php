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
     * @param \NS\AltoBundle\Soap\Types\anyType $SigningIndividual
     * @return AffidavitReValue
     */
    public function withSigningIndividual($SigningIndividual)
    {
        $new = clone $this;
        $new->SigningIndividual = $SigningIndividual;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Consideration
     */
    public function getConsideration()
    {
        return $this->Consideration;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Consideration $Consideration
     * @return AffidavitReValue
     */
    public function withConsideration($Consideration)
    {
        $new = clone $this;
        $new->Consideration = $Consideration;

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
     * @return AffidavitReValue
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
     * @return AffidavitReValue
     */
    public function withCommissioner($Commissioner)
    {
        $new = clone $this;
        $new->Commissioner = $Commissioner;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAgent()
    {
        return $this->Agent;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Agent
     * @return AffidavitReValue
     */
    public function withAgent($Agent)
    {
        $new = clone $this;
        $new->Agent = $Agent;

        return $new;
    }


}

