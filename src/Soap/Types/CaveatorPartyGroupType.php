<?php

namespace NS\AltoBundle\Soap\Types;

class CaveatorPartyGroupType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Caveator = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCaveator()
    {
        return $this->Caveator;
    }


}

