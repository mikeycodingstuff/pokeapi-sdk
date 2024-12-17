<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Language;

use PokeApiSdk\Endpoints\Traits\LanguageEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleLanguage extends GetSingleRequest
{
    use LanguageEndpoint;
}
