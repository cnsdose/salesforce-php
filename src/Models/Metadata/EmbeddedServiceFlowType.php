<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmbeddedServiceFlowType extends Enum
{
    const FL_FLOW = 'FL_Flow';
    const FS_NEW_APPOINTMENT = 'FS_NewAppointment';
    const FS_MODIFY_APPOINTMENT = 'FS_ModifyAppointment';
    const FS_CANCEL_APPOINTMENT = 'FS_CancelAppointment';
}
