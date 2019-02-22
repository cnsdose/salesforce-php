<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CollaborationGroup
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CollaborationGroup[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property mixed $MemberCount
 * @property string $OwnerId
 * @property string $CollaborationType
 * @property string $Description
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $FullPhotoUrl
 * @property mixed $MediumPhotoUrl
 * @property mixed $SmallPhotoUrl
 * @property \Carbon\Carbon $LastFeedModifiedDate
 * @property string $InformationTitle
 * @property string $InformationBody
 * @property bool $HasPrivateFieldsAccess
 * @property bool $CanHaveGuests
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property bool $IsArchived
 * @property bool $IsAutoArchiveDisabled
 * @property string $AnnouncementId
 * @property mixed $GroupEmail
 * @property mixed $BannerPhotoUrl
 * @property bool $IsBroadcast
 */
class CollaborationGroup extends BaseRecordModel
{
    public static $objectApiName = 'CollaborationGroup';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'MemberCount' => null,
        'OwnerId' => null,
        'CollaborationType' => null,
        'Description' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'FullPhotoUrl' => null,
        'MediumPhotoUrl' => null,
        'SmallPhotoUrl' => null,
        'LastFeedModifiedDate' => 'datetime',
        'InformationTitle' => null,
        'InformationBody' => null,
        'HasPrivateFieldsAccess' => 'bool',
        'CanHaveGuests' => 'bool',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'IsArchived' => 'bool',
        'IsAutoArchiveDisabled' => 'bool',
        'AnnouncementId' => null,
        'GroupEmail' => null,
        'BannerPhotoUrl' => null,
        'IsBroadcast' => 'bool',
    ];
}
