<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomConsoleComponents
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property PrimaryTabComponents|null $primaryTabComponents
 * @property SubtabComponents|null $subtabComponents
 */
class CustomConsoleComponents
{
    public static $classMap = [
        'primaryTabComponents' => [
            'multiple' => false,
            'type' => PrimaryTabComponents::class,
        ],
        'subtabComponents' => [
            'multiple' => false,
            'type' => SubtabComponents::class,
        ],
    ];

    public function setPrimaryTabComponents(PrimaryTabComponents $primaryTabComponents)
    {
        $this->primaryTabComponents = $primaryTabComponents;
    }

    public function setSubtabComponents(SubtabComponents $subtabComponents)
    {
        $this->subtabComponents = $subtabComponents;
    }
}
