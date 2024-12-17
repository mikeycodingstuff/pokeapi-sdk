<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Machine;

use PokeApiSdk\Endpoints\Traits\MachineEndpoint;
use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleMachine extends GetByIdOnlySingleRequest
{
    use MachineEndpoint;
}
