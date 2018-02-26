<?php

namespace NS\AltoBundle\Soap\Types;

class CorporateSigningAffidavit
{
    /** @var AffidavitType */
    private $Affidavit = null;

    /** @var CommissionerType */
    private $Commissioner = null;

    /**
     * Constructor
     *
     * @var AffidavitType $Affidavit
     * @var CommissionerType $Commissioner
     */
    public function __construct(AffidavitType $Affidavit, CommissionerType $Commissioner)
    {
        $this->Affidavit = $Affidavit;
        $this->Commissioner = $Commissioner;
    }

    public function getAffidavit(): AffidavitType
    {
        return $this->Affidavit;
    }

    public function getCommissioner(): CommissionerType
    {
        return $this->Commissioner;
    }
}

