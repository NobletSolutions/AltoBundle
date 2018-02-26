<?php

namespace NS\AltoBundle\Soap\Types;

/**
 * Class TransferorPartyType
 * @package NS\AltoBundle\Soap\Types
 */
class TransferorPartyType
{
    /** @var string */
    private $GivenName = null;

    /** @var string */
    private $Surname = null;

    /** @var string */
    private $SpouseGivenName = null;

    /** @var string */
    private $SpouseSurname = null;

    /** @var string */
    private $Municipality = null;

    /** @var string */
    private $ProvinceName = null;

    /** @var string */
    private $CountryName = null;

    /** @var \DateTime */
    private $ExecutionDate = null;

    /** @var string */
    private $MaritalStatus = null;

    /** @var DowerCompliancesType */
    private $DowerCompliances = null;

    /** @var string */
    private $CorporationName = null;

    /** @var string */
    private $CorporateSeal = null;

    /** @var SigningParties|null */
    private $SigningParties = null;

    /**
     * @param string $GivenName
     * @param string $Surname
     * @param string $SpouseGivenName
     * @param string $SpouseSurname
     * @param string $Municipality
     * @param string $ProvinceName
     * @param string $CountryName
     * @param \DateTime $ExecutionDate
     * @param string $MaritalStatus
     * @param DowerCompliancesType $DowerCompliances
     * @return TransferorPartyType
     */
    public static function createIndividual(string $GivenName, string $Surname, string $SpouseGivenName, string $SpouseSurname, string $Municipality, string $ProvinceName, string $CountryName, \DateTime $ExecutionDate, string $MaritalStatus, DowerCompliancesType $DowerCompliances)
    {
        $obj = new self();
        $obj->initializeIndividual($GivenName, $Surname, $SpouseGivenName, $SpouseSurname, $Municipality, $ProvinceName, $CountryName, $ExecutionDate, $MaritalStatus, $DowerCompliances);

        return $obj;
    }

    /**
     * @param string $CorporationName
     * @param bool $CorporateSeal
     * @param array $SigningParties
     * @param string $Municipality
     * @param string $ProvinceName
     * @param string $CountryName
     * @param \DateTime $ExecutionDate
     * @return TransferorPartyType
     */
    public static function createCorporation(string $CorporationName, bool $CorporateSeal, array $SigningParties, string $Municipality, string $ProvinceName, string $CountryName, \DateTime $ExecutionDate)
    {
        $obj = new self();
        $obj->initializeCorporation($CorporationName, $CorporateSeal ? 'true' : 'false', $SigningParties, $Municipality, $ProvinceName, $CountryName, $ExecutionDate);

        return $obj;
    }

    /**
     * @param string $GivenName
     * @param string $Surname
     * @param string $SpouseGivenName
     * @param string $SpouseSurname
     * @param string $Municipality
     * @param string $ProvinceName
     * @param string $CountryName
     * @param \DateTime $ExecutionDate
     * @param string $MaritalStatus
     * @param DowerCompliancesType $DowerCompliances
     *
     * @internal
     */
    public function initializeIndividual(string $GivenName, string $Surname, string $SpouseGivenName, string $SpouseSurname, string $Municipality, string $ProvinceName, string $CountryName, \DateTime $ExecutionDate, string $MaritalStatus, DowerCompliancesType $DowerCompliances)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->SpouseGivenName = $SpouseGivenName;
        $this->SpouseSurname = $SpouseSurname;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
        $this->ExecutionDate = $ExecutionDate;
        $this->MaritalStatus = $MaritalStatus;
        $this->DowerCompliances = $DowerCompliances;
    }

    /**
     * @param string $CorporationName
     * @param string $CorporateSeal
     * @param array $SigningParties
     * @param string $Municipality
     * @param string $ProvinceName
     * @param string $CountryName
     * @param \DateTime $ExecutionDate
     *
     * @internal
     */
    public function initializeCorporation(string $CorporationName, string $CorporateSeal, array $SigningParties, string $Municipality, string $ProvinceName, string $CountryName, \DateTime $ExecutionDate)
    {
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
        $this->ExecutionDate = $ExecutionDate;
        $this->CorporationName = $CorporationName;
        $this->CorporateSeal = $CorporateSeal;
        $this->SigningParties = $SigningParties;
    }

    public function getGivenName(): string
    {
        return $this->GivenName;
    }

    public function getSurname(): string
    {
        return $this->Surname;
    }

    public function getSpouseGivenName(): string
    {
        return $this->SpouseGivenName;
    }

    public function getSpouseSurname(): string
    {
        return $this->SpouseSurname;
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

    public function getExecutionDate(): \DateTime
    {
        return $this->ExecutionDate;
    }

    public function getMaritalStatus(): string
    {
        return $this->MaritalStatus;
    }

    public function getDowerCompliances(): DowerCompliancesType
    {
        return $this->DowerCompliances;
    }

    public function getCorporationName(): string
    {
        return $this->CorporationName;
    }

    public function getCorporateSeal(): string
    {
        return $this->CorporateSeal;
    }

    public function getSigningParties(): SigningParties
    {
        return $this->SigningParties;
    }
}
