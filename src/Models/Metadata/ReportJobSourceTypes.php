<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ReportJobSourceTypes extends Enum
{
    const TABULAR = 'tabular';
    const SUMMARY = 'summary';
    const SNAPSHOT = 'snapshot';
}
