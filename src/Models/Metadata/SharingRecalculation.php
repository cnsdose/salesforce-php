<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:06 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingReason
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $className
 */
class SharingRecalculation
{
    public function setClassName(string $className)
    {
        $this->className = $className;
    }
}
