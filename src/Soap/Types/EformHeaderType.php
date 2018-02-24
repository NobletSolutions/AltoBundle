<?php

namespace NS\AltoBundle\Soap\Types;

class EformHeaderType
{
    /** @var string */
    private $RequestType;

    /** @var string */
    private $DocumentType;

    /** @var string */
    private $eFormIdentifier = null;

    /**
     * Constructor
     *
     * @param string $RequestType
     * @param string $DocumentType
     * @param string $eFormIdentifier
     */
    public function __construct(string $RequestType, string $DocumentType, string $eFormIdentifier = null)
    {
        $this->RequestType = $RequestType;
        $this->DocumentType = $DocumentType;
        $this->eFormIdentifier = $eFormIdentifier;
    }

    public function __toString() {
        return sprintf('<RequestType>%s</RequestType><DocumentType>%s</DocumentType><eFormIdentifier>%s</eFormIdentifier>',$this->RequestType,$this->DocumentType,$this->eFormIdentifier);
    }

    public function getRequestType(): string
    {
        return $this->RequestType;
    }

    public function getDocumentType(): string
    {
        return $this->DocumentType;
    }

    public function getEFormIdentifier(): ?string
    {
        return $this->eFormIdentifier;
    }
}

