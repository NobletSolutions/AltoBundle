<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-23
 * Time: 10:20 PM
 */

namespace NS\AltoBundle\Soap\Types\Requests;

use NS\AltoBundle\Soap\Types\Data\eForm\Mortgage;
use NS\AltoBundle\Soap\Types\EformHeaderType;

class MortgageRequest extends AbstractRequest
{
    /**
     * @var Mortgage
     */
    private $Data_eForm_Mortgage = null;

    /**
     * @param EformHeaderType $Header_eForm
     * @param Mortgage $mortgage
     */
    public function __construct(EformHeaderType $Header_eForm, Mortgage $mortgage = null)
    {
        $this->Header_eForm = $Header_eForm;
        $this->Data_eForm_Mortgage = $mortgage;
    }

    public static function createForm(Mortgage $mortgage): MortgageRequest
    {
        return new self(new EformHeaderType('Create', 'eMORT'), $mortgage);
    }

    public static function updateForm(Mortgage $mortgage, string $formId): MortgageRequest
    {
        return new self(new EformHeaderType('Update', 'eMORT', $formId), $mortgage);
    }

    public static function deleteForm(Mortgage $mortgage, string $formId): MortgageRequest
    {
        return new self(new EformHeaderType('Delete', 'eMORT', $formId),  $mortgage);
    }
}
