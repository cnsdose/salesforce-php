<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:10 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property string|null $businessOwnerGroup
 * @property string|null $businessOwnerUser
 * @property string|null $businessStatus
 * @property bool|null $caseSensitive
 * @property string|null $customDataType
 * @property string|null $defaultValue
 * @property string|null $deleteConstraint
 * @property bool|null $deprecated
 * @property string|null $description
 * @property string|null $displayFormat
 * @property string|null $encryptionScheme
 * @property bool|null $escapeMarkup
 * @property string|null $externalDeveloperName
 * @property bool|null $externalId
 * @property string|null $fieldManageability
 * @property string|null $formula
 * @property string|null $formulaTreatBlanksAs
 * @property string|null $inlineHelpText
 * @property bool|null $isAIPredictionField
 * @property bool|null $isConvertLeadDisabled
 * @property bool|null $isFilteringDisabled
 * @property bool|null $isNameField
 * @property bool|null $isSortingDisabled
 * @property string|null $label
 * @property int|null $length
 * @property LookupFilter|null $lookupFilter
 * @property string|null $maskChar
 * @property string|null $maskType
 * @property string|null $metadataRelationshipControllingField
 * @property bool|null $populateExistingRows
 * @property int|null $precision
 * @property string|null $referenceTargetField
 * @property string|null $referenceTo
 * @property string|null $relationshipLabel
 * @property string|null $relationshipName
 * @property int|null $relationshipOrder
 * @property bool|null $reparentableMasterDetail
 * @property bool|null $required
 * @property bool|null $restrictedAdminField
 * @property int|null $scale
 * @property string|null $securityClassification
 * @property int|null $startingNumber
 * @property bool|null $stripMarkup
 * @property string|null $summarizedField
 * @property FilterItem[]|null $summaryFilterItems
 * @property string|null $summaryForeignKey
 * @property string|null $summaryOperation
 * @property bool|null $trackFeedHistory
 * @property bool|null $trackHistory
 * @property bool|null $trackTrending
 * @property bool|null $translateData
 * @property string|null $type
 * @property bool|null $unique
 * @property ValueSet|null $valueSet
 * @property int|null $visibleLines
 * @property bool|null $writeRequiresMasterRead
 */
