<?php

namespace NS\AltoBundle\Soap\Types;

class MortgageePartyGroupType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Mortgagee = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $Mortgagee
     */
    public function __construct($Mortgagee)
    {
        $this->Mortgagee = $Mortgagee;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getMortgagee()
    {
        return $this->Mortgagee;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Mortgagee
     * @return MortgageePartyGroupType
     */
    public function withMortgagee($Mortgagee)
    {
        $new = clone $this;
        $new->Mortgagee = $Mortgagee;

        return $new;
    }


}

