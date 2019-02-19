<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ReportFormat extends Enum
{
    const MULTI_BLOCK = 'MultiBlock';
    const MATRIX = 'Matrix';
    const SUMMARY = 'Summary';
    const TABULAR = 'Tabular';
}
