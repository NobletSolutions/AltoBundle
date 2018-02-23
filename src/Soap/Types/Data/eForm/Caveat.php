<?php

namespace NS\AltoBundle\Soap\Types;

class Data_eForm_Caveat
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CustomerFileNumber = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Claim = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Ground = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Caveators = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Agent = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Affidavit = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Titles = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCustomerFileNumber()
    {
        return $this->CustomerFileNumber;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getClaim()
    {
        return $this->Claim;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getGround()
    {
        return $this->Ground;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCaveators()
    {
        return $this->Caveators;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAgent()
    {
        return $this->Agent;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavit()
    {
        return $this->Affidavit;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTitles()
    {
        return $this->Titles;
    }


}

