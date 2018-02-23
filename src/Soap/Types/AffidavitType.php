<?php

namespace NS\AltoBundle\Soap\Types;

class AffidavitType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $AffidavitDate = null;

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
    private $Sworn = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $AffidavitDate
     * @var \NS\AltoBundle\Soap\Types\anyType $Municipality
     * @var \NS\AltoBundle\Soap\Types\anyType $ProvinceName
     * @var \NS\AltoBundle\Soap\Types\anyType $CountryName
     * @var \NS\AltoBundle\Soap\Types\anyType $Sworn
     */
    public function __construct($AffidavitDate, $Municipality, $ProvinceName, $CountryName, $Sworn)
    {
        $this->AffidavitDate = $AffidavitDate;
        $this->Municipality = $Municipality;
        $this->ProvinceName = $ProvinceName;
        $this->CountryName = $CountryName;
        $this->Sworn = $Sworn;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavitDate()
    {
        return $this->AffidavitDate;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $AffidavitDate
     * @return AffidavitType
     */
    public function withAffidavitDate($AffidavitDate)
    {
        $new = clone $this;
        $new->AffidavitDate = $AffidavitDate;

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
     * @return AffidavitType
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
     * @return AffidavitType
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
     * @return AffidavitType
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
    public function getSworn()
    {
        return $this->Sworn;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Sworn
     * @return AffidavitType
     */
    public function withSworn($Sworn)
    {
        $new = clone $this;
        $new->Sworn = $Sworn;

        return $new;
    }


}

