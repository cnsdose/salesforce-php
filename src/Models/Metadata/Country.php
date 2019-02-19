<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Country
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $integrationValue
 * @property string|null $isoCode
 * @property string|null $label
 * @property bool|null $orgDefault
 * @property bool|null $standard
 * @property State[]|null $states
 * @property bool|null $visible
 */
class Country
{
    public static $classMap = [
        'states' => [
            'multiple' => true,
            'type' => State::class,
        ],
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

    public function setOrgDefault(bool $orgDefault)
    {
        $this->orgDefault = $orgDefault;
    }

    public function setStandard(bool $standard)
    {
        $this->standard = $standard;
    }

    public function setStates(array $states)
    {
        $this->states = $states;
    }

    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
    }
}
