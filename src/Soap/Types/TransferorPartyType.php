<?php

namespace NS\AltoBundle\Soap\Types;

class TransferorPartyType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $GivenName = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Surname = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $SpouseGivenName = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $SpouseSurname = null;

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
    private $ExecutionDate = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $MaritalStatus = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $DowerCompliances = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CorporationName = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CorporateSeal = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\SigningParties
     */
    private $SigningParties = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSpouseGivenName()
    {
        return $this->SpouseGivenName;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSpouseSurname()
    {
        return $this->SpouseSurname;
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
    public function getExecutionDate()
    {
        return $this->ExecutionDate;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDowerCompliances()
    {
        return $this->DowerCompliances;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCorporationName()
    {
        return $this->CorporationName;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCorporateSeal()
    {
        return $this->CorporateSeal;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\SigningParties
     */
    public function getSigningParties()
    {
        return $this->SigningParties;
    }


}

