<?php

namespace NS\AltoBundle\Soap\Types;

use NS\AltoBundle\Soap\Exceptions\InvalidOptionException;

class TransfereeGroup
{
    /** @var string */
    private $DefinedInterestText = null;

    /** @var string */
    private $TenancyType = null;

    /** @var Transferees */
    private $Transferees = null;

    /**
     * Constructor
     *
     * @param string $DefinedInterestText
     * @param string $TenancyType
     * @var \NS\AltoBundle\Soap\Types\Transferees $Transferees
     */
    public function __construct(?string $DefinedInterestText, ?string $TenancyType, Transferees $Transferees)
    {
        $this->DefinedInterestText = $DefinedInterestText;
        if ($DefinedInterestText !== null && !in_array($TenancyType, ['J', 'C'])) {
            throw new InvalidOptionException("$TenancyType is a invalid tenancy type");
        }

        $this->TenancyType = $TenancyType;
        $this->Transferees = $Transferees;
    }

    public function getDefinedInterestText(): string
    {
        return $this->DefinedInterestText;
    }

    public function getTenancyType(): string
    {
        return $this->TenancyType;
    }

    public function getTransferees(): Transferees
    {
        return $this->Transferees;
    }
}

