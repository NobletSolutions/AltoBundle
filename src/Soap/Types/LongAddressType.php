<?php

namespace NS\AltoBundle\Soap\Types;

class LongAddressType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $POBox = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $AddressLine1 = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $AddressLine2 = null;

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
    private $PostalCode = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getPOBox()
    {
        return $this->POBox;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
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
    public function getPostalCode()
    {
        return $this->PostalCode;
    }


}

