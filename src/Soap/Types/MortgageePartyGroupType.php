<?php

namespace NS\AltoBundle\Soap\Types;

class MortgageePartyGroupType
{
    /** @var MortgageePartyType[] */
    private $Mortgagee;

    /**
     * Constructor
     *
     * @param MortgageePartyType[] $Mortgagee
     */
    public function __construct(array $Mortgagee)
    {
        $this->Mortgagee = $Mortgagee;
    }

    public function __toString()
    {
        return sprintf('<Mortgagees>%s</Mortgagees>', implode('', $this->Mortgagee));
    }

    public function getMortgagee(): array
    {
        return $this->Mortgagee;
    }
}

