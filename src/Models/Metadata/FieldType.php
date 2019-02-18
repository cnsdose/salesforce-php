<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:44 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FieldType extends Enum
{
    const AUTO_NUMBER = 'AutoNumber';
    const LOOKUP = 'Lookup';
    const MASTER_DETAIL = 'MasterDetail';
    const CHECKBOX = 'Checkbox';
    const CURRENCY = 'Currency';
    const DATE = 'Date';
    const DATETIME = 'DateTime';
    const EMAIL = 'Email';
    const NUMBER = 'Number';
    const PERCENT = 'Percent';
    const PHONE = 'Phone';
    const PICKLIST = 'Picklist';
    const MULTISELECT_PICKLIST = 'MultiselectPicklist';
    const TEXT = 'Text';
    const TEXTAREA = 'TextArea';
    const LONG_TEXT_AREA = 'LongTextArea';
    const HTML = 'Html';
    const URL = 'Url';
    const ENCRYPTED_TEXT = 'EncryptedText';
    const SUMMARY = 'Summary';
    const HIERARCHY = 'Hierarchy';
    const FILE = 'File';
    const METADATA_RELATIONSHIP = 'MetadataRelationship';
    const LOCATION = 'Location';
    const EXTERNAL_LOOKUP = 'ExternalLookup';
    const INDIRECT_LOOKUP = 'IndirectLookup';
    const CUSTOM_DATA_TYPE = 'CustomDataType';
    const TIME = 'Time';
}
