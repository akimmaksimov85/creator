<?php

declare(strict_types=1);

namespace Akimmaksimov85\CreatorBundle\UseCases\Commands\Creator\CreateRequest;

use Akimmaksimov85\CreatorBundle\Entity\CreateRequestCreator;
use Akimmaksimov85\CreatorBundle\UseCases\Commands\AbstractInteractor;

class Interactor extends AbstractInteractor
{
    /**
     * Command handler
     *
     * @param Command $command Command
     *
     * @return void
     */
    public function __invoke(Command $command) : void
    {
        $creator = new CreateRequestCreator($command->folder, $command->fileName, $command->properties);
        $creator->run();
    }

}
