<?php

namespace NS\AltoBundle\Soap\Types;

class CaveatorPartyGroupType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Caveator = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $Caveator
     */
    public function __construct($Caveator)
    {
        $this->Caveator = $Caveator;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCaveator()
    {
        return $this->Caveator;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Caveator
     * @return CaveatorPartyGroupType
     */
    public function withCaveator($Caveator)
    {
        $new = clone $this;
        $new->Caveator = $Caveator;

        return $new;
    }


}

