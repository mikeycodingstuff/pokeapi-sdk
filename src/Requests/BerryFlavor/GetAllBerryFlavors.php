<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFlavor;

use PokeApiSdk\Endpoints\Traits\BerryFlavorEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllBerryFlavors extends GetAllRequest
{
    use BerryFlavorEndpoint;
}
