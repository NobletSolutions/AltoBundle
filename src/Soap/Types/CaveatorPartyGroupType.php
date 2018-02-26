<?php

namespace NS\AltoBundle\Soap\Types;

class CaveatorPartyGroupType
{
    /** @var CaveatorPartyType[] */
    private $Caveator;

    /**
     * CaveatorPartyGroupType constructor.
     *
     * @param CaveatorPartyType[] $Caveator
     */
    public function __construct(array $Caveator)
    {
        $this->Caveator = $Caveator;
    }

    public function getCaveator(): array
    {
        return $this->Caveator;
    }
}

