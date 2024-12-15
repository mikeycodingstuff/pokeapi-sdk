<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFlavor;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllBerryFlavors extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'berry-flavor';
    }
}
