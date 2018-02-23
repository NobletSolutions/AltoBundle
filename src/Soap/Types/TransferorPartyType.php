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
     * @param \NS\AltoBundle\Soap\Types\anyType $GivenName
     * @return TransferorPartyType
     */
    public function withGivenName($GivenName)
    {
        $new = clone $this;
        $new->GivenName = $GivenName;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Surname
     * @return TransferorPartyType
     */
    public function withSurname($Surname)
    {
        $new = clone $this;
        $new->Surname = $Surname;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSpouseGivenName()
    {
        return $this->SpouseGivenName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $SpouseGivenName
     * @return TransferorPartyType
     */
    public function withSpouseGivenName($SpouseGivenName)
    {
        $new = clone $this;
        $new->SpouseGivenName = $SpouseGivenName;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSpouseSurname()
    {
        return $this->SpouseSurname;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $SpouseSurname
     * @return TransferorPartyType
     */
    public function withSpouseSurname($SpouseSurname)
    {
        $new = clone $this;
        $new->SpouseSurname = $SpouseSurname;

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
     * @return TransferorPartyType
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
     * @return TransferorPartyType
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
     * @return TransferorPartyType
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
    public function getExecutionDate()
    {
        return $this->ExecutionDate;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ExecutionDate
     * @return TransferorPartyType
     */
    public function withExecutionDate($ExecutionDate)
    {
        $new = clone $this;
        $new->ExecutionDate = $ExecutionDate;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $MaritalStatus
     * @return TransferorPartyType
     */
    public function withMaritalStatus($MaritalStatus)
    {
        $new = clone $this;
        $new->MaritalStatus = $MaritalStatus;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDowerCompliances()
    {
        return $this->DowerCompliances;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $DowerCompliances
     * @return TransferorPartyType
     */
    public function withDowerCompliances($DowerCompliances)
    {
        $new = clone $this;
        $new->DowerCompliances = $DowerCompliances;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCorporationName()
    {
        return $this->CorporationName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $CorporationName
     * @return TransferorPartyType
     */
    public function withCorporationName($CorporationName)
    {
        $new = clone $this;
        $new->CorporationName = $CorporationName;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCorporateSeal()
    {
        return $this->CorporateSeal;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $CorporateSeal
     * @return TransferorPartyType
     */
    public function withCorporateSeal($CorporateSeal)
    {
        $new = clone $this;
        $new->CorporateSeal = $CorporateSeal;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\SigningParties
     */
    public function getSigningParties()
    {
        return $this->SigningParties;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\SigningParties $SigningParties
     * @return TransferorPartyType
     */
    public function withSigningParties($SigningParties)
    {
        $new = clone $this;
        $new->SigningParties = $SigningParties;

        return $new;
    }


}

