<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CodeLocation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $column
 * @property int|null $line
 * @property int|null $numExecutions
 * @property float|null $time
 */
class CodeLocation
{
    public static $classMap = [
    ];

    public function setColumn(int $column)
    {
        $this->column = $column;
    }

    public function setLine(int $line)
    {
        $this->line = $line;
    }

    public function setNumExecutions(int $numExecutions)
    {
        $this->numExecutions = $numExecutions;
    }

    public function setTime(float $time)
    {
        $this->time = $time;
    }
}
