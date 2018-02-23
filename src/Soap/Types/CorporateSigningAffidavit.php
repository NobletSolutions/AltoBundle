<?php

namespace NS\AltoBundle\Soap\Types;

class CorporateSigningAffidavit
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Affidavit = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Commissioner = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavit()
    {
        return $this->Affidavit;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCommissioner()
    {
        return $this->Commissioner;
    }


}

