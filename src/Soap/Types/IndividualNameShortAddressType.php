<?php

namespace NS\AltoBundle\Soap\Types;

class IndividualNameShortAddressType
{
    /** @var string */
    private $GivenName = null;

    /** @var string */
    private $Surname = null;

    /** @var string */
    private $Municipality = null;

    /** @var string */
    private $ProvinceName = null;

    /** @var string */
    private $CountryName = null;

    /**
     * Constructor
     *
     * @var string $GivenName
     * @var string $Surname
     * @var string $Municipality
     * @var string $ProvinceName
     * @var string $CountryName
     */
    public function __construct(string $GivenName, string $Surname, string $Municipality, string $ProvinceName, string $CountryName)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
    }

    public function getGivenName(): string
    {
        return $this->GivenName;
    }

    public function getSurname(): string
    {
        return $this->Surname;
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

