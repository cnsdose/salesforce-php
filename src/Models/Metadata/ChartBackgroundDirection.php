<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ChartBackgroundDirection extends Enum
{
    const TOP_TO_BOTTOM = 'TopToBottom';
    const LEFT_TO_RIGHT = 'LeftToRight';
    const DIAGONAL = 'Diagonal';
}
