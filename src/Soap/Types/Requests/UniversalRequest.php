<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-23
 * Time: 9:58 PM
 */

namespace NS\AltoBundle\Soap\Types\Requests;

use NS\AltoBundle\Soap\Types\Data\eForm\Universal;
use NS\AltoBundle\Soap\Types\EformHeaderType;

class UniversalRequest extends AbstractRequest
{
    /**
     * @var UniversalRequest
     */
    private $Data_eForm_Universal = null;

    /**
     * UniversalRequest constructor.
     * @param EformHeaderType $Header_eForm
     * @param Universal|null $universal
     */
    public function __construct(EformHeaderType $Header_eForm, Universal $universal = null)
    {
        $this->Header_eForm = $Header_eForm;
        $this->Data_eForm_Universal = $universal;
    }

    public static function createForm(Universal $universal, string $docType): UniversalRequest
    {
        return new self(new EformHeaderType('Create', $docType), $universal);
    }

    public static function updateForm(Universal $universal, string $docType, string $formId): UniversalRequest
    {
        return new self(new EformHeaderType('Update', $docType, $formId), $universal);
    }

    public static function deleteForm(Universal $universal, string $docType, string $formId): UniversalRequest
    {
        return new self(new EformHeaderType('Delete', $docType, $formId),  $universal);
    }
}
