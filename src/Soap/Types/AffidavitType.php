<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitType
{
    /** @var \DateTime */
    private $AffidavitDate = null;

    /** @var string */
    private $Municipality = null;

    /** @var string */
    private $ProvinceName = null;

    /** @var string */
    private $CountryName = null;

    /** @var bool */
    private $Sworn = null;

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
        $this->Sworn = $Sworn;
    }

    public function __toString()
    {
        return sprintf('<Affidavit><AffidavitDate>%s</AffidavitDate><Sworn>%s</Sworn><Municipality>%s</Municipality><ProvinceName>%s</ProvinceName><CountryName>%s</CountryName></Affidavit>',
            $this->AffidavitDate->format('Y-m-d'),
            ($this->Sworn) ? 'True' : 'False',
            $this->Municipality,
            $this->ProvinceName,
            $this->CountryName
        );
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

    public function getSworn(): bool
    {
        return $this->Sworn;
    }
}

