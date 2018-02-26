<?php

namespace NS\AltoBundle\Soap\Types\Data\eForm;

use NS\AltoBundle\Soap\Exceptions\InvalidOptionException;
use NS\AltoBundle\Soap\Types\AffidavitOfAttestations;
use NS\AltoBundle\Soap\Types\AffidavitReValue;
use NS\AltoBundle\Soap\Types\ConsiderationType;
use NS\AltoBundle\Soap\Types\TitlesType;
use NS\AltoBundle\Soap\Types\TransfereeGroups;
use NS\AltoBundle\Soap\Types\TransferorPartyType;
use NS\AltoBundle\Soap\Types\Transferors;

class TransferOfLandType
{
    /** @var string */
    private $CustomerFileNumber = null;

    /** @var TitlesType */
    private $Titles = null;

    /** @var ConsiderationType */
    private $Consideration = null;

    /**  @var AffidavitOfAttestations */
    private $AffidavitOfAttestations = null;

    /** @var TransferorPartyType[] */
    private $Transferors = null;

    /** @var TransfereeGroups */
    private $TransfereeGroups = null;

    /** @var AffidavitReValue */
    private $AffidavitReValue = null;

    /**
     * Constructor
     *
     * @param string $CustomerFileNumber
     * @param TitlesType $Titles
     * @param ConsiderationType $Consideration
     * @param AffidavitOfAttestations $AffidavitOfAttestations
     * @param array $Transferors
     * @param \NS\AltoBundle\Soap\Types\TransfereeGroups $TransfereeGroups
     * @param \NS\AltoBundle\Soap\Types\AffidavitReValue $AffidavitReValue
     */
    public function __construct(string $CustomerFileNumber, TitlesType $Titles, ConsiderationType $Consideration, AffidavitOfAttestations $AffidavitOfAttestations, Transferors $Transferors, TransfereeGroups $TransfereeGroups, AffidavitReValue $AffidavitReValue)
    {
        $this->CustomerFileNumber = $CustomerFileNumber;
        $this->Titles = $Titles;
        $this->Consideration = $Consideration;
        $this->AffidavitOfAttestations = $AffidavitOfAttestations;

        foreach ($Transferors as $transferor) {
            if (!$transferor instanceof TransferorPartyType) {
                throw new InvalidOptionException(sprintf('Expected %s got %s', TransferorPartyType::class, get_class($transferor)));
            }
        }

        $this->Transferors = $Transferors;
        $this->TransfereeGroups = $TransfereeGroups;
        $this->AffidavitReValue = $AffidavitReValue;
    }

    public function getCustomerFileNumber(): string
    {
        return $this->CustomerFileNumber;
    }

    public function getTitles(): TitlesType
    {
        return $this->Titles;
    }

    public function getConsideration(): ConsiderationType
    {
        return $this->Consideration;
    }

    public function getAffidavitOfAttestations(): AffidavitOfAttestations
    {
        return $this->AffidavitOfAttestations;
    }

    public function getTransferors(): Transferors
    {
        return $this->Transferors;
    }

    public function getTransfereeGroups(): TransfereeGroups
    {
        return $this->TransfereeGroups;
    }

    public function getAffidavitReValue(): AffidavitReValue
    {
        return $this->AffidavitReValue;
    }
}

