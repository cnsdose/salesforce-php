<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SamlNameIdFormatType extends Enum
{
    const UNSPECIFIED = 'Unspecified';
    const EMAIL_ADDRESS = 'EmailAddress';
    const PERSISTENT = 'Persistent';
    const TRANSIENT = 'Transient';
}
