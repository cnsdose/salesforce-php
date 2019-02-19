<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MatchingMethod extends Enum
{
    const EXACT = 'Exact';
    const FIRST_NAME = 'FirstName';
    const LAST_NAME = 'LastName';
    const COMPANY_NAME = 'CompanyName';
    const PHONE = 'Phone';
    const CITY = 'City';
    const STREET = 'Street';
    const ZIP = 'Zip';
    const TITLE = 'Title';
}
