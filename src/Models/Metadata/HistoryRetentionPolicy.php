<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:47 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class HistoryRetentionPolicy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $archiveAfterMonths
 * @property int|null $archiveRetentionYears
 * @property string|null $description
 */
class HistoryRetentionPolicy
{
    public function setArchiveAfterMonths(int $archiveAfterMonths)
    {
        $this->archiveAfterMonths = $archiveAfterMonths;
    }

    public function setArchiveRetentionYears(int $archiveRetentionYears)
    {
        $this->archiveRetentionYears = $archiveRetentionYears;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
