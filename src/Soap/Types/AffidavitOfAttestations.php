<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitOfAttestations
{

    /** @var AffidavitOfAttestation[] */
    private $AffidavitOfAttestation = null;

    /**
     * Constructor
     *
     * @var AffidavitOfAttestation[] $AffidavitOfAttestation
     */
    public function __construct(array $AffidavitOfAttestation)
    {
        $this->AffidavitOfAttestation = $AffidavitOfAttestation;
    }

    public function getAffidavitOfAttestation(): array
    {
        return $this->AffidavitOfAttestation;
    }
}

