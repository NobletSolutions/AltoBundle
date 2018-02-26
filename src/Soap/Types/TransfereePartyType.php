<?php

namespace NS\AltoBundle\Soap\Types;

class TransfereePartyType
{
    /** @var string */
    private $GivenName;

    /** @var string */
    private $Surname = null;

    /** @var \DateTime */
    private $ExecutionDate = null;

    /** @var string */
    private $IndivdualToSignAffidvitReValue = null;

    /** @var LongAddressType */
    private $Address = null;

    /** @var string */
    private $CorporationName = null;

//    /**
//     * Constructor
//     *
//     * @param string $GivenName
//     * @param string $Surname
//     * @param \DateTime $ExecutionDate
//     * @param bool $IndivdualToSignAffidvitReValue
//     * @param LongAddressType $Address
//     * @param string $CorporationName
//     */
//    public function __construct(string $GivenName, string $Surname, \DateTime $ExecutionDate, bool $IndivdualToSignAffidvitReValue, LongAddressType $Address, string $CorporationName)
//    {
//        $this->GivenName = $GivenName;
//        $this->Surname = $Surname;
//        $this->ExecutionDate = $ExecutionDate;
//        $this->IndivdualToSignAffidvitReValue = $IndivdualToSignAffidvitReValue;
//        $this->Address = $Address;
//        $this->CorporationName = $CorporationName;
//    }

    public static function createIndividual(string $GivenName, string $Surname, \DateTime $ExecutionDate, bool $IndivdualToSignAffidvitReValue, LongAddressType $Address)
    {
        $obj = new self();
        $obj->initializeIndividual($GivenName, $Surname, $ExecutionDate, $IndivdualToSignAffidvitReValue?'true':'false', $Address);

        return $obj;
    }

    public static function createCorporation(string $corpName, \DateTime $ExecutionDate, bool $IndivdualToSignAffidvitReValue, LongAddressType $Address)
    {
        $obj = new self();
        $obj->initializeCorporation($corpName, $ExecutionDate, $IndivdualToSignAffidvitReValue?'true':'false', $Address);

        return $obj;
    }

    public function initializeIndividual(string $GivenName, string $Surname, \DateTime $ExecutionDate, string $IndivdualToSignAffidvitReValue, LongAddressType $Address)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->ExecutionDate = $ExecutionDate;
        $this->IndivdualToSignAffidvitReValue = $IndivdualToSignAffidvitReValue;
        $this->Address = $Address;
    }

    public function initializeCorporation(string $corpName, \DateTime $ExecutionDate, string $IndivdualToSignAffidvitReValue, LongAddressType $Address)
    {
        $this->CorporationName = $corpName;
        $this->ExecutionDate = $ExecutionDate;
        $this->IndivdualToSignAffidvitReValue = $IndivdualToSignAffidvitReValue;
        $this->Address = $Address;
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

    public function getIndivdualToSignAffidvitReValue(): string
    {
        return $this->IndivdualToSignAffidvitReValue;
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

