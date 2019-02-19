<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomObject
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ActionOverride[]|null $actionOverrides
 * @property bool|null $allowInChatterGroups
 * @property ArticleTypeChannelDisplay|null $articleTypeChannelDisplay
 * @property BusinessProcess[]|null $businessProcesses
 * @property string|null $compactLayoutAssignment
 * @property CompactLayout[]|null $compactLayouts
 * @property string|null $customHelp
 * @property string|null $customHelpPage
 * @property string|null $customSettingsType
 * @property string|null $dataStewardGroup
 * @property string|null $dataStewardUser
 * @property string|null $deploymentStatus
 * @property bool|null $deprecated
 * @property string|null $description
 * @property bool|null $enableActivities
 * @property bool|null $enableBulkApi
 * @property bool|null $enableChangeDataCapture
 * @property bool|null $enableDataTranslation
 * @property bool|null $enableDivisions
 * @property bool|null $enableEnhancedLookup
 * @property bool|null $enableFeeds
 * @property bool|null $enableHistory
 * @property bool|null $enableLicensing
 * @property bool|null $enableReports
 * @property bool|null $enableSearch
 * @property bool|null $enableSharing
 * @property bool|null $enableStreamingApi
 * @property string|null $eventType
 * @property string|null $externalDataSource
 * @property string|null $externalName
 * @property string|null $externalRepository
 * @property string|null $externalSharingModel
 * @property FieldSet[]|null $fieldSets
 * @property CustomField[]|null $fields
 * @property string|null $gender
 * @property HistoryRetentionPolicy|null $historyRetentionPolicy
 * @property bool|null $household
 * @property Index[]|null $indexes
 * @property string|null $label
 * @property ListView[]|null $listViews
 * @property CustomField|null $nameField
 * @property string|null $pluralLabel
 * @property bool|null $recordTypeTrackFeedHistory
 * @property bool|null $recordTypeTrackHistory
 * @property RecordType[]|null $recordTypes
 * @property SearchLayouts|null $searchLayouts
 * @property string|null $sharingModel
 * @property SharingReason[]|null $sharingReasons
 * @property SharingRecalculation[]|null $sharingRecalculations
 * @property string|null $startsWith
 * @property ValidationRule[]|null $validationRules
 * @property string|null $visibility
 * @property WebLink[]|null $webLinks
 */
class CustomObject extends Metadata
{
    public static $classMap = [
        'actionOverrides' => [
            'multiple' => true,
            'type' => ActionOverride::class,
        ],
        'articleTypeChannelDisplay' => [
            'multiple' => false,
            'type' => ArticleTypeChannelDisplay::class,
        ],
        'businessProcesses' => [
            'multiple' => true,
            'type' => BusinessProcess::class,
        ],
        'compactLayouts' => [
            'multiple' => true,
            'type' => CompactLayout::class,
        ],
        'fieldSets' => [
            'multiple' => true,
            'type' => FieldSet::class,
        ],
        'fields' => [
            'multiple' => true,
            'type' => CustomField::class,
        ],
        'historyRetentionPolicy' => [
            'multiple' => false,
            'type' => HistoryRetentionPolicy::class,
        ],
        'indexes' => [
            'multiple' => true,
            'type' => Index::class,
        ],
        'listViews' => [
            'multiple' => true,
            'type' => ListView::class,
        ],
        'nameField' => [
            'multiple' => false,
            'type' => CustomField::class,
        ],
        'recordTypes' => [
            'multiple' => true,
            'type' => RecordType::class,
        ],
        'searchLayouts' => [
            'multiple' => false,
            'type' => SearchLayouts::class,
        ],
        'sharingReasons' => [
            'multiple' => true,
            'type' => SharingReason::class,
        ],
        'sharingRecalculations' => [
            'multiple' => true,
            'type' => SharingRecalculation::class,
        ],
        'validationRules' => [
            'multiple' => true,
            'type' => ValidationRule::class,
        ],
        'webLinks' => [
            'multiple' => true,
            'type' => WebLink::class,
        ],
    ];

    public function setActionOverrides(array $actionOverrides)
    {
        $this->actionOverrides = $actionOverrides;
    }

    public function setAllowInChatterGroups(bool $allowInChatterGroups)
    {
        $this->allowInChatterGroups = $allowInChatterGroups;
    }

    public function setArticleTypeChannelDisplay(ArticleTypeChannelDisplay $articleTypeChannelDisplay)
    {
        $this->articleTypeChannelDisplay = $articleTypeChannelDisplay;
    }

    public function setBusinessProcesses(array $businessProcesses)
    {
        $this->businessProcesses = $businessProcesses;
    }

    public function setCompactLayoutAssignment(string $compactLayoutAssignment)
    {
        $this->compactLayoutAssignment = $compactLayoutAssignment;
    }

    public function setCompactLayouts(array $compactLayouts)
    {
        $this->compactLayouts = $compactLayouts;
    }

    public function setCustomHelp(string $customHelp)
    {
        $this->customHelp = $customHelp;
    }

    public function setCustomHelpPage(string $customHelpPage)
    {
        $this->customHelpPage = $customHelpPage;
    }

