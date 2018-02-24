<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-23
 * Time: 10:19 PM
 */

namespace NS\AltoBundle\Soap\Types\Requests;

use NS\AltoBundle\Soap\Types\Data\eForm\Discharge;
use NS\AltoBundle\Soap\Types\EformHeaderType;

class DischargeRequest extends AbstractRequest
{
    /**
     * @var Discharge
     */
    private $Data_eForm_Discharge = null;

    /**
     * @param EformHeaderType $Header_eForm
     * @param Discharge $discharge
     */
    public function __construct(EformHeaderType $Header_eForm, Discharge $discharge)
    {
        $this->Header_eForm = $Header_eForm;
        $this->Data_eForm_Discharge = $discharge;
    }

    public static function createForm(Discharge $discharge): DischargeRequest
    {
        return new self(new EformHeaderType('Create', 'eDISC'), $discharge);
    }

    public static function updateForm(Discharge $discharge, string $formId): DischargeRequest
    {
        return new self(new EformHeaderType('Update', 'eDISC', $formId), $discharge);
    }

    public static function deleteForm(Discharge $discharge, string $formId): DischargeRequest
    {
        return new self(new EformHeaderType('Delete', 'eDISC', $formId),  $discharge);
    }
}
