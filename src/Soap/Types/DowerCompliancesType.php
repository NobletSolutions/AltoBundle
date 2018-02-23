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
     * @return \NS\AltoBundle\Soap\Types\DowerAffidavit
     */
    public function getDowerAffidavit()
    {
        return $this->DowerAffidavit;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDowerAffidavitDetail()
    {
        return $this->DowerAffidavitDetail;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCommissioner()
    {
        return $this->Commissioner;
    }


}

