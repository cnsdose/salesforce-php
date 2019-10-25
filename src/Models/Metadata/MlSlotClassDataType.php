<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MlSlotClassDataType extends Enum
{
    const TEXT = 'Text';
    const NUMBER = 'Number';
    const BOOLEAN = 'Boolean';
    const DATE = 'Date';
    const DATE_TIME = 'DateTime';
    const CURRENCY = 'Currency';
}
