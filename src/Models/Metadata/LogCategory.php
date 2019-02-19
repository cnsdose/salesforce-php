<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class LogCategory extends Enum
{
    const DB = 'Db';
    const WORKFLOW = 'Workflow';
    const VALIDATION = 'Validation';
    const CALLOUT = 'Callout';
    const APEX_CODE = 'Apex_code';
    const APEX_PROFILING = 'Apex_profiling';
    const VISUALFORCE = 'Visualforce';
    const SYSTEM = 'System';
    const WAVE = 'Wave';
    const NBA = 'Nba';
    const ALL = 'All';
}
