<?php

namespace NS\AltoBundle\Soap\Types;

class TransfereePartyType
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
    private $ExecutionDate = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $IndivdualToSignAffidvitReValue = null;

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
     * @var \NS\AltoBundle\Soap\Types\anyType $ExecutionDate
     * @var \NS\AltoBundle\Soap\Types\anyType $IndivdualToSignAffidvitReValue
     * @var \NS\AltoBundle\Soap\Types\anyType $Address
     * @var \NS\AltoBundle\Soap\Types\anyType $CorporationName
     */
    public function __construct($GivenName, $Surname, $ExecutionDate, $IndivdualToSignAffidvitReValue, $Address, $CorporationName)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->ExecutionDate = $ExecutionDate;
        $this->IndivdualToSignAffidvitReValue = $IndivdualToSignAffidvitReValue;
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
     * @return TransfereePartyType
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
     * @return TransfereePartyType
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
    public function getExecutionDate()
    {
        return $this->ExecutionDate;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ExecutionDate
     * @return TransfereePartyType
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
    public function getIndivdualToSignAffidvitReValue()
    {
        return $this->IndivdualToSignAffidvitReValue;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $IndivdualToSignAffidvitReValue
     * @return TransfereePartyType
     */
    public function withIndivdualToSignAffidvitReValue($IndivdualToSignAffidvitReValue)
    {
        $new = clone $this;
        $new->IndivdualToSignAffidvitReValue = $IndivdualToSignAffidvitReValue;

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
     * @return TransfereePartyType
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
     * @return TransfereePartyType
     */
    public function withCorporationName($CorporationName)
    {
        $new = clone $this;
        $new->CorporationName = $CorporationName;

        return $new;
    }


}

