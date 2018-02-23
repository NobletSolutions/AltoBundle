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
     * Constructor
     *
     * @var string $customer
     * @var string $orderdetails
     * @var string $billto
     * @var string $shipto
     * @var string $status
     */
    public function __construct($customer, $orderdetails, $billto, $shipto, $status)
    {
        $this->customer = $customer;
        $this->orderdetails = $orderdetails;
        $this->billto = $billto;
        $this->shipto = $shipto;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     * @return Ordertype
     */
    public function withCustomer($customer)
    {
        $new = clone $this;
        $new->customer = $customer;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrderdetails()
    {
        return $this->orderdetails;
    }

    /**
     * @param string $orderdetails
     * @return Ordertype
     */
    public function withOrderdetails($orderdetails)
    {
        $new = clone $this;
        $new->orderdetails = $orderdetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillto()
    {
        return $this->billto;
    }

    /**
     * @param string $billto
     * @return Ordertype
     */
    public function withBillto($billto)
    {
        $new = clone $this;
        $new->billto = $billto;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipto()
    {
        return $this->shipto;
    }

    /**
     * @param string $shipto
     * @return Ordertype
     */
    public function withShipto($shipto)
    {
        $new = clone $this;
        $new->shipto = $shipto;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Ordertype
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

