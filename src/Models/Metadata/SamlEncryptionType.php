<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SamlEncryptionType extends Enum
{
    const AES_128 = 'AES_128';
    const AES_256 = 'AES_256';
    const TRIPLE_DES = 'Triple_Des';
}
