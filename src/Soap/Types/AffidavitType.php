<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitType
{
    /** @var string */
    private $Sworn = null;

    /** @var \DateTime */
    private $AffidavitDate = null;

    /** @var string */
    private $Municipality = null;

    /** @var string */
    private $ProvinceName = null;

    /** @var string */
    private $CountryName = null;

    /**
     * Constructor
     *
     * @var \DateTime $AffidavitDate
     * @var string $Municipality
     * @var string $ProvinceName
     * @var string $CountryName
     * @var bool $Sworn
     */
    public function __construct(\DateTime $AffidavitDate, string $Municipality, string $ProvinceName, string $CountryName, bool $Sworn)
    {
        $this->AffidavitDate = $AffidavitDate;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
        $this->Sworn = $Sworn?'true':'false';
    }

    public function getAffidavitDate(): \DateTime
    {
        return $this->AffidavitDate;
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

    public function getSworn(): string
    {
        return $this->Sworn;
    }
}

