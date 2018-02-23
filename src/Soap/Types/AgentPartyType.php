<?php

namespace NS\AltoBundle\Soap\Types;

class AgentPartyType
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
    private $CorporationName = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CorporateSeal = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $GivenName
     * @return AgentPartyType
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
     * @return AgentPartyType
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
     * @return AgentPartyType
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
    public function getCorporationName()
    {
        return $this->CorporationName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $CorporationName
     * @return AgentPartyType
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
     * @return AgentPartyType
     */
    public function withCorporateSeal($CorporateSeal)
    {
        $new = clone $this;
        $new->CorporateSeal = $CorporateSeal;

        return $new;
    }


}

