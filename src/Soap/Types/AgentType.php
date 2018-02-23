<?php

namespace NS\AltoBundle\Soap\Types;

class AgentType
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
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $GivenName
     * @var \NS\AltoBundle\Soap\Types\anyType $Surname
     * @var \NS\AltoBundle\Soap\Types\anyType $Municipality
     * @var \NS\AltoBundle\Soap\Types\anyType $ProvinceName
     * @var \NS\AltoBundle\Soap\Types\anyType $CountryName
     */
    public function __construct($GivenName, $Surname, $Municipality, $ProvinceName, $CountryName)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $GivenName
     * @return AgentType
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
     * @return AgentType
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
    public function getMunicipality()
    {
        return $this->Municipality;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Municipality
     * @return AgentType
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
     * @return AgentType
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
     * @return AgentType
     */
    public function withCountryName($CountryName)
    {
        $new = clone $this;
        $new->CountryName = $CountryName;

        return $new;
    }


}

