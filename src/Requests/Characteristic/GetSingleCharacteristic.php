<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Characteristic;

use PokeApiSdk\Endpoints\Traits\CharacteristicEndpoint;
use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleCharacteristic extends GetByIdOnlySingleRequest
{
    use CharacteristicEndpoint;
}
