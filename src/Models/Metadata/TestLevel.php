<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class TestLevel extends Enum
{
    const NO_TEST_RUN = 'NoTestRun';
    const RUN_SPECIFIED_TESTS = 'RunSpecifiedTests';
    const RUN_LOCAL_TESTS = 'RunLocalTests';
    const RUN_ALL_TESTS_IN_ORG = 'RunAllTestsInOrg';
}
