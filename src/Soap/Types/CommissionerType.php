<?php

namespace NS\AltoBundle\Soap\Types;

class CommissionerType
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
    private $ExpiryDate = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $AuthorityDescription = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $AdditionalDescription = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $OtherDescription = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $GivenName
     * @return CommissionerType
     */
    public function withGivenName($GivenName)
    {
        $new = clone $this;
        $new->GivenName = $GivenName;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Surname
     * @return CommissionerType
     */
    public function withSurname($Surname)
    {
        $new = clone $this;
        $new->Surname = $Surname;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getExpiryDate()
    {
        return $this->ExpiryDate;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ExpiryDate
     * @return CommissionerType
     */
    public function withExpiryDate($ExpiryDate)
    {
        $new = clone $this;
        $new->ExpiryDate = $ExpiryDate;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAuthorityDescription()
    {
        return $this->AuthorityDescription;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $AuthorityDescription
     * @return CommissionerType
     */
    public function withAuthorityDescription($AuthorityDescription)
    {
        $new = clone $this;
        $new->AuthorityDescription = $AuthorityDescription;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAdditionalDescription()
    {
        return $this->AdditionalDescription;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $AdditionalDescription
     * @return CommissionerType
     */
    public function withAdditionalDescription($AdditionalDescription)
    {
        $new = clone $this;
        $new->AdditionalDescription = $AdditionalDescription;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getOtherDescription()
    {
        return $this->OtherDescription;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $OtherDescription
     * @return CommissionerType
     */
    public function withOtherDescription($OtherDescription)
    {
        $new = clone $this;
        $new->OtherDescription = $OtherDescription;

        return $new;
    }


}

