<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:04 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SharingModel extends Enum
{
    const PRIVATE = 'Private';
    const READ = 'Read';
    const READ_SELECT = 'ReadSelect';
    const READ_WRITE = 'ReadWrite';
    const READ_WRITE_TRANSFER = 'ReadWriteTransfer';
    const FULL_ACCESS = 'FullAccess';
    const CONTROLLED_BY_PARENT = 'ControlledByParent';
    const CONTROLLED_BY_LEAD_OR_CONTACT = 'ControlledByLeadOrContact';
    const CONTROLLED_BY_CAMPAIGN = 'ControlledByCampaign';
}
