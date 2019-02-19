<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DeployProblemType extends Enum
{
    const WARNING = 'Warning';
    const ERROR = 'Error';
    const INFO = 'Info';
}
