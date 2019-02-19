<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class BotNavigationType extends Enum
{
    const CALL = 'Call';
    const REDIRECT = 'Redirect';
    const TRANSFER_TO_AGENT = 'TransferToAgent';
}
