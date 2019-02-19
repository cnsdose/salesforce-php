<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionLinkHttpMethod extends Enum
{
    const HTTP_DELETE = 'HttpDelete';
    const HTTP_HEAD = 'HttpHead';
    const HTTP_GET = 'HttpGet';
    const HTTP_PATCH = 'HttpPatch';
    const HTTP_POST = 'HttpPost';
    const HTTP_PUT = 'HttpPut';
}
