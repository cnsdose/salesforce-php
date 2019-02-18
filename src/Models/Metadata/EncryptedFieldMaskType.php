<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:19 PM
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
