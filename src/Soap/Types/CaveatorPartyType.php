<?php

namespace NS\AltoBundle\Soap\Types;

class CaveatorPartyType
{
    /** @var string */
    private $GivenName = null;

    /** @var string */
    private $Surname = null;

    /** @var \DateTime */
    private $ExecutionDate = null;

    /** @var LongAddressType */
    private $Address = null;

    /** @var string  */
    private $CorporationName = null;

//    /**
//     * Constructor
//     *
//     * @var \NS\AltoBundle\Soap\Types\anyType $GivenName
//     * @var \NS\AltoBundle\Soap\Types\anyType $Surname
//     * @var \NS\AltoBundle\Soap\Types\anyType $ExecutionDate
//     * @var \NS\AltoBundle\Soap\Types\anyType $Address
//     * @var \NS\AltoBundle\Soap\Types\anyType $CorporationName
//     */
//    public function __construct($GivenName, $Surname, $ExecutionDate, LongAddressType $Address, $CorporationName)
//    {
//        $this->GivenName = $GivenName;
//        $this->Surname = $Surname;
//        $this->ExecutionDate = $ExecutionDate;
//        $this->Address = $Address;
//        $this->CorporationName = $CorporationName;
//    }

    public static function createIndividual(string $given, string $surname, \DateTime $execution, LongAddressType $addressType)
    {
        $obj = new self();
        $obj->initializeIndividual($given, $surname, $execution, $addressType);
        return $obj;
    }

    public static function createCorporation(string $corporation, \DateTime $execution, LongAddressType $addressType)
    {
        $obj = new self();
        $obj->initializeCorporation($corporation, $execution, $addressType);

        return $obj;
    }

    public function initializeIndividual(string $GivenName, string $Surname, \DateTime $ExecutionDate, LongAddressType $Address)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->ExecutionDate = $ExecutionDate;
        $this->Address = $Address;
    }

    public function initializeCorporation(string $name, \DateTime $ExecutionDate, LongAddressType $Address)
    {
        $this->CorporationName = $name;
        $this->ExecutionDate = $ExecutionDate;
        $this->Address = $Address;
    }

    public function __toString()
    {
        if ($this->CorporationName) {
            $corpFormatStr = '<Caveator><CorporationName>%s</CorporationName><ExecutionDate>%s</ExecutionDate>%s</Caveator>';
            return sprintf($corpFormatStr, $this->CorporationName, $this->ExecutionDate->format('Y-m-d'), $this->Address);
        }

        $personFormatStr = '<Caveator><GivenName>%s</GivenName><Surname>%s</Surname><ExecutionDate>%s</ExecutionDate>%s</Caveator>';
        return sprintf($personFormatStr, $this->GivenName, $this->Surname, $this->ExecutionDate->format('Y-m-d'), $this->Address);
    }

    public function getGivenName(): ?string
    {
        return $this->GivenName;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function getExecutionDate(): \DateTime
    {
        return $this->ExecutionDate;
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
