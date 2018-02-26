<?php

namespace NS\AltoBundle\Soap\Types\Data\eForm;

use NS\AltoBundle\Soap\Types\MortgageePartyGroupType;
use NS\AltoBundle\Soap\Types\TitlesType;

class Mortgage
{
    /** @var string */
    private $CustomerFileNumber = null;

    /** @var TitlesType */
    private $Titles = null;

    /** @var string */
    private $PrincipalAmount = null;

    /** @var string */
    private $StandardMortgageNumber = null;

    /** @var MortgageePartyGroupType */
    private $Mortgagees = null;

    /**
     * Constructor
     *
     * @param string $CustomerFileNumber
     * @param TitlesType $Titles
     * @param string $PrincipalAmount
     * @param string $StandardMortgageNumber
     * @param MortgageePartyGroupType $Mortgagees
     */
    public function __construct(string $CustomerFileNumber, TitlesType $Titles, string $PrincipalAmount, string $StandardMortgageNumber, MortgageePartyGroupType $Mortgagees)
    {
        $this->CustomerFileNumber = $CustomerFileNumber;
        $this->Titles = $Titles;
        $this->PrincipalAmount = $PrincipalAmount;
        $this->StandardMortgageNumber = $StandardMortgageNumber;
        $this->Mortgagees = $Mortgagees;
    }

    public function getCustomerFileNumber(): string
    {
        return $this->CustomerFileNumber;
    }

    public function getTitles(): TitlesType
    {
        return $this->Titles;
    }

    public function getPrincipalAmount(): string
    {
        return $this->PrincipalAmount;
    }

    public function getStandardMortgageNumber(): string
    {
        return $this->StandardMortgageNumber;
    }

    public function getMortgagees(): MortgageePartyGroupType
    {
        return $this->Mortgagees;
    }
}

