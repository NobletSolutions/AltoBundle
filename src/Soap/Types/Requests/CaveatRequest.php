<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-23
 * Time: 10:19 PM
 */

namespace NS\AltoBundle\Soap\Types\Requests;


use NS\AltoBundle\Soap\Types\Data\eForm\Caveat;
use NS\AltoBundle\Soap\Types\EformHeaderType;

class CaveatRequest extends AbstractRequest
{
    /**
     * @var Caveat
     */
    private $Data_eForm_Caveat = null;

    /**
     * @param EformHeaderType $Header_eForm
     * @param Caveat $caveat
     */
    public function __construct(EformHeaderType $Header_eForm, Caveat $caveat)
    {
        $this->Header_eForm = $Header_eForm;
        $this->Data_eForm_Caveat = $caveat;
    }

    public static function createForm(Caveat $caveat): CaveatRequest
    {
        return new self(new EformHeaderType('Create', 'eCAVE'), $caveat);
    }

    public static function updateForm(Caveat $caveat, string $formId): CaveatRequest
    {
        return new self(new EformHeaderType('Update', 'eCAVE', $formId), $caveat);
    }

    public static function deleteForm(Caveat $caveat, string $formId): CaveatRequest
    {
        return new self(new EformHeaderType('Delete', 'eCAVE', $formId),  $caveat);
    }
}
