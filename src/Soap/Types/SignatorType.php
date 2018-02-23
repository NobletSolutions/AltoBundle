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
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $ContactGivenName
     * @var \NS\AltoBundle\Soap\Types\anyType $ContactSurname
     * @var \NS\AltoBundle\Soap\Types\anyType $Address
     */
    public function __construct($ContactGivenName, $ContactSurname, $Address)
    {
        $this->ContactGivenName = $ContactGivenName;
        $this->ContactSurname = $ContactSurname;
        $this->Address = $Address;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getContactGivenName()
    {
        return $this->ContactGivenName;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ContactGivenName
     * @return SignatorType
     */
    public function withContactGivenName($ContactGivenName)
    {
        $new = clone $this;
        $new->ContactGivenName = $ContactGivenName;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getContactSurname()
    {
        return $this->ContactSurname;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $ContactSurname
     * @return SignatorType
     */
    public function withContactSurname($ContactSurname)
    {
        $new = clone $this;
        $new->ContactSurname = $ContactSurname;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $Address
     * @return SignatorType
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }


}

