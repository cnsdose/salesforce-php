<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceReport
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceReport[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceReportNumber
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ParentId
 * @property string $ContentVersionDocumentId
 * @property string $DocumentName
 * @property string $DocumentContentType
 * @property mixed $DocumentLength
 * @property mixed $DocumentBody
 * @property string $Template
 * @property string $ServiceReportLanguage
 * @property bool $IsSigned
 */
class ServiceReport extends BaseRecordModel
{
    public static $objectApiName = 'ServiceReport';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceReportNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ParentId' => null,
        'ContentVersionDocumentId' => null,
        'DocumentName' => null,
        'DocumentContentType' => null,
        'DocumentLength' => null,
        'DocumentBody' => null,
        'Template' => null,
        'ServiceReportLanguage' => null,
        'IsSigned' => 'bool',
    ];
}
