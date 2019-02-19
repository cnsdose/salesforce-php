<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class State
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $integrationValue
 * @property string|null $isoCode
 * @property string|null $label
 * @property bool|null $standard
 * @property bool|null $visible
 */
class State
{
    public static $classMap = [
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setIntegrationValue(string $integrationValue)
    {
        $this->integrationValue = $integrationValue;
    }

    public function setIsoCode(string $isoCode)
    {
        $this->isoCode = $isoCode;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setStandard(bool $standard)
    {
        $this->standard = $standard;
    }

    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
    }
}
