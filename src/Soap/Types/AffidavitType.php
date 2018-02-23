<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $AffidavitDate = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Municipality = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $ProvinceName = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CountryName = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Sworn = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavitDate()
    {
        return $this->AffidavitDate;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getMunicipality()
    {
        return $this->Municipality;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getProvinceName()
    {
        return $this->ProvinceName;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSworn()
    {
        return $this->Sworn;
    }


}

