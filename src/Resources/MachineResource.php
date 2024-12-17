<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Machine\GetAllMachines;
use PokeApiSdk\Requests\Machine\GetSingleMachine;

class MachineResource extends BaseResource
{
    protected bool $getByIdOnly = false;
    
    protected function getAllRequestClass(): string
    {
        return GetAllMachines::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMachine::class;
    }
}
