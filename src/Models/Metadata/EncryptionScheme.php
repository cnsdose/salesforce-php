<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:12 PM
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
