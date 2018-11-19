<?php

namespace App\Service;

use App\Util\String\FirstNameTransformer;
use App\Util\String\LastNameTransformer;
use App\Util\String\TransformerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class MessageGenerator
{
    private $logger;
    private $containerBag;

    public function __construct(LoggerInterface $logger, ContainerBagInterface $containerBag)
    {
        $this->logger = $logger;
        $this->containerBag = $containerBag;
    }

    public function getHappyMessage()
    {
        $adminEmail = $this->containerBag->get('admin')['firstname'];

        $this->logger->info('About to find a happy message!');

        $messages = [
            'Sympa de te voir ici :D ',
            'Oh, tu es là ! :D',
            'Reviens plus souvent :)',
            'Ca me fait plaisir que tu sois là !',
            $adminEmail . ', notre fondateur, m\'a demandé de te passer le bonjour :)'
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

    public function getHelloMessage(string $firstName, FirstNameTransformer $firstNameTransformer): string
    {
        return $firstNameTransformer->transform($firstName);
    }

}