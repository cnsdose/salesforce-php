<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FolderShareAccessLevel extends Enum
{
    const VIEW = 'View';
    const EDIT_ALL_CONTENTS = 'EditAllContents';
    const MANAGE = 'Manage';
}
