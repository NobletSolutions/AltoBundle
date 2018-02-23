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
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getExpiryDate()
    {
        return $this->ExpiryDate;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAuthorityDescription()
    {
        return $this->AuthorityDescription;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAdditionalDescription()
    {
        return $this->AdditionalDescription;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getOtherDescription()
    {
        return $this->OtherDescription;
    }


}

