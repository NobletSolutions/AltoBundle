<?php

namespace NS\AltoBundle\Soap\Types;

class Ordertype
{

    /**
     * @var string
     */
    private $customer = null;

    /**
     * @var string
     */
    private $orderdetails = null;

    /**
     * @var string
     */
    private $billto = null;

    /**
     * @var string
     */
    private $shipto = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return string
     */
    public function getOrderdetails()
    {
        return $this->orderdetails;
    }

    /**
     * @return string
     */
    public function getBillto()
    {
        return $this->billto;
    }

    /**
     * @return string
     */
    public function getShipto()
    {
        return $this->shipto;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}

