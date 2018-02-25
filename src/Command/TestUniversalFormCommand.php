<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 23/02/18
 * Time: 10:33 AM
 */

namespace NS\AltoBundle\Command;

use NS\AltoBundle\Soap\Types\Data\eForm\Universal;
use NS\AltoBundle\Soap\Types\Requests\UniversalRequest;
use NS\AltoBundle\Soap\Types\SubmitRequest;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

class TestUniversalFormCommand extends BaseFormCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        parent::configure();
        $this->setName('alto:create:universal');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $universalForm = new Universal($input->getArgument('file-no'));
        $request = UniversalRequest::createForm($universalForm,'ASJT');
        $requestStr = $this->serializeRequest($request);

        if ($input->getOption('debug')) {
            $output->writeln($requestStr);
        }

        $submitRequest = new SubmitRequest($input->getArgument('username'),$input->getArgument('password'),$requestStr);
        $this->submitRequest($submitRequest,$output,$input->getOption('debug'));
    }
}
