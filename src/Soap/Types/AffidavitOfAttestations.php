<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitOfAttestations
{

    /**
     * @var \NS\AltoBundle\Soap\Types\AffidavitOfAttestation
     */
    private $AffidavitOfAttestation = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\AffidavitOfAttestation $AffidavitOfAttestation
     */
    public function __construct($AffidavitOfAttestation)
    {
        $this->AffidavitOfAttestation = $AffidavitOfAttestation;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\AffidavitOfAttestation
     */
    public function getAffidavitOfAttestation()
    {
        return $this->AffidavitOfAttestation;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\AffidavitOfAttestation $AffidavitOfAttestation
     * @return AffidavitOfAttestations
     */
    public function withAffidavitOfAttestation($AffidavitOfAttestation)
    {
        $new = clone $this;
        $new->AffidavitOfAttestation = $AffidavitOfAttestation;

        return $new;
    }


}

