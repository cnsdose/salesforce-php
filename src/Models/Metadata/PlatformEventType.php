<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:02 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PlatformEventType extends Enum
{
    const HIGH_VOLUME = 'HighVolume';
    const STANDARD_VOLUME = 'StandardVolume';
}
