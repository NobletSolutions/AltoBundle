<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-23
 * Time: 10:19 PM
 */

namespace NS\AltoBundle\Soap\Types\Requests;

use NS\AltoBundle\Soap\Types\Data\eForm\TransferOfLandType;
use NS\AltoBundle\Soap\Types\EformHeaderType;

class TransferOfLandRequest extends AbstractRequest
{
    /**
     * @var TransferOfLandType
     */
    private $Data_eForm_TransferOfLand = null;

    /**
     * @param EformHeaderType $Header_eForm
     * @param $universal
     */
    public function __construct(EformHeaderType $Header_eForm, TransferOfLandType $universal)
    {
        $this->Header_eForm = $Header_eForm;
        $this->Data_eForm_TransferOfLand = $universal;
    }

    public static function createForm(TransferOfLandType $transfer): TransferOfLandRequest
    {
        return new self(new EformHeaderType('Create', 'eTFLA'), $transfer);
    }

    public static function updateForm(TransferOfLandType $transfer, string $formId): TransferOfLandRequest
    {
        return new self(new EformHeaderType('Update', 'eTFLA', $formId), $transfer);
    }

    public static function deleteForm(TransferOfLandType $transfer, string $formId): TransferOfLandRequest
    {
        return new self(new EformHeaderType('Delete', 'eTFLA', $formId),  $transfer);
    }
}
