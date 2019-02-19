<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class Channel extends Enum
{
    const ALL_CHANNELS = 'AllChannels';
    const APP = 'App';
    const PKB = 'Pkb';
    const CSP = 'Csp';
    const PRM = 'Prm';
}