class CustomField
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setBusinessOwnerGroup(string $businessOwnerGroup)
    {
        $this->businessOwnerGroup = $businessOwnerGroup;
    }

    public function setBusinessOwnerUser(string $businessOwnerUser)
    {
        $this->businessOwnerUser = $businessOwnerUser;
    }

    public function setBusinessStatus(string $businessStatus)
    {
        $this->businessStatus = $businessStatus;
    }

    public function setCaseSensitive(bool $caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }

    public function setCustomDataType(string $customDataType)
    {
        $this->customDataType = $customDataType;
    }

    public function setDefaultValue(string $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function setDeleteConstraint(DeleteConstraint $deleteConstraint)
    {
        $this->deleteConstraint = $deleteConstraint->getValue();
    }

    public function setDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDisplayFormat(string $displayFormat)
    {
        $this->displayFormat = $displayFormat;
    }

    public function setEncryptionScheme(EncryptionScheme $encryptionScheme)
    {
        $this->encryptionScheme = $encryptionScheme->getValue();
    }

    public function setEscapeMarkup(bool $escapeMarkup)
    {
        $this->escapeMarkup = $escapeMarkup;
    }

    public function setExternalDeveloperName(string $externalDeveloperName)
    {
        $this->externalDeveloperName = $externalDeveloperName;
    }

    public function setExternalId(bool $externalId)
    {
        $this->externalId = $externalId;
    }

    public function setFieldManageability(FieldManageability $fieldManageability)
    {
        $this->fieldManageability = $fieldManageability->getValue();
    }

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }

    public function setFormulaTreatBlanksAs(TreatBlanksAs $formulaTreatBlanksAs)
    {
        $this->formulaTreatBlanksAs = $formulaTreatBlanksAs->getValue();
    }

    public function setInlineHelpText(string $inlineHelpText)
    {
        $this->inlineHelpText = $inlineHelpText;
    }

    public function setIsAIPredictionField(bool $isAIPredictionField)
    {
        $this->isAIPredictionField = $isAIPredictionField;
    }

    public function setIsConvertLeadDisabled(bool $isConvertLeadDisabled)
    {
        $this->isConvertLeadDisabled = $isConvertLeadDisabled;
    }

    public function setIsFilteringDisabled(bool $isFilteringDisabled)
    {
        $this->isFilteringDisabled = $isFilteringDisabled;
    }

    public function setIsNameField(bool $isNameField)
    {
        $this->isNameField = $isNameField;
    }

    public function setIsSortingDisabled(bool $isSortingDisabled)
    {
        $this->isSortingDisabled = $isSortingDisabled;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLength(int $length)
    {
        $this->length = $length;
    }

    public function setLookupFilter(LookupFilter $lookupFilter)
    {
        $this->lookupFilter = $lookupFilter;
    }

    public function setMaskChar(EncryptedFieldMaskChar $maskChar)
    {
        $this->maskChar = $maskChar->getValue();
    }

    public function setMaskType(EncryptedFieldMaskType $maskType)
    {
        $this->maskType = $maskType->getValue();
    }

    public function setMetadataRelationshipControllingField(string $metadataRelationshipControllingField)
    {
        $this->metadataRelationshipControllingField = $metadataRelationshipControllingField;
    }

    public function setPopulateExistingRows(bool $populateExistingRows)
    {
        $this->populateExistingRows = $populateExistingRows;
    }

    public function setPrecision(int $precision)
    {
        $this->precision = $precision;
    }

    public function setReferenceTargetField(string $referenceTargetField)
    {
        $this->referenceTargetField = $referenceTargetField;
    }

    public function setReferenceTo(string $referenceTo)
    {
        $this->referenceTo = $referenceTo;
    }

    public function setRelationshipLabel(string $relationshipLabel)
    {
        $this->relationshipLabel = $relationshipLabel;
    }

    public function setRelationshipName(string $relationshipName)
    {
        $this->relationshipName = $relationshipName;
    }

    public function setRelationshipOrder(int $relationshipOrder)
    {
        $this->relationshipOrder = $relationshipOrder;
    }

    public function setReparentableMasterDetail(bool $reparentableMasterDetail)
    {
        $this->reparentableMasterDetail = $reparentableMasterDetail;
    }

    public function setRequired(bool $required)
    {
        $this->required = $required;
    }

    public function setRestrictedAdminField(bool $restrictedAdminField)
    {
        $this->restrictedAdminField = $restrictedAdminField;
    }

    public function setScale(int $scale)
    {
        $this->scale = $scale;
    }

    public function setSecurityClassification(string $securityClassification)
    {
        $this->securityClassification = $securityClassification;
    }

    public function setStartingNumber(int $startingNumber)
    {
        $this->startingNumber = $startingNumber;
    }

    public function setStripMarkup(bool $stripMarkup)
    {
        $this->stripMarkup = $stripMarkup;
    }

    public function setSummarizedField(string $summarizedField)
    {
        $this->summarizedField = $summarizedField;
    }

    public function setSummaryFilterItems(array $summaryFilterItems)
    {
        $this->summaryFilterItems = $summaryFilterItems;
    }

    public function setSummaryForeignKey(string $summaryForeignKey)
    {
        $this->summaryForeignKey = $summaryForeignKey;
    }

    public function setSummaryOperation(SummaryOperations $summaryOperation)
    {
        $this->summaryOperation = $summaryOperation->getValue();
    }

    public function setTrackFeedHistory(bool $trackFeedHistory)
    {
        $this->trackFeedHistory = $trackFeedHistory;
    }

    public function setTrackHistory(bool $trackHistory)
    {
        $this->trackHistory = $trackHistory;
    }

    public function setTrackTrending(bool $trackTrending)
    {
        $this->trackTrending = $trackTrending;
    }

    public function setTranslateData(bool $translateData)
    {
        $this->translateData = $translateData;
    }

    public function setType(FieldType $type)
    {
        $this->type = $type->getValue();
    }

    public function setUnique(bool $unique)
    {
        $this->unique = $unique;
    }

    public function setValueSet(ValueSet $valueSet)
    {
        $this->valueSet = $valueSet;
    }

    public function setVisibleLines(int $visibleLines)
    {
        $this->visibleLines = $visibleLines;
    }

    public function setWriteRequiresMasterRead(bool $writeRequiresMasterRead)
    {
        $this->writeRequiresMasterRead = $writeRequiresMasterRead;
    }
}
