<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-26
 * Time: 9:08 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\Soap\Types\AffidavitOfAttestation;
use NS\AltoBundle\Soap\Types\AffidavitOfAttestations;
use NS\AltoBundle\Soap\Types\AffidavitReValue;
use NS\AltoBundle\Soap\Types\AffidavitType;
use NS\AltoBundle\Soap\Types\CommissionerType;
use NS\AltoBundle\Soap\Types\ConsiderationType;
use NS\AltoBundle\Soap\Types\Data\eForm\TransferOfLandType;
use NS\AltoBundle\Soap\Types\DowerAffidavit;
use NS\AltoBundle\Soap\Types\DowerCompliancesType;
use NS\AltoBundle\Soap\Types\IndividualNameShortAddressType;
use NS\AltoBundle\Soap\Types\LongAddressType;
use NS\AltoBundle\Soap\Types\Requests\TransferOfLandRequest;
use NS\AltoBundle\Soap\Types\ShortAddressType;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use NS\AltoBundle\Soap\Types\Title;
use NS\AltoBundle\Soap\Types\TitlesType;
use NS\AltoBundle\Soap\Types\TransfereeGroup;
use NS\AltoBundle\Soap\Types\TransfereeGroups;
use NS\AltoBundle\Soap\Types\TransfereePartyType;
use NS\AltoBundle\Soap\Types\Transferees;
use NS\AltoBundle\Soap\Types\TransferorPartyType;
use NS\AltoBundle\Soap\Types\Transferors;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestTransferOfLandFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        parent::configure();
        $this->setName('alto:create:transfer');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $titles = new TitlesType([new Title('002000325')]);
        $consideration = new ConsiderationType('75000.00','Nominal Estate');
        $affidavit = new AffidavitType(new \DateTime('2018-02-15'),'Calgary','AB','Canada',true);
        $commissioner = new CommissionerType('Micheal','Jackson',new \DateTime('2019-01-01'),'Lawyer (Notary Public)','additional');
        $attestation = new AffidavitOfAttestation(
            false,
            new ShortAddressType('Calgary','AB','Canada'),
            new IndividualNameShortAddressType('Gnat','Noblet','Calgary','AB','Canada'),
            $affidavit,
            $commissioner
            );
        $dowerAff = new DowerAffidavit('Released',new \DateTime('2018-02-18'),new \DateTime('2018-02-20'),'244565466666','1321');
        $dowerCompliance = new DowerCompliancesType(false,$dowerAff,new AffidavitType(new \DateTime('2018-02-21'),'Calgary','AB','Canada',true), $commissioner);
        $transferor = TransferorPartyType::createIndividual('Gnat','Noblet','','','Calgary','AB','Calgary', new \DateTime('2018-02-26'),'Single',$dowerCompliance);
        $transferees = new Transferees([TransfereePartyType::createIndividual('Nathanael','Noblet',new \DateTime('2018-02-26'),true,new LongAddressType('','123 Some Street','','Calgary','AB','Canada','T3A 5J4'))]);
        $transfereeGroups = new TransfereeGroups(new TransfereeGroup('100','C', $transferees));
        $reValue = new AffidavitReValue('Transferee', $consideration,$affidavit,$commissioner);

        $universalForm = new TransferOfLandType($input->getArgument('file-no'), $titles, $consideration, new AffidavitOfAttestations([$attestation]), new Transferors([$transferor]), $transfereeGroups, $reValue);
        $request = TransferOfLandRequest::createForm($universalForm);
        $requestStr = $this->serializeRequest($request);

        if ($input->getOption('debug')) {
            $output->writeln($requestStr);
        }

        $submitRequest = new SubmitRequest($input->getArgument('username'), $input->getArgument('password'), $requestStr);
        $this->submitRequest($submitRequest, $output, $input->getOption('debug'));
    }
}
