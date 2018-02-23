<?php

namespace NS\AltoBundle\Soap\Types;

class MortgageePartyType
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
    private $Address = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CorporationName = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $GivenName
     * @var \NS\AltoBundle\Soap\Types\anyType $Surname
     * @var \NS\AltoBundle\Soap\Types\anyType $Address
     * @var \NS\AltoBundle\Soap\Types\anyType $CorporationName
     */
    public function __construct($GivenName, $Surname, $Address, $CorporationName)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->Address = $Address;
        $this->CorporationName = $CorporationName;
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
     * @return MortgageePartyType
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
     * @return MortgageePartyType
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
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Address
     * @return MortgageePartyType
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

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
     * @return MortgageePartyType
     */
    public function withCorporationName($CorporationName)
    {
        $new = clone $this;
        $new->CorporationName = $CorporationName;

        return $new;
    }


}

