<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApexTestSuite
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $testClassName
 */
class ApexTestSuite extends Metadata
{
    public static $classMap = [
    ];

    public function setTestClassName(array $testClassName)
    {
        $this->testClassName = $testClassName;
    }
}
