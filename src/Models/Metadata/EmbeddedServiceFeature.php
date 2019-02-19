<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmbeddedServiceFeature extends Enum
{
    const NOT_IN_USE = 'NotInUse';
    const BASE = 'Base';
    const LIVE_AGENT = 'LiveAgent';
    const FIELD_SERVICE = 'FieldService';
    const FLOWS = 'Flows';
}
