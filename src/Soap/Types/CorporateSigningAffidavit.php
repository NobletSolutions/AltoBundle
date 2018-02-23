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
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $Affidavit
     * @var \NS\AltoBundle\Soap\Types\anyType $Commissioner
     */
    public function __construct($Affidavit, $Commissioner)
    {
        $this->Affidavit = $Affidavit;
        $this->Commissioner = $Commissioner;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavit()
    {
        return $this->Affidavit;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Affidavit
     * @return CorporateSigningAffidavit
     */
    public function withAffidavit($Affidavit)
    {
        $new = clone $this;
        $new->Affidavit = $Affidavit;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCommissioner()
    {
        return $this->Commissioner;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Commissioner
     * @return CorporateSigningAffidavit
     */
    public function withCommissioner($Commissioner)
    {
        $new = clone $this;
        $new->Commissioner = $Commissioner;

        return $new;
    }


}

