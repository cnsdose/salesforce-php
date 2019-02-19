<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FlowDataType extends Enum
{
    const CURRENCY = 'Currency';
    const DATE = 'Date';
    const NUMBER = 'Number';
    const STRING = 'String';
    const BOOLEAN = 'Boolean';
    const SOBJECT = 'SObject';
    const DATE_TIME = 'DateTime';
    const PICKLIST = 'Picklist';
    const MULTIPICKLIST = 'Multipicklist';
}
