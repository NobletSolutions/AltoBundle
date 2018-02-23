<?php

namespace NS\AltoBundle\Soap\Types;

class Data_eForm_Mortgage
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $CustomerFileNumber = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Titles = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $PrincipalAmount = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $StandardMortgageNumber = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Mortgagees = null;

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
    public function getTitles()
    {
        return $this->Titles;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getPrincipalAmount()
    {
        return $this->PrincipalAmount;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getStandardMortgageNumber()
    {
        return $this->StandardMortgageNumber;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getMortgagees()
    {
        return $this->Mortgagees;
    }


}

