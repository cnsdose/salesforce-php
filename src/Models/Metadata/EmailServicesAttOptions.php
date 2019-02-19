<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmailServicesAttOptions extends Enum
{
    const NONE = 'None';
    const TEXT_ONLY = 'TextOnly';
    const BINARY_ONLY = 'BinaryOnly';
    const ALL = 'All';
    const NO_CONTENT = 'NoContent';
}
