<?php

namespace NS\AltoBundle\Soap\Types;

class SignatorType
{
    /** @var string */
    private $ContactGivenName = null;

    /** @var string */
    private $ContactSurname = null;

    /** @var ShortAddressType */
    private $Address = null;

    /**
     * Constructor
     *
     * @var string $ContactGivenName
     * @var string $ContactSurname
     * @var ShortAddressType $Address
     */
    public function __construct(string $ContactGivenName, string $ContactSurname, ShortAddressType $Address)
    {
        $this->ContactGivenName = $ContactGivenName;
        $this->ContactSurname = $ContactSurname;
        $this->Address = $Address;
    }

    public function getContactGivenName(): string
    {
        return $this->ContactGivenName;
    }

    public function getContactSurname(): string
    {
        return $this->ContactSurname;
    }

    public function getAddress(): ShortAddressType
    {
        return $this->Address;
    }
}

