<?php

namespace NS\AltoBundle\Soap\Types;

class ShortAddressType
{
    /** @var string */
    private $Municipality = null;

    /** @var string */
    private $ProvinceName = null;

    /** @var string */
    private $CountryName = null;

    /**
     * Constructor
     *
     * @param string $Municipality
     * @param string $ProvinceName
     * @param string $CountryName
     */
    public function __construct(string $Municipality, string $ProvinceName, string $CountryName)
    {
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
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
}
