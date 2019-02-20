<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentDocumentLink
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentDocumentLink[] query()
 *
 * @property string $Id
 * @property string $LinkedEntityId
 * @property string $ContentDocumentId
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $ShareType
 * @property mixed $Visibility
 */
class ContentDocumentLink extends BaseRecordModel
{
    public static $objectApiName = 'ContentDocumentLink';
    protected $defaultFields = [
        'Id' => null,
        'LinkedEntityId' => null,
        'ContentDocumentId' => null,
        'IsDeleted' => 'bool',
        'SystemModstamp' => 'datetime',
        'ShareType' => null,
        'Visibility' => null,
    ];
}
