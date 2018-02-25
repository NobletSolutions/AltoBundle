<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-24
 * Time: 5:36 PM
 */

namespace NS\AltoBundle\Soap\Types\Response;


class ResponseError
{
    /** @var string */
    private $message;

    /**
     * ResponseError constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function __toString()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
