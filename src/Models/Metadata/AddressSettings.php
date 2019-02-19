<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AddressSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CountriesAndStates|null $countriesAndStates
 */
class AddressSettings extends Metadata
{
    public static $classMap = [
        'countriesAndStates' => [
            'multiple' => false,
            'type' => CountriesAndStates::class,
        ],
    ];

    public function setCountriesAndStates(CountriesAndStates $countriesAndStates)
    {
        $this->countriesAndStates = $countriesAndStates;
    }
}
