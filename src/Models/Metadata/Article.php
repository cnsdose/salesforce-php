<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class Article extends Enum
{
    const NONE = 'None';
    const INDEFINITE = 'Indefinite';
    const DEFINITE = 'Definite';
}
