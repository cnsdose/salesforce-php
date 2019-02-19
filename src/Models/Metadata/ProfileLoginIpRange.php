<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileLoginIpRange
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $endAddress
 * @property string|null $startAddress
 */
class ProfileLoginIpRange
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEndAddress(string $endAddress)
    {
        $this->endAddress = $endAddress;
    }

    public function setStartAddress(string $startAddress)
    {
        $this->startAddress = $startAddress;
    }
}
