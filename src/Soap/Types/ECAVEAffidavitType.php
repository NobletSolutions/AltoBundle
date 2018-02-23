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
     * @param \NS\AltoBundle\Soap\Types\anyType $JuratDetail
     * @return ECAVEAffidavitType
     */
    public function withJuratDetail($JuratDetail)
    {
        $new = clone $this;
        $new->JuratDetail = $JuratDetail;

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
     * @return ECAVEAffidavitType
     */
    public function withCommissioner($Commissioner)
    {
        $new = clone $this;
        $new->Commissioner = $Commissioner;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSigningDetail()
    {
        return $this->SigningDetail;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $SigningDetail
     * @return ECAVEAffidavitType
     */
    public function withSigningDetail($SigningDetail)
    {
        $new = clone $this;
        $new->SigningDetail = $SigningDetail;

        return $new;
    }


}

