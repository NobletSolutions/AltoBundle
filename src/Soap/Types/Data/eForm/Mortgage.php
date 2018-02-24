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

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getCustomerFileNumber()
    {
        return $this->CustomerFileNumber;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $CustomerFileNumber
     * @return Data_eForm_Mortgage
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
    public function getTitles()
    {
        return $this->Titles;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Titles
     * @return Data_eForm_Mortgage
     */
    public function withTitles($Titles)
    {
        $new = clone $this;
        $new->Titles = $Titles;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getPrincipalAmount()
    {
        return $this->PrincipalAmount;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $PrincipalAmount
     * @return Data_eForm_Mortgage
     */
    public function withPrincipalAmount($PrincipalAmount)
    {
        $new = clone $this;
        $new->PrincipalAmount = $PrincipalAmount;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getStandardMortgageNumber()
    {
        return $this->StandardMortgageNumber;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $StandardMortgageNumber
     * @return Data_eForm_Mortgage
     */
    public function withStandardMortgageNumber($StandardMortgageNumber)
    {
        $new = clone $this;
        $new->StandardMortgageNumber = $StandardMortgageNumber;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getMortgagees()
    {
        return $this->Mortgagees;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Mortgagees
     * @return Data_eForm_Mortgage
     */
    public function withMortgagees($Mortgagees)
    {
        $new = clone $this;
        $new->Mortgagees = $Mortgagees;

        return $new;
    }


}

