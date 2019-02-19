<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class AudienceCriterionType extends Enum
{
    const DEFAULT = 'Default';
    const PROFILE = 'Profile';
    const FIELD_BASED = 'FieldBased';
    const GEO_LOCATION = 'GeoLocation';
    const DOMAIN = 'Domain';
    const PERMISSION = 'Permission';
}
