<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FileDownloadBehavior extends Enum
{
    const DOWNLOAD = 'DOWNLOAD';
    const EXECUTE_IN_BROWSER = 'EXECUTE_IN_BROWSER';
    const HYBRID = 'HYBRID';
}
