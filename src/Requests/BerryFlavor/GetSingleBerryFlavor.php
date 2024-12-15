<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFlavor;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleBerryFlavor extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'berry-flavor';
    }
}
