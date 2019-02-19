<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmbeddedServiceAuthMethod extends Enum
{
    const COMMUNITIES_LOGIN = 'CommunitiesLogin';
    const CUSTOM_LOGIN = 'CustomLogin';
}
