<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SControlContentSource extends Enum
{
    const HTML = 'HTML';
    const URL = 'URL';
    const SNIPPET = 'Snippet';
}
