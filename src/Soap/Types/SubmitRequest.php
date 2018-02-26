<?php

namespace NS\AltoBundle\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SubmitRequest implements RequestInterface
{
    /** @var string */
    private $username = null;

    /** @var string */
    private $password = null;

    /** @var string */
    private $request = null;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var string $request
     */
    public function __construct(string $username, string $password, string $request)
    {
        $this->username = $username;
        $this->password = $password;
        $this->request = $request;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRequest(): string
    {
        return $this->request;
    }
}

