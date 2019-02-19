<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SamlIdentityLocationType extends Enum
{
    const SUBJECT_NAME_ID = 'SubjectNameId';
    const ATTRIBUTE = 'Attribute';
}
