<?php

namespace NS\AltoBundle\Soap\Types;

class MortgageePartyGroupType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Mortgagee = null;

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

