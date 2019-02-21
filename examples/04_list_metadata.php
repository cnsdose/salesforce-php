<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 21/02/19
 * Time: 1:50 PM
 *
 * List metadata using Metadata API
 */

require_once '00_prelude.php';

use CNSDose\Salesforce\Models\BaseMetadataModel;
use CNSDose\Salesforce\Models\Metadata\FileProperties;
use CNSDose\Salesforce\Models\Metadata\ListMetadataQuery;

/**
 * @var FileProperties[] $results
 */
$results = [];

$queryFields = new ListMetadataQuery();
$queryFields->setType('CustomField');
$customFields = BaseMetadataModel::listMetadata($queryFields);
$results[] = $customFields->result;

$queryObjects = new ListMetadataQuery();
$queryObjects->setType('CustomObject');
$queryApex = new ListMetadataQuery();
$queryApex->setType('ApexClass');
$customObjectsAndFields = BaseMetadataModel::listMetadata([$queryObjects, $queryApex]);
$results[] = $customObjectsAndFields->result;

$results = array_merge(...$results);
$columns = ['type', 'fullName', 'createdByName', 'createdDate'];
$widths = array_combine($columns, array_map(function (string $column) use ($results) {
    return array_reduce($results, function ($a, $b) use ($column) {
        return max(is_int($a) ? $a : strlen($a->$column), is_int($b) ? $b : strlen($b->$column));
    }, strlen(strlen($column)));
}, $columns));
$data = array_merge([array_combine($columns, $columns)], array_map(function (FileProperties $fileProperties) use ($columns) {
    return array_intersect_key((array)$fileProperties, array_flip($columns));
}, $results));
foreach ($data as $datum) {
    $row = implode('', array_map(function ($column) use ($datum, $widths) {
        return str_pad($datum[$column], $widths[$column] + 4);
    }, $columns));
    echo $row . "\n";
}
