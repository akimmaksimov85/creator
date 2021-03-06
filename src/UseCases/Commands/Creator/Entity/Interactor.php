<?php

declare(strict_types=1);

namespace Akimmaksimov85\CreatorBundle\UseCases\Commands\Creator\Entity;

use Akimmaksimov85\CreatorBundle\UseCases\Commands\AbstractInteractor;
use Akimmaksimov85\CreatorBundle\Entity\EntityCreator;

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
        $creator = new EntityCreator($command->folder, $command->fileName, $command->properties);
        $creator->run();
    }

}
