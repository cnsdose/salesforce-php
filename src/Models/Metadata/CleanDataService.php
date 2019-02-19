<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CleanDataService
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CleanRule[]|null $cleanRules
 * @property string|null $description
 * @property string|null $masterLabel
 * @property string|null $matchEngine
 */
class CleanDataService extends Metadata
{
    public static $classMap = [
        'cleanRules' => [
            'multiple' => true,
            'type' => CleanRule::class,
        ],
    ];

    public function setCleanRules(array $cleanRules)
    {
        $this->cleanRules = $cleanRules;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setMatchEngine(string $matchEngine)
    {
        $this->matchEngine = $matchEngine;
    }
}
