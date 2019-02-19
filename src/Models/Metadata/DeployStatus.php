<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DeployStatus extends Enum
{
    const PENDING = 'Pending';
    const IN_PROGRESS = 'InProgress';
    const SUCCEEDED = 'Succeeded';
    const SUCCEEDED_PARTIAL = 'SucceededPartial';
    const FAILED = 'Failed';
    const CANCELING = 'Canceling';
    const CANCELED = 'Canceled';
}
