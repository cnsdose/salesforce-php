<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ExternalDataSourceType extends Enum
{
    const BCP_APP = 'bcpApp';
    const BCP_APP_MEMBER = 'bcpAppMember';
    const BCP_ENTITY = 'bcpEntity';
    const BCP_FIELD = 'bcpField';
    const BCP_MEMBER = 'bcpMember';
    const BCP_PARTICIPANT = 'bcpParticipant';
    const CONTENT_HUB_ITEM = 'contentHubItem';
    const CONVERSATIONEVENTLOG = 'conversationeventlog';
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
