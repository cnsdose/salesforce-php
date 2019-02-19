<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EncryptionScheme extends Enum
{
    const NONE = 'None';
    const PROBABILISTIC_ENCRYPTION = 'ProbabilisticEncryption';
    const CASE_SENSITIVE_DETERMINISTIC_ENCRYPTION = 'CaseSensitiveDeterministicEncryption';
    const CASE_INSENSITIVE_DETERMINISTIC_ENCRYPTION = 'CaseInsensitiveDeterministicEncryption';
}
