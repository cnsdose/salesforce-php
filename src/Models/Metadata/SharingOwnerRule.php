<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingOwnerRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SharedTo|null $sharedFrom
 */
class SharingOwnerRule extends SharingBaseRule
{
    public static $classMap = [
        'sharedFrom' => [
            'multiple' => false,
            'type' => SharedTo::class,
        ],
    ];

    public function setSharedFrom(SharedTo $sharedFrom)
    {
        $this->sharedFrom = $sharedFrom;
    }
}
