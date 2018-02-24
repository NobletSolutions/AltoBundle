<?php

namespace NS\AltoBundle\Soap\Types;

class AgentPartyType
{
    /** @var string */
    private $GivenName = null;

    /** @var string */
    private $Surname = null;

    /** @var \DateTime */
    private $ExecutionDate = null;

    /** @var string */
    private $CorporationName = null;

    /** @var string */
    private $CorporateSeal = null;

    public static function createIndividual(string $given, string $surname, \DateTime $execution)
    {
        $obj = new self();
        $obj->initializeIndividual($given, $surname, $execution);

        return $obj;
    }

    private function initializeIndividual(string $given, string $surname, \DateTime $execution)
    {
        $this->GivenName = $given;
        $this->Surname = $surname;
        $this->ExecutionDate = $execution;
    }

    public static function createCorporation(string $corporationName, bool $corporateSeal, \DateTime $execution)
    {
        $obj = new self();
        $obj->initializeCorporation($corporationName, $corporateSeal, $execution);

        return $obj;
    }

    private function initializeCorporation(string $corporationName, bool $corporateSeal, \DateTime $execution)
    {
        $this->CorporationName = $corporationName;
        $this->CorporateSeal = $corporateSeal;
        $this->ExecutionDate = $execution;
    }

    public function __toString()
    {
        if ($this->CorporationName) {
            return sprintf('<Agent><ExecutionDate>%s</ExecutionDate><CorporationName>%s</CorporationName><CorporateSeal>%s</CorporateSeal></Agent>', $this->ExecutionDate->format('Y-m-d'), $this->CorporationName, $this->CorporateSeal ? 'true':'false');
        }

        return sprintf('<Agent><ExecutionDate>%s</ExecutionDate><GivenName>%s</GivenName><Surname>%s</Surname></Agent>', $this->ExecutionDate->format('Y-m-d'), $this->GivenName, $this->Surname);
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

    public function getCorporationName(): ?string
    {
        return $this->CorporationName;
    }

    public function getCorporateSeal(): bool
    {
        return $this->CorporateSeal;
    }
}

