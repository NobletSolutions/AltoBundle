<?php

namespace NS\AltoBundle\Soap\Types;

class EformHeaderType
{

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $RequestType = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $DocumentType = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\anyType
     */
    private $eFormIdentifier = null;

    /**
     * Constructor
     *
     * @var \NS\AltoBundle\Soap\Types\anyType $RequestType
     * @var \NS\AltoBundle\Soap\Types\anyType $DocumentType
     * @var \NS\AltoBundle\Soap\Types\anyType $eFormIdentifier
     */
    public function __construct($RequestType, $DocumentType, $eFormIdentifier)
    {
        $this->RequestType = $RequestType;
        $this->DocumentType = $DocumentType;
        $this->eFormIdentifier = $eFormIdentifier;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $RequestType
     * @return EformHeaderType
     */
    public function withRequestType($RequestType)
    {
        $new = clone $this;
        $new->RequestType = $RequestType;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $DocumentType
     * @return EformHeaderType
     */
    public function withDocumentType($DocumentType)
    {
        $new = clone $this;
        $new->DocumentType = $DocumentType;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\anyType
     */
    public function getEFormIdentifier()
    {
        return $this->eFormIdentifier;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\anyType $eFormIdentifier
     * @return EformHeaderType
     */
    public function withEFormIdentifier($eFormIdentifier)
    {
        $new = clone $this;
        $new->eFormIdentifier = $eFormIdentifier;

        return $new;
    }


}

