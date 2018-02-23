<?php

namespace NS\AltoBundle\Soap\Types;

class Data_eForm_TransferOfLandType
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
    private $Consideration = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\AffidavitOfAttestations
     */
    private $AffidavitOfAttestations = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Transferors
     */
    private $Transferors = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\TransfereeGroups
     */
    private $TransfereeGroups = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\AffidavitReValue
     */
    private $AffidavitReValue = null;

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
    public function getConsideration()
    {
        return $this->Consideration;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\AffidavitOfAttestations
     */
    public function getAffidavitOfAttestations()
    {
        return $this->AffidavitOfAttestations;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Transferors
     */
    public function getTransferors()
    {
        return $this->Transferors;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\TransfereeGroups
     */
    public function getTransfereeGroups()
    {
        return $this->TransfereeGroups;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\AffidavitReValue
     */
    public function getAffidavitReValue()
    {
        return $this->AffidavitReValue;
    }


}

