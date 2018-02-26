<?php

namespace NS\AltoBundle\Soap\Types;

class Transferors
{
    /** @var TransferorPartyType[] */
    private $Transferor = null;

    /**
     * Constructor
     *
     * @var TransferorPartyType[] $Transferor
     */
    public function __construct(array $Transferor)
    {
        $this->Transferor = $Transferor;
    }

    public function getTransferor(): array
    {
        return $this->Transferor;
    }
}
