<?php

namespace NS\AltoBundle\Soap\Types;

class ECAVEAffidavitType
{
    /** @var AffidavitType */
    private $JuratDetail = null;

    /** @var CommissionerType */
    private $Commissioner = null;

    /** @var SignatorType */
    private $SigningDetail = null;

    /**
     * Constructor
     *
     * @param AffidavitType $JuratDetail
     * @param CommissionerType $Commissioner
     * @param SignatorType $SigningDetail
     */
    public function __construct(AffidavitType $JuratDetail, CommissionerType $Commissioner, SignatorType $SigningDetail)
    {
        $this->JuratDetail = $JuratDetail;
        $this->Commissioner = $Commissioner;
        $this->SigningDetail = $SigningDetail;
    }

    public function getJuratDetail(): AffidavitType
    {
        return $this->JuratDetail;
    }

    public function getCommissioner(): CommissionerType
    {
        return $this->Commissioner;
    }

    public function getSigningDetail(): SignatorType
    {
        return $this->SigningDetail;
    }
}
