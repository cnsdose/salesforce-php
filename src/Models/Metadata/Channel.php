<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 2:39 PM
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
