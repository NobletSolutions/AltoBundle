<?php

namespace NS\AltoBundle\Soap\Types;

class LongAddressType
{
    /** @var string */
    private $POBox = null;

    /** @var string */
    private $AddressLine1 = null;

    /** @var string */
    private $AddressLine2 = null;

    /** @var string */
    private $Municipality = null;

    /** @var string */
    private $ProvinceName = null;

    /** @var string */
    private $CountryName = null;

    /** @var string */
    private $PostalCode = null;

    /**
     * Constructor
     *
     * @param string $POBox
     * @param string $AddressLine1
     * @param string $AddressLine2
     * @param string $Municipality
     * @param string $ProvinceName
     * @param string $CountryName
     * @param string $PostalCode
     */
    public function __construct(?string $POBox, string $AddressLine1, ?string $AddressLine2, string $Municipality, string $ProvinceName, string $CountryName, string $PostalCode)
    {
        $this->POBox = $POBox;
        $this->AddressLine1 = $AddressLine1;
        $this->AddressLine2 = $AddressLine2;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
        $this->PostalCode = $PostalCode;
    }

    public function getPOBox(): string
    {
        return $this->POBox;
    }

    public function getAddressLine1(): string
    {
        return $this->AddressLine1;
    }

    public function getAddressLine2(): string
    {
        return $this->AddressLine2;
    }

    public function getMunicipality(): string
    {
        return $this->Municipality;
    }

    public function getProvinceName(): string
    {
        return $this->ProvinceName;
    }

    public function getCountryName(): string
    {
        return $this->CountryName;
    }

    public function getPostalCode(): string
    {
        return $this->PostalCode;
    }
}

