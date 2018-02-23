<?php

namespace NS\AltoBundle\Soap\Types;

class ECAVEAffidavitType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $JuratDetail = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Commissioner = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $SigningDetail = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getJuratDetail()
    {
        return $this->JuratDetail;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCommissioner()
    {
        return $this->Commissioner;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSigningDetail()
    {
        return $this->SigningDetail;
    }


}

