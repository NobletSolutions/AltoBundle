<?php

namespace NS\AltoBundle\Soap\Types;

class SigningParties
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $SigningParty = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSigningParty()
    {
        return $this->SigningParty;
    }


}

