<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CountriesAndStates
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property Country[]|null $countries
 */
class CountriesAndStates
{
    public static $classMap = [
        'countries' => [
            'multiple' => true,
            'type' => Country::class,
        ],
    ];

    public function setCountries(array $countries)
    {
        $this->countries = $countries;
    }
}
