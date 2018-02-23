<?php

namespace NS\AltoBundle\Soap\Types;


use Phpro\SoapClient\Type\RequestInterface;

class Request implements RequestInterface
{

    /**
     * @var string
     */
    private $ServiceType = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\EformHeaderType
     */
    private $Header_eForm = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Data_eForm_TransferOfLandType
     */
    private $Data_eForm_TransferOfLand = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Data_eForm_Mortgage
     */
    private $Data_eForm_Mortgage = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Data_eForm_Caveat
     */
    private $Data_eForm_Caveat = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Data_eForm_Discharge
     */
    private $Data_eForm_Discharge = null;

    /**
     * @var \NS\AltoBundle\Soap\Types\Data_eForm_Universal
     */
    private $Data_eForm_Universal = null;

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
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_TransferOfLandType
     */
    public function getData_eForm_TransferOfLand()
    {
        return $this->Data_eForm_TransferOfLand;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Data_eForm_TransferOfLandType
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
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Mortgage
     */
    public function getData_eForm_Mortgage()
    {
        return $this->Data_eForm_Mortgage;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Data_eForm_Mortgage $Data_eForm_Mortgage
     * @return Request
     */
    public function withData_eForm_Mortgage($Data_eForm_Mortgage)
    {
        $new = clone $this;
        $new->Data_eForm_Mortgage = $Data_eForm_Mortgage;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Caveat
     */
    public function getData_eForm_Caveat()
    {
        return $this->Data_eForm_Caveat;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Data_eForm_Caveat $Data_eForm_Caveat
     * @return Request
     */
    public function withData_eForm_Caveat($Data_eForm_Caveat)
    {
        $new = clone $this;
        $new->Data_eForm_Caveat = $Data_eForm_Caveat;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Discharge
     */
    public function getData_eForm_Discharge()
    {
        return $this->Data_eForm_Discharge;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Data_eForm_Discharge $Data_eForm_Discharge
     * @return Request
     */
    public function withData_eForm_Discharge($Data_eForm_Discharge)
    {
        $new = clone $this;
        $new->Data_eForm_Discharge = $Data_eForm_Discharge;

        return $new;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Universal
     */
    public function getData_eForm_Universal()
    {
        return $this->Data_eForm_Universal;
    }

    /**
     * @param \NS\AltoBundle\Soap\Types\Data_eForm_Universal $Data_eForm_Universal
     * @return Request
     */
    public function withData_eForm_Universal($Data_eForm_Universal)
    {
        $new = clone $this;
        $new->Data_eForm_Universal = $Data_eForm_Universal;

        return $new;
    }


}

