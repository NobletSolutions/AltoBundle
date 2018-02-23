<?php

namespace NS\AltoBundle\Soap\Types;

class DowerCompliancesType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Dower = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\DowerAffidavit
     */
    private $DowerAffidavit = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $DowerAffidavitDetail = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Commissioner = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDower()
    {
        return $this->Dower;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Dower
     * @return DowerCompliancesType
     */
    public function withDower($Dower)
    {
        $new = clone $this;
        $new->Dower = $Dower;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\DowerAffidavit
     */
    public function getDowerAffidavit()
    {
        return $this->DowerAffidavit;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\DowerAffidavit $DowerAffidavit
     * @return DowerCompliancesType
     */
    public function withDowerAffidavit($DowerAffidavit)
    {
        $new = clone $this;
        $new->DowerAffidavit = $DowerAffidavit;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDowerAffidavitDetail()
    {
        return $this->DowerAffidavitDetail;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $DowerAffidavitDetail
     * @return DowerCompliancesType
     */
    public function withDowerAffidavitDetail($DowerAffidavitDetail)
    {
        $new = clone $this;
        $new->DowerAffidavitDetail = $DowerAffidavitDetail;

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
     * @return DowerCompliancesType
     */
    public function withCommissioner($Commissioner)
    {
        $new = clone $this;
        $new->Commissioner = $Commissioner;

        return $new;
    }


}

