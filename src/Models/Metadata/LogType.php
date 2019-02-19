<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class LogType extends Enum
{
    const NONE = 'None';
    const DEBUGONLY = 'Debugonly';
    const DB = 'Db';
    const PROFILING = 'Profiling';
    const CALLOUT = 'Callout';
    const DETAIL = 'Detail';
}
