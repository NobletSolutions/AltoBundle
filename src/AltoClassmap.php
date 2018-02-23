<?php

namespace NS\AltoBundle;

use NS\AltoBundle\Soap\Types as Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class AltoClassmap
{
    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('EformHeaderType', Type\EformHeaderType::class),
            new ClassMap('TitlesType', Type\TitlesType::class),
            new ClassMap('Title', Type\Title::class),
            new ClassMap('ShortAddressType', Type\ShortAddressType::class),
            new ClassMap('IndividualNameShortAddressType', Type\IndividualNameShortAddressType::class),
            new ClassMap('AffidavitType', Type\AffidavitType::class),
            new ClassMap('CommissionerType', Type\CommissionerType::class),
            new ClassMap('LongAddressType', Type\LongAddressType::class),
            new ClassMap('ordertype', Type\Ordertype::class),
            new ClassMap('ConsiderationType', Type\ConsiderationType::class),
            new ClassMap('DowerCompliancesType', Type\DowerCompliancesType::class),
            new ClassMap('DowerAffidavit', Type\DowerAffidavit::class),
            new ClassMap('TransfereePartyType', Type\TransfereePartyType::class),
            new ClassMap('SigningParties', Type\SigningParties::class),
            new ClassMap('TransferorPartyType', Type\TransferorPartyType::class),
            new ClassMap('SigningPartyType', Type\SigningPartyType::class),
            new ClassMap('CorporateSigningAffidavit', Type\CorporateSigningAffidavit::class),
            new ClassMap('AgentType', Type\AgentType::class),
            new ClassMap('Data_eForm_TransferOfLandType', Type\Data\eForm\TransferOfLandType::class),
            new ClassMap('AffidavitOfAttestations', Type\AffidavitOfAttestations::class),
            new ClassMap('AffidavitOfAttestation', Type\AffidavitOfAttestation::class),
            new ClassMap('Transferors', Type\Transferors::class),
            new ClassMap('TransfereeGroups', Type\TransfereeGroups::class),
            new ClassMap('TransfereeGroup', Type\TransfereeGroup::class),
            new ClassMap('Transferees', Type\Transferees::class),
            new ClassMap('AffidavitReValue', Type\AffidavitReValue::class),
            new ClassMap('Consideration', Type\Consideration::class),
            new ClassMap('mortgageePartyType', Type\MortgageePartyType::class),
            new ClassMap('mortgageePartyGroupType', Type\MortgageePartyGroupType::class),
            new ClassMap('Data_eForm_Mortgage', Type\Data\eForm\Mortgage::class),
            new ClassMap('caveatorPartyType', Type\CaveatorPartyType::class),
            new ClassMap('caveatorPartyGroupType', Type\CaveatorPartyGroupType::class),
            new ClassMap('agentPartyType', Type\AgentPartyType::class),
            new ClassMap('signatorType', Type\SignatorType::class),
            new ClassMap('eCAVEAffidavitType', Type\ECAVEAffidavitType::class),
            new ClassMap('Data_eForm_Caveat', Type\Data\eForm\Caveat::class),
            new ClassMap('instrumentsType', Type\InstrumentsType::class),
            new ClassMap('Data_eForm_Discharge', Type\Data\eForm\Discharge::class),
            new ClassMap('Data_eForm_Universal', Type\Data\eForm\Universal::class),
            new ClassMap('Request', Type\Request::class),
            new ClassMap('SubmitRequest', Type\SubmitRequest::class),
            new ClassMap('SubmitRequestResponse', Type\SubmitRequestResponse::class),
        ]);
    }
}
