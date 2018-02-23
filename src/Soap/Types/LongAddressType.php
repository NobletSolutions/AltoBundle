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
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $POBox
     * @var \NS\AltoBundle\Soap\Types\anyType $AddressLine1
     * @var \NS\AltoBundle\Soap\Types\anyType $AddressLine2
     * @var \NS\AltoBundle\Soap\Types\anyType $Municipality
     * @var \NS\AltoBundle\Soap\Types\anyType $ProvinceName
     * @var \NS\AltoBundle\Soap\Types\anyType $CountryName
     * @var \NS\AltoBundle\Soap\Types\anyType $PostalCode
     */
    public function __construct($POBox, $AddressLine1, $AddressLine2, $Municipality, $ProvinceName, $CountryName, $PostalCode)
    {
        $this->POBox = $POBox;
        $this->AddressLine1 = $AddressLine1;
        $this->AddressLine2 = $AddressLine2;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
        $this->PostalCode = $PostalCode;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getPOBox()
    {
        return $this->POBox;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $POBox
     * @return LongAddressType
     */
    public function withPOBox($POBox)
    {
        $new = clone $this;
        $new->POBox = $POBox;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $AddressLine1
     * @return LongAddressType
     */
    public function withAddressLine1($AddressLine1)
    {
        $new = clone $this;
        $new->AddressLine1 = $AddressLine1;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $AddressLine2
     * @return LongAddressType
     */
    public function withAddressLine2($AddressLine2)
    {
        $new = clone $this;
        $new->AddressLine2 = $AddressLine2;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getMunicipality()
    {
        return $this->Municipality;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Municipality
     * @return LongAddressType
     */
    public function withMunicipality($Municipality)
    {
        $new = clone $this;
        $new->Municipality = $Municipality;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getProvinceName()
    {
        return $this->ProvinceName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ProvinceName
     * @return LongAddressType
     */
    public function withProvinceName($ProvinceName)
    {
        $new = clone $this;
        $new->ProvinceName = $ProvinceName;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $CountryName
     * @return LongAddressType
     */
    public function withCountryName($CountryName)
    {
        $new = clone $this;
        $new->CountryName = $CountryName;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $PostalCode
     * @return LongAddressType
     */
    public function withPostalCode($PostalCode)
    {
        $new = clone $this;
        $new->PostalCode = $PostalCode;

        return $new;
    }


}

