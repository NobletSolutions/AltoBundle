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
     * @param \NS\AltoBundle\Soap\Types\anyType $CustomerFileNumber
     * @return Data_eForm_Caveat
     */
    public function withCustomerFileNumber($CustomerFileNumber)
    {
        $new = clone $this;
        $new->CustomerFileNumber = $CustomerFileNumber;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getClaim()
    {
        return $this->Claim;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Claim
     * @return Data_eForm_Caveat
     */
    public function withClaim($Claim)
    {
        $new = clone $this;
        $new->Claim = $Claim;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getGround()
    {
        return $this->Ground;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Ground
     * @return Data_eForm_Caveat
     */
    public function withGround($Ground)
    {
        $new = clone $this;
        $new->Ground = $Ground;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCaveators()
    {
        return $this->Caveators;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Caveators
     * @return Data_eForm_Caveat
     */
    public function withCaveators($Caveators)
    {
        $new = clone $this;
        $new->Caveators = $Caveators;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAgent()
    {
        return $this->Agent;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Agent
     * @return Data_eForm_Caveat
     */
    public function withAgent($Agent)
    {
        $new = clone $this;
        $new->Agent = $Agent;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAffidavit()
    {
        return $this->Affidavit;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Affidavit
     * @return Data_eForm_Caveat
     */
    public function withAffidavit($Affidavit)
    {
        $new = clone $this;
        $new->Affidavit = $Affidavit;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getTitles()
    {
        return $this->Titles;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Titles
     * @return Data_eForm_Caveat
     */
    public function withTitles($Titles)
    {
        $new = clone $this;
        $new->Titles = $Titles;

        return $new;
    }


}

