<?php

namespace NS\AltoBundle\Soap\Types;

class SignatorType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $ContactGivenName = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $ContactSurname = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $Address = null;

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getContactGivenName()
    {
        return $this->ContactGivenName;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getContactSurname()
    {
        return $this->ContactSurname;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAddress()
    {
        return $this->Address;
    }


}

