<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-24
 * Time: 4:57 PM
 */

namespace NS\AltoBundle\Soap\Types\Response;


class Response
{
    /** @var int */
    private $ReturnCode;

    /** @var array|null */
    private $Errors = [];

    /** @var string|null */
    private $eFormIdentifier;

    /**
     * Response constructor.
     * @param int $ReturnCode
     * @param null|ResponseError[] $Errors
     * @param null|string $eFormIdentifier
     */
    public function __construct(int $ReturnCode, ?array $Errors = [], ?string $eFormIdentifier = null)
    {
        $this->ReturnCode = $ReturnCode;

        foreach ((array)$Errors['Error'] as $error) {
            $this->Errors[] = new ResponseError($error);
        }

        $this->eFormIdentifier = $eFormIdentifier;
    }

    public function getReturnCode(): int
    {
        return $this->ReturnCode;
    }

    public function hasError(): bool
    {
        return $this->ReturnCode !== 200;
    }

    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    public function getEFormIdentifier(): ?string
    {
        return $this->eFormIdentifier;
    }
}
