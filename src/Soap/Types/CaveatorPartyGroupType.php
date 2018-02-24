<?php

namespace NS\AltoBundle\Soap\Types;

class CaveatorPartyGroupType
{
    /** @var CaveatorPartyType  */
    private $Caveator = null;

    /**
     * CaveatorPartyGroupType constructor.
     * @param CaveatorPartyType $Caveator
     */
    public function __construct(CaveatorPartyType $Caveator)
    {
        $this->Caveator = $Caveator;
    }

    public function __toString()
    {
        return sprintf('<Caveator>%s</Caveator>',$this->Caveator);
    }

    public function getCaveator(): CaveatorPartyType
    {
        return $this->Caveator;
    }
}

