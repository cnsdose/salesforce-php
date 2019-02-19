<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FlowScreenFieldType extends Enum
{
    const DISPLAY_TEXT = 'DisplayText';
    const INPUT_FIELD = 'InputField';
    const LARGE_TEXT_AREA = 'LargeTextArea';
    const PASSWORD_FIELD = 'PasswordField';
    const RADIO_BUTTONS = 'RadioButtons';
    const DROPDOWN_BOX = 'DropdownBox';
    const MULTI_SELECT_CHECKBOXES = 'MultiSelectCheckboxes';
    const MULTI_SELECT_PICKLIST = 'MultiSelectPicklist';
    const COMPONENT_INSTANCE = 'ComponentInstance';
}
