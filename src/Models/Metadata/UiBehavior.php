<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class UiBehavior extends Enum
{
    const EDIT = 'Edit';
    const REQUIRED = 'Required';
    const READONLY = 'Readonly';
}
