<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FieldUpdateOperation extends Enum
{
    const FORMULA = 'Formula';
    const LITERAL = 'Literal';
    const NULL = 'Null';
    const NEXT_VALUE = 'NextValue';
    const PREVIOUS_VALUE = 'PreviousValue';
    const LOOKUP_VALUE = 'LookupValue';
}
