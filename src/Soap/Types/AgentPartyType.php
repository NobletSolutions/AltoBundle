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
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSurname()
    {
        return $this->Surname;
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


}

