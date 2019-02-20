<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LinkedArticle
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LinkedArticle[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $KnowledgeArticleVersionId
 * @property string $LinkedEntityId
 * @property string $KnowledgeArticleId
 * @property string $Type
 */
class LinkedArticle extends BaseRecordModel
{
    public static $objectApiName = 'LinkedArticle';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'KnowledgeArticleVersionId' => null,
        'LinkedEntityId' => null,
        'KnowledgeArticleId' => null,
        'Type' => null,
    ];
}
