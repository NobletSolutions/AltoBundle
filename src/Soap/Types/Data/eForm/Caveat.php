<?php

namespace NS\AltoBundle\Soap\Types\Data\eForm;

use NS\AltoBundle\Soap\Types\AffidavitType;
use NS\AltoBundle\Soap\Types\AgentPartyType;
use NS\AltoBundle\Soap\Types\CaveatorPartyGroupType;
use NS\AltoBundle\Soap\Types\ECAVEAffidavitType;
use NS\AltoBundle\Soap\Types\TitlesType;

class Caveat
{
    /** @var null|string */
    private $CustomerFileNumber = null;

    /** @var null|string */
    private $Claim = null;

    /** @var null|string */
    private $Ground = null;

    /** @var CaveatorPartyGroupType  */
    private $Caveators = null;

    /** @var AgentPartyType */
    private $Agent = null;

    /** @var AffidavitType */
    private $Affidavit = null;

    /** @var TitlesType */
    private $Titles;

    /**
     * Constructor
     *
     * @param string $CustomerFileNumber
     * @param string $Claim
     * @param string $Ground
     * @param CaveatorPartyGroupType $Caveators
     * @param AgentPartyType $Agent
     * @param ECAVEAffidavitType $Affidavit
     * @param TitlesType $Titles
     */
    public function __construct(string $CustomerFileNumber, string $Claim, string $Ground, CaveatorPartyGroupType $Caveators, AgentPartyType $Agent, ECAVEAffidavitType $Affidavit, TitlesType $Titles)
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

    public function getCaveators(): CaveatorPartyGroupType
    {
        return $this->Caveators;
    }

    public function getAgent(): AgentPartyType
    {
        return $this->Agent;
    }

    public function getAffidavit(): ECAVEAffidavitType
    {
        return $this->Affidavit;
    }

    public function getTitles(): TitlesType
    {
        return $this->Titles;
    }
}

