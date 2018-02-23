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
     * @return \NS\AltoBundle\Soap\Types\EformHeaderType
     */
    public function getHeader_eForm()
    {
        return $this->Header_eForm;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_TransferOfLandType
     */
    public function getData_eForm_TransferOfLand()
    {
        return $this->Data_eForm_TransferOfLand;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Mortgage
     */
    public function getData_eForm_Mortgage()
    {
        return $this->Data_eForm_Mortgage;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Caveat
     */
    public function getData_eForm_Caveat()
    {
        return $this->Data_eForm_Caveat;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Discharge
     */
    public function getData_eForm_Discharge()
    {
        return $this->Data_eForm_Discharge;
    }

    /**
     * @return \NS\AltoBundle\Soap\Types\Data_eForm_Universal
     */
    public function getData_eForm_Universal()
    {
        return $this->Data_eForm_Universal;
    }


}