    public function setCustomSettingsType(CustomSettingsType $customSettingsType)
    {
        $this->customSettingsType = $customSettingsType->getValue();
    }

    public function setDataStewardGroup(string $dataStewardGroup)
    {
        $this->dataStewardGroup = $dataStewardGroup;
    }

    public function setDataStewardUser(string $dataStewardUser)
    {
        $this->dataStewardUser = $dataStewardUser;
    }

    public function setDeploymentStatus(DeploymentStatus $deploymentStatus)
    {
        $this->deploymentStatus = $deploymentStatus->getValue();
    }

    public function setDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEnableActivities(bool $enableActivities)
    {
        $this->enableActivities = $enableActivities;
    }

    public function setEnableBulkApi(bool $enableBulkApi)
    {
        $this->enableBulkApi = $enableBulkApi;
    }

    public function setEnableChangeDataCapture(bool $enableChangeDataCapture)
    {
        $this->enableChangeDataCapture = $enableChangeDataCapture;
    }

    public function setEnableDataTranslation(bool $enableDataTranslation)
    {
        $this->enableDataTranslation = $enableDataTranslation;
    }

    public function setEnableDivisions(bool $enableDivisions)
    {
        $this->enableDivisions = $enableDivisions;
    }

    public function setEnableEnhancedLookup(bool $enableEnhancedLookup)
    {
        $this->enableEnhancedLookup = $enableEnhancedLookup;
    }

    public function setEnableFeeds(bool $enableFeeds)
    {
        $this->enableFeeds = $enableFeeds;
    }

    public function setEnableHistory(bool $enableHistory)
    {
        $this->enableHistory = $enableHistory;
    }

    public function setEnableLicensing(bool $enableLicensing)
    {
        $this->enableLicensing = $enableLicensing;
    }

    public function setEnableReports(bool $enableReports)
    {
        $this->enableReports = $enableReports;
    }

    public function setEnableSearch(bool $enableSearch)
    {
        $this->enableSearch = $enableSearch;
    }

    public function setEnableSharing(bool $enableSharing)
    {
        $this->enableSharing = $enableSharing;
    }

    public function setEnableStreamingApi(bool $enableStreamingApi)
    {
        $this->enableStreamingApi = $enableStreamingApi;
    }

    public function setEventType(PlatformEventType $eventType)
    {
        $this->eventType = $eventType->getValue();
    }

    public function setExternalDataSource(string $externalDataSource)
    {
        $this->externalDataSource = $externalDataSource;
    }

    public function setExternalName(string $externalName)
    {
        $this->externalName = $externalName;
    }

    public function setExternalRepository(string $externalRepository)
    {
        $this->externalRepository = $externalRepository;
    }

    public function setExternalSharingModel(SharingModel $externalSharingModel)
    {
        $this->externalSharingModel = $externalSharingModel->getValue();
    }

    public function setFieldSets(array $fieldSets)
    {
        $this->fieldSets = $fieldSets;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setGender(Gender $gender)
    {
        $this->gender = $gender->getValue();
    }

    public function setHistoryRetentionPolicy(HistoryRetentionPolicy $historyRetentionPolicy)
    {
        $this->historyRetentionPolicy = $historyRetentionPolicy;
    }

    public function setHousehold(bool $household)
    {
        $this->household = $household;
    }

    public function setIndexes(array $indexes)
    {
        $this->indexes = $indexes;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setListViews(array $listViews)
    {
        $this->listViews = $listViews;
    }

    public function setNameField(CustomField $nameField)
    {
        $this->nameField = $nameField;
    }

    public function setPluralLabel(string $pluralLabel)
    {
        $this->pluralLabel = $pluralLabel;
    }

    public function setRecordTypeTrackFeedHistory(bool $recordTypeTrackFeedHistory)
    {
        $this->recordTypeTrackFeedHistory = $recordTypeTrackFeedHistory;
    }

    public function setRecordTypeTrackHistory(bool $recordTypeTrackHistory)
    {
        $this->recordTypeTrackHistory = $recordTypeTrackHistory;
    }

    public function setRecordTypes(array $recordTypes)
    {
        $this->recordTypes = $recordTypes;
    }

    public function setSearchLayouts(SearchLayouts $searchLayouts)
    {
        $this->searchLayouts = $searchLayouts;
    }

    public function setSharingModel(SharingModel $sharingModel)
    {
        $this->sharingModel = $sharingModel->getValue();
    }

    public function setSharingReasons(array $sharingReasons)
    {
        $this->sharingReasons = $sharingReasons;
    }

    public function setSharingRecalculations(array $sharingRecalculations)
    {
        $this->sharingRecalculations = $sharingRecalculations;
    }

    public function setStartsWith(StartsWith $startsWith)
    {
        $this->startsWith = $startsWith->getValue();
    }

    public function setValidationRules(array $validationRules)
    {
        $this->validationRules = $validationRules;
    }

    public function setVisibility(SetupObjectVisibility $visibility)
    {
        $this->visibility = $visibility->getValue();
    }

    public function setWebLinks(array $webLinks)
    {
        $this->webLinks = $webLinks;
    }
}
