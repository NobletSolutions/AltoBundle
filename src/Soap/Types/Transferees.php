<?php

namespace NS\AltoBundle\Soap\Types;

use NS\AltoBundle\Soap\Exceptions\InvalidOptionException;

class Transferees
{
    /** @var TransfereePartyType[] */
    private $Transferee = null;

    /**
     * Constructor
     *
     * @param TransfereePartyType[] $Transferees
     */
    public function __construct(array $Transferees)
    {
        foreach ($Transferees as $transferee) {
            if (!$transferee instanceof TransfereePartyType) {
                throw new InvalidOptionException(sprintf('Expected %s got %s', TransfereePartyType::class, get_class($transferee)));
            }
        }
        $this->Transferee = $Transferees;
    }

    public function getTransferee(): array
    {
        return $this->Transferee;
    }
}

