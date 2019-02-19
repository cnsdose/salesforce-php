<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FlowAssignmentOperator extends Enum
{
    const ASSIGN = 'Assign';
    const ADD = 'Add';
    const SUBTRACT = 'Subtract';
    const ADD_ITEM = 'AddItem';
    const REMOVE_FIRST = 'RemoveFirst';
    const REMOVE_BEFORE_FIRST = 'RemoveBeforeFirst';
    const REMOVE_AFTER_FIRST = 'RemoveAfterFirst';
    const REMOVE_ALL = 'RemoveAll';
    const ADD_AT_START = 'AddAtStart';
    const REMOVE_UNCOMMON = 'RemoveUncommon';
    const ASSIGN_COUNT = 'AssignCount';
    const REMOVE_POSITION = 'RemovePosition';
}
