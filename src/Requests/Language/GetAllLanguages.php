<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Language;

use PokeApiSdk\Endpoints\Traits\LanguageEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllLanguages extends GetAllRequest
{
    use LanguageEndpoint;
}
