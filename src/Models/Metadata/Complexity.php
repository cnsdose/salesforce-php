<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class Complexity extends Enum
{
    const NO_RESTRICTION = 'NoRestriction';
    const ALPHA_NUMERIC = 'AlphaNumeric';
    const SPECIAL_CHARACTERS = 'SpecialCharacters';
    const UPPER_LOWER_CASE_NUMERIC = 'UpperLowerCaseNumeric';
    const UPPER_LOWER_CASE_NUMERIC_SPECIAL_CHARACTERS = 'UpperLowerCaseNumericSpecialCharacters';
}
