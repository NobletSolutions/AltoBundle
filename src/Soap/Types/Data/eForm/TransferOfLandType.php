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
     * @param \NS\AltoBundle\Soap\Types\anyType $CustomerFileNumber
     * @return Data_eForm_TransferOfLandType
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
     * @return Data_eForm_TransferOfLandType
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
    public function getConsideration()
    {
        return $this->Consideration;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Consideration
     * @return Data_eForm_TransferOfLandType
     */
    public function withConsideration($Consideration)
    {
        $new = clone $this;
        $new->Consideration = $Consideration;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\AffidavitOfAttestations
     */
    public function getAffidavitOfAttestations()
    {
        return $this->AffidavitOfAttestations;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\AffidavitOfAttestations
     * $AffidavitOfAttestations
     * @return Data_eForm_TransferOfLandType
     */
    public function withAffidavitOfAttestations($AffidavitOfAttestations)
    {
        $new = clone $this;
        $new->AffidavitOfAttestations = $AffidavitOfAttestations;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Transferors
     */
    public function getTransferors()
    {
        return $this->Transferors;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Transferors $Transferors
     * @return Data_eForm_TransferOfLandType
     */
    public function withTransferors($Transferors)
    {
        $new = clone $this;
        $new->Transferors = $Transferors;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\TransfereeGroups
     */
    public function getTransfereeGroups()
    {
        return $this->TransfereeGroups;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\TransfereeGroups $TransfereeGroups
     * @return Data_eForm_TransferOfLandType
     */
    public function withTransfereeGroups($TransfereeGroups)
    {
        $new = clone $this;
        $new->TransfereeGroups = $TransfereeGroups;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\AffidavitReValue
     */
    public function getAffidavitReValue()
    {
        return $this->AffidavitReValue;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\AffidavitReValue $AffidavitReValue
     * @return Data_eForm_TransferOfLandType
     */
    public function withAffidavitReValue($AffidavitReValue)
    {
        $new = clone $this;
        $new->AffidavitReValue = $AffidavitReValue;

        return $new;
    }


}

