<?php

namespace NS\AltoBundle\Soap\Types;

class MortgageePartyType
{
    /** @var string */
    private $GivenName = null;

    /** @var string */
    private $Surname = null;

    /** @var string */
    private $CorporationName = null;

    /** @var LongAddressType */
    private $Address;

    public static function createPersonMortgagee(string $given, string $surname, LongAddressType $address)
    {
        $obj = new self();
        $obj->initializePerson($given, $surname, $address);
        return $obj;
    }

    public static function createCorporationMortgagee(string $corpName, LongAddressType $address)
    {
        $obj = new self();
        $obj->initializeCorp($corpName, $address);
        return $obj;
    }

    private function initializeCorp(string $corpName, LongAddressType $address)
    {
        $this->CorporationName = $corpName;
        $this->Address = $address;
    }

    private function initializePerson(string $given, string $surname, LongAddressType $address)
    {
        $this->GivenName = $given;
        $this->Surname = $surname;
        $this->Address = $address;
    }

    public function getGivenName(): ?string
    {
        return $this->GivenName;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function getAddress(): LongAddressType
    {
        return $this->Address;
    }

    public function getCorporationName(): ?string
    {
        return $this->CorporationName;
    }
}
