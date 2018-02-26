<?php

namespace NS\AltoBundle\Soap\Types;

use NS\AltoBundle\Soap\Exceptions\InvalidOptionException;

class AffidavitReValue
{
    /** @var string */
    private $SigningIndividual = null;

    /** @var ConsiderationType */
    private $Consideration = null;

    /** @var AffidavitType */
    private $Affidavit = null;

    /** @var CommissionerType */
    private $Commissioner = null;

    /**
     * In the schema, but not in a sample request
     * @var AgentType
     */
    private $Agent = null;

    /**
     * Constructor
     *
     *
     * @param string $SigningIndividual
     * @param ConsiderationType $Consideration
     * @param AffidavitType $Affidavit
     * @param $Commissioner
     */
    public function __construct(string $SigningIndividual, ConsiderationType $Consideration, AffidavitType $Affidavit, CommissionerType $Commissioner)
    {
        $individuals = ['Agent', 'Transferee', 'NotSure'];
        if (!in_array($SigningIndividual, $individuals)) {
            throw new InvalidOptionException("Invalid signing individual $SigningIndividual " . implode(', ', $individuals));
        }

        $this->SigningIndividual = $SigningIndividual;
        $this->Consideration = $Consideration;
        $this->Affidavit = $Affidavit;
        $this->Commissioner = $Commissioner;
    }

    public function getSigningIndividual(): string
    {
        return $this->SigningIndividual;
    }

    public function getConsideration(): ConsiderationType
    {
        return $this->Consideration;
    }

    public function getAffidavit(): AffidavitType
    {
        return $this->Affidavit;
    }

    public function getCommissioner(): CommissionerType
    {
        return $this->Commissioner;
    }

    public function getAgent(): ?AgentType
    {
        return $this->Agent;
    }
}

