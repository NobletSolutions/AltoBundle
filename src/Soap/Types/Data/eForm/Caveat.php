<?php

namespace NS\AltoBundle\Soap\Types\Data\eForm;

use NS\AltoBundle\Soap\Types\AgentPartyType;
use NS\AltoBundle\Soap\Types\AgentType;
use NS\AltoBundle\Soap\Types\CaveatorPartyGroupType;
use NS\AltoBundle\Soap\Types\ECAVEAffidavitType;

class Caveat
{
    /** @var null|string */
    private $CustomerFileNumber = null;

    /** @var null|string */
    private $Claim = null;

    /** @var null|string */
    private $Ground = null;

    /** @var array|CaveatorPartyGroupType[]  */
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
     * Constructor
     *
     * @param string $CustomerFileNumber
     * @param string $Claim
     * @param string $Ground
     * @param array $Caveators
     * @param AgentType $Agent
     * @param ECAVEAffidavitType $Affidavit
     * @param array $Titles
     */
    public function __construct(string $CustomerFileNumber, string $Claim, string $Ground, array $Caveators, AgentPartyType $Agent, ECAVEAffidavitType $Affidavit, array $Titles)
    {
        $this->CustomerFileNumber = $CustomerFileNumber;
        $this->Claim = $Claim;
        $this->Ground = $Ground;
        $this->Caveators = $Caveators;
        $this->Agent = $Agent;
        $this->Affidavit = $Affidavit;
        $this->Titles = $Titles;
    }

    public function __toString()
    {
        $formatStr = '<Data_eForm_Caveat>
    <CustomerFileNumber>%s</CustomerFileNumber>
    <Claim>%s</Claim>
    <Ground>%s</Ground>
    <Caveators>%s</Caveators>
    %s
    %s
</Data_eForm_Caveat>';
        return sprintf($formatStr,
            $this->CustomerFileNumber,
            $this->Claim,
            $this->Ground,
            implode('',$this->Caveators),
            $this->Agent,
            $this->Affidavit
        );
    }
    public function getCustomerFileNumber(): string
    {
        return $this->CustomerFileNumber;
    }

    public function getClaim(): string
    {
        return $this->Claim;
    }

    public function getGround(): string
    {
        return $this->Ground;
    }

    public function getCaveators(): array
    {
        return $this->Caveators;
    }

    public function getAgent(): AgentType
    {
        return $this->Agent;
    }

    public function getAffidavit(): ECAVEAffidavitType
    {
        return $this->Affidavit;
    }

    public function getTitles(): array
    {
        return $this->Titles;
    }
}

