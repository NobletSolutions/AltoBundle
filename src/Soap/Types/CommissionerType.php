<?php

namespace NS\AltoBundle\Soap\Types;

use NS\AltoBundle\Soap\Exceptions\InvalidOptionException;

class CommissionerType
{
    /** @var string */
    private $GivenName = null;

    /** @var string */
    private $Surname = null;

    /** @var \DateTime */
    private $ExpiryDate = null;

    /** @var string */
    private $AuthorityDescription = null;

    /** @var string */
    private $AdditionalDescription = null;

    /** @var string */
    private $OtherDescription = null;

    /**
     * Constructor
     *
     * @var string $GivenName
     * @var string $Surname
     * @var \DateTime $ExpiryDate
     * @var string $AuthorityDescription
     * @var string $AdditionalDescription
     * @var string $OtherDescription
     */
    public function __construct(string $GivenName, string $Surname, \DateTime $ExpiryDate, string $AuthorityDescription, string $AdditionalDescription, $OtherDescription = null)
    {
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->ExpiryDate = $ExpiryDate;
        $allowedAuthority = [
            'Commissioner For Oaths',
            'Commissioner for Oaths Outside AB',
            'Lawyer (Commissioner For Oaths)',
            'Lawyer (Notary Public)',
            'Notary Public',
            'Student-At-Law (Notary Public)',
            'Student-At-Law (Commissioner For Oaths)',
            'Other',
        ];

        if (!in_array($AuthorityDescription, $allowedAuthority)) {
            throw new InvalidOptionException("$AuthorityDescription is an invalid authority description");
        }

        if ($AuthorityDescription == 'Other' && ($OtherDescription === null || empty($OtherDescription))) {
            throw new InvalidOptionException("When AuthorityDescription is Other a description is required");
        }

        $this->AuthorityDescription = $AuthorityDescription;
        $this->AdditionalDescription = $AdditionalDescription;
        $this->OtherDescription = $OtherDescription;
    }

    public function __toString()
    {
        return sprintf('<Commissioner><GivenName>%s</GivenName><Surname>%s</Surname><ExpiryDate>%s</ExpiryDate><AuthorityDescription>%s</AuthorityDescription><AdditionalDescription>%s</AdditionalDescription><OtherDescription>%s</OtherDescription></Commissioner>',
            $this->GivenName,
            $this->Surname,
            $this->ExpiryDate->format('Y-m-d'),
            $this->AuthorityDescription,
            $this->AdditionalDescription,
            $this->OtherDescription);
    }

    public function getGivenName(): string
    {
        return $this->GivenName;
    }

    public function getSurname(): string
    {
        return $this->Surname;
    }

    public function getExpiryDate(): \DateTime
    {
        return $this->ExpiryDate;
    }

    public function getAuthorityDescription(): string
    {
        return $this->AuthorityDescription;
    }

    public function getAdditionalDescription(): string
    {
        return $this->AdditionalDescription;
    }

    public function getOtherDescription(): ?string
    {
        return $this->OtherDescription;
    }
}

