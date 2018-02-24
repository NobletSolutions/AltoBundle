<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitOfAttestation
{
    /** @var bool */
    private $KnowsTransferor;

    /** @var ShortAddressType */
    private $Execution;

    /** @var IndividualNameShortAddressType */
    private $Witness;

    /** @var AffidavitType */
    private $Affidavit;

    /** @var CommissionerType */
    private $Commissioner;

    /**
     * Constructor
     *
     * @param bool $KnowsTransferor
     * @param ShortAddressType $Execution
     * @param IndividualNameShortAddressType $Witness
     * @param AffidavitType $Affidavit
     * @param CommissionerType $Commissioner
     */
    public function __construct(bool $KnowsTransferor, ShortAddressType $Execution, IndividualNameShortAddressType $Witness, AffidavitType $Affidavit, CommissionerType $Commissioner)
    {
        $this->KnowsTransferor = $KnowsTransferor;
        $this->Execution = $Execution;
        $this->Witness = $Witness;
        $this->Affidavit = $Affidavit;
        $this->Commissioner = $Commissioner;
    }

    public function getKnowsTransferor() :bool
    {
        return $this->KnowsTransferor;
    }


    public function getExecution(): ShortAddressType
    {
        return $this->Execution;
    }

    public function getWitness(): IndividualNameShortAddressType
    {
        return $this->Witness;
    }


    public function getAffidavit(): AffidavitType
    {
        return $this->Affidavit;
    }

    public function getCommissioner(): CommissionerType
    {
        return $this->Commissioner;
    }
}

