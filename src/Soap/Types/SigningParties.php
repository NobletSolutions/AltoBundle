<?php

namespace NS\AltoBundle\Soap\Types;

class SigningParties
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $SigningParty = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $SigningParty
     */
    public function __construct($SigningParty)
    {
        $this->SigningParty = $SigningParty;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSigningParty()
    {
        return $this->SigningParty;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $SigningParty
     * @return SigningParties
     */
    public function withSigningParty($SigningParty)
    {
        $new = clone $this;
        $new->SigningParty = $SigningParty;

        return $new;
    }


}

