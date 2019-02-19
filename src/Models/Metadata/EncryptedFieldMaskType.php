<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EncryptedFieldMaskType extends Enum
{
    const ALL = 'all';
    const CREDIT_CARD = 'creditCard';
    const SSN = 'ssn';
    const LAST_FOUR = 'lastFour';
    const SIN = 'sin';
    const NINO = 'nino';
}
