<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class LogCategoryLevel extends Enum
{
    const NONE = 'None';
    const FINEST = 'Finest';
    const FINER = 'Finer';
    const FINE = 'Fine';
    const DEBUG = 'Debug';
    const INFO = 'Info';
    const WARN = 'Warn';
    const ERROR = 'Error';
}
