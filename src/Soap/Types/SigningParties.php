<?php

namespace NS\AltoBundle\Soap\Types;

class SigningParties
{
    /** @var SigningPartyType */
    private $SigningParty;

    /**
     * Constructor
     *
     * @param SigningPartyType $SigningParty
     */
    public function __construct(SigningPartyType $SigningParty)
    {
        $this->SigningParty = $SigningParty;
    }

    public function getSigningParty(): SigningPartyType
    {
        return $this->SigningParty;
    }
}

