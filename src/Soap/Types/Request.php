<?php

namespace NS\AltoBundle\Soap\Types;

use NS\AltoBundle\Soap\Types\Data\eForm\Caveat;
use NS\AltoBundle\Soap\Types\Data\eForm\Discharge;
use NS\AltoBundle\Soap\Types\Data\eForm\Mortgage;
use NS\AltoBundle\Soap\Types\Data\eForm\TransferOfLandType;
use NS\AltoBundle\Soap\Types\Data\eForm\Universal;
use Phpro\SoapClient\Type\RequestInterface;

class Request implements RequestInterface
{
    /**
     * @var string
     */
    private $ServiceType = 'eForm';

    /**
     * @var EformHeaderType
     */
    private $Header_eForm = null;

    /**
     * @var TransferOfLandType
     */
    private $Data_eForm_TransferOfLand = null;

    /**
     * @var Mortgage
     */
    private $Data_eForm_Mortgage = null;

    /**
     * @var Caveat
     */
    private $Data_eForm_Caveat = null;

    /**
     * @var Discharge
     */
    private $Data_eForm_Discharge = null;

    /**
     * @var Universal
     */
    private $Data_eForm_Universal = null;

    /**
     * Constructor
     *
     * @param EformHeaderType $Header_eForm
     * @param TransferOfLandType $tfla
     * @param Mortgage $mortgage
     * @param Caveat $caveat
     * @param Discharge $discharge
     * @param Universal $universal
     */
    public function __construct($Header_eForm, TransferOfLandType $tfla = null, Mortgage $mortgage = null, Caveat $caveat = null, Discharge $discharge = null, Universal $universal = null)
    {
        $this->Header_eForm = $Header_eForm;
        $this->Data_eForm_TransferOfLand = $tfla;
        $this->Data_eForm_Mortgage = $mortgage;
        $this->Data_eForm_Caveat = $caveat;
        $this->Data_eForm_Discharge = $discharge;
        $this->Data_eForm_Universal = $universal;
    }

    public function __toString()
    {
        if ($this->Data_eForm_Universal) {
            return sprintf('<Request><ServiceType>eForm</ServiceType><Header_eForm>%s</Header_eForm>%s</Request>', $this->Header_eForm, $this->Data_eForm_Universal);
        }

        if ($this->Data_eForm_Discharge) {
            return sprintf('<Request><ServiceType>eForm</ServiceType><Header_eForm>%s</Header_eForm>%s</Request>', $this->Header_eForm, $this->Data_eForm_Discharge);
        }

        if ($this->Data_eForm_Caveat) {
            return sprintf('<Request><ServiceType>eForm</ServiceType><Header_eForm>%s</Header_eForm>%s</Request>', $this->Header_eForm, $this->Data_eForm_Caveat);
        }

        if ($this->Data_eForm_Mortgage) {
            return sprintf('<Request><ServiceType>eForm</ServiceType><Header_eForm>%s</Header_eForm>%s</Request>', $this->Header_eForm, $this->Data_eForm_Mortgage);
        }

        if ($this->Data_eForm_TransferOfLand) {
            return sprintf('<Request><ServiceType>eForm</ServiceType><Header_eForm>%s</Header_eForm>%s</Request>', $this->Header_eForm, $this->Data_eForm_TransferOfLand);
        }
    }


    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return Request
     */
    public function withServiceType($ServiceType)
    {
        $new = clone $this;
        $new->ServiceType = $ServiceType;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\EformHeaderType
     */
    public function getHeader_eForm()
    {
        return $this->Header_eForm;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\EformHeaderType $Header_eForm
     * @return Request
     */
    public function withHeader_eForm($Header_eForm)
    {
        $new = clone $this;
        $new->Header_eForm = $Header_eForm;

        return $new;
    }

    /**
     * @return TransferOfLandType
     */
    public function getData_eForm_TransferOfLand()
    {
        return $this->Data_eForm_TransferOfLand;
    }

    /**
     * @param TransferOfLandType
     * $Data_eForm_TransferOfLand
     * @return Request
     */
    public function withData_eForm_TransferOfLand($Data_eForm_TransferOfLand)
    {
        $new = clone $this;
        $new->Data_eForm_TransferOfLand = $Data_eForm_TransferOfLand;

        return $new;
    }

    /**
     * @return Mortgage
     */
    public function getData_eForm_Mortgage()
    {
        return $this->Data_eForm_Mortgage;
    }

    /**
     * @param Mortgage $Data_eForm_Mortgage
     * @return Request
     */
    public function withData_eForm_Mortgage($Data_eForm_Mortgage)
    {
        $new = clone $this;
        $new->Data_eForm_Mortgage = $Data_eForm_Mortgage;

        return $new;
    }

    /**
     * @return Caveat
     */
    public function getData_eForm_Caveat()
    {
        return $this->Data_eForm_Caveat;
    }

    /**
     * @param Caveat $Data_eForm_Caveat
     * @return Request
     */
    public function withData_eForm_Caveat($Data_eForm_Caveat)
    {
        $new = clone $this;
        $new->Data_eForm_Caveat = $Data_eForm_Caveat;

        return $new;
    }

    /**
     * @return Discharge
     */
    public function getData_eForm_Discharge()
    {
        return $this->Data_eForm_Discharge;
    }

    /**
     * @param Discharge $Data_eForm_Discharge
     * @return Request
     */
    public function withData_eForm_Discharge($Data_eForm_Discharge)
    {
        $new = clone $this;
        $new->Data_eForm_Discharge = $Data_eForm_Discharge;

        return $new;
    }

    /**
     * @return Universal
     */
    public function getData_eForm_Universal()
    {
        return $this->Data_eForm_Universal;
    }

    /**
     * @param Universal $Data_eForm_Universal
     * @return Request
     */
    public function withData_eForm_Universal($Data_eForm_Universal)
    {
        $new = clone $this;
        $new->Data_eForm_Universal = $Data_eForm_Universal;

        return $new;
    }


}

