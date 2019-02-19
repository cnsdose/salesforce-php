<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MonitoredEvents extends Enum
{
    const AUDIT_TRAIL = 'AuditTrail';
    const LOGIN = 'Login';
    const ENTITY = 'Entity';
    const DATA_EXPORT = 'DataExport';
    const ACCESS_RESOURCE = 'AccessResource';
}
