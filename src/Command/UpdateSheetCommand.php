<?php

namespace App\Command;


use App\Controller\Api\Data\DataController;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateSheetCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('pm:update-sheet')
            ;


        // @todo required inline parameters
    }


    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dataApi = new DataController();
        $jsonResponse = $dataApi->getData();
        $output->writeln($jsonResponse->getContent());
    }


}