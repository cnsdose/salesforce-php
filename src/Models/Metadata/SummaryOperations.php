<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:20 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SummaryOperations extends Enum
{
    const COUNT = 'count';
    const SUM = 'sum';
    const MIN = 'min';
    const MAX = 'max';
}
