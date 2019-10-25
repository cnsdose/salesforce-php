<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmbeddedServiceChannelType extends Enum
{
    const EMBEDDED_SERVICE_CONFIG = 'EmbeddedServiceConfig';
    const MESSAGING_CHANNEL = 'MessagingChannel';
    const PHONE = 'Phone';
}
