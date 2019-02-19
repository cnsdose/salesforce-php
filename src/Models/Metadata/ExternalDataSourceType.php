<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ExternalDataSourceType extends Enum
{
    const DATACLOUD = 'Datacloud';
    const DATAJOURNEY = 'Datajourney';
    const OPEN_SEARCH = 'OpenSearch';
    const IDENTITY = 'Identity';
    const OUTGOINGEMAIL = 'outgoingemail';
    const RECOMMENDATION = 'recommendation';
    const SFDC_ORG = 'SfdcOrg';
    const ODATA = 'OData';
    const ODATA4 = 'OData4';
    const SIMPLE_URL = 'SimpleURL';
    const WRAPPER = 'Wrapper';
}
