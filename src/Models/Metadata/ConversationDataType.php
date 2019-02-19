<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ConversationDataType extends Enum
{
    const TEXT = 'Text';
    const NUMBER = 'Number';
    const BOOLEAN = 'Boolean';
    const OBJECT = 'Object';
    const DATE = 'Date';
    const DATE_TIME = 'DateTime';
    const CURRENCY = 'Currency';
    const ID = 'Id';
}
