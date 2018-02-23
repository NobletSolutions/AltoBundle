<?php

namespace NS\AltoBundle\Soap\Types;

class CaveatorPartyType
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
    private $Address = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CorporationName = null;

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
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCorporationName()
    {
        return $this->CorporationName;
    }


}

