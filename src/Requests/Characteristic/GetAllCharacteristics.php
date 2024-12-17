<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Characteristic;

use PokeApiSdk\Endpoints\Traits\CharacteristicEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllCharacteristics extends GetAllRequest
{
    use CharacteristicEndpoint;
}
