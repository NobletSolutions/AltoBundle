<?php

namespace NS\AltoBundle\Soap\Types;

class SigningPartyType
{
    /** @var string */
    private $GivenName;

    /** @var string */
    private $Surname;

    /** @var string */
    private $Municipality;

    /** @var string */
    private $ProvinceName;

    /** @var string */
    private $CountryName;

    /** @var CorporateSigningAffidavit */
    private $CorporateSigningAffidavit = null;

    /**
     * Constructor
     * @param string $GivenName
     * @param string $Surname
     * @param string $Municipality
     * @param string $ProvinceName
     * @param string $CountryName
     * @param CorporateSigningAffidavit $CorporateSigningAffidavit
     */
    public function __construct(string $GivenName, string $Surname, string $Municipality, string $ProvinceName, string $CountryName, CorporateSigningAffidavit $CorporateSigningAffidavit)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
        $this->CorporateSigningAffidavit = $CorporateSigningAffidavit;
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

    public function getCorporateSigningAffidavit(): CorporateSigningAffidavit
    {
        return $this->CorporateSigningAffidavit;
    }
}

