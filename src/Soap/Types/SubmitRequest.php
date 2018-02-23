<?php

namespace NS\AltoBundle\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SubmitRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $request;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }


}

