<?php

namespace NS\AltoBundle\Soap\Types;

use NS\AltoBundle\Soap\Exceptions\InvalidOptionException;

class DowerCompliancesType
{
    /** @var string */
    private $Dower;

    /** @var DowerAffidavit */
    private $DowerAffidavit = null;

    /** @var AffidavitType */
    private $DowerAffidavitDetail = null;

    /** @var CommissionerType */
    private $Commissioner = null;

    /**
     * Constructor
     *
     * @param bool $Dower
     * @var \NS\AltoBundle\Soap\Types\DowerAffidavit $DowerAffidavit
     * @param AffidavitType $DowerAffidavitDetail
     * @param CommissionerType $Commissioner
     */
    public function __construct(bool $Dower, DowerAffidavit $DowerAffidavit = null, AffidavitType $DowerAffidavitDetail, CommissionerType $Commissioner)
    {
        $this->Dower = $Dower?'true':'false';
        if($Dower && ($DowerAffidavit === null || $DowerAffidavitDetail === null || $Commissioner === null)) {
            throw new InvalidOptionException('When the dower is true, you must provide the dower affidavit, details and commissioner');
        }
        $this->DowerAffidavit = $DowerAffidavit;
        $this->DowerAffidavitDetail = $DowerAffidavitDetail;
        $this->Commissioner = $Commissioner;
    }

    public function getDower(): string
    {
        return $this->Dower;
    }

    public function getDowerAffidavit(): DowerAffidavit
    {
        return $this->DowerAffidavit;
    }

    public function getDowerAffidavitDetail(): AffidavitType
    {
        return $this->DowerAffidavitDetail;
    }

    public function getCommissioner(): CommissionerType
    {
        return $this->Commissioner;
    }
}
