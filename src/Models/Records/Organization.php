<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Organization
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Organization[] query()
 *
 * @property string Id
 * @property string Name
 * @property string Division
 * @property string Street
 * @property string City
 * @property string State
 * @property string PostalCode
 * @property string Country
 * @property float Latitude
 * @property float Longitude
 * @property mixed GeocodeAccuracy
 * @property mixed Address
 * @property mixed Phone
 * @property mixed Fax
 * @property string PrimaryContact
 * @property mixed DefaultLocaleSidKey
 * @property mixed TimeZoneSidKey
 * @property mixed LanguageLocaleKey
 * @property bool ReceivesInfoEmails
 * @property bool ReceivesAdminInfoEmails
 * @property bool PreferencesRequireOpportunityProducts
 * @property bool PreferencesTransactionSecurityPolicy
 * @property bool PreferencesTerminateOldestSession
 * @property bool PreferencesConsentManagementEnabled
 * @property bool PreferencesIndividualAutoCreateEnabled
 * @property bool PreferencesAutoSelectIndividualOnMerge
 * @property bool PreferencesActivityAnalyticsEnabled
 * @property bool PreferencesLightningLoginEnabled
 * @property bool PreferencesOnlyLLPermUserAllowed
 * @property mixed FiscalYearStartMonth
 * @property bool UsesStartDateAsFiscalYearName
 * @property mixed DefaultAccountAccess
 * @property mixed DefaultContactAccess
 * @property mixed DefaultOpportunityAccess
 * @property mixed DefaultLeadAccess
 * @property mixed DefaultCaseAccess
 * @property mixed DefaultCalendarAccess
 * @property mixed DefaultPricebookAccess
 * @property mixed DefaultCampaignAccess
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed ComplianceBccEmail
 * @property mixed UiSkin
 * @property string SignupCountryIsoCode
 * @property \Carbon\Carbon TrialExpirationDate
 * @property mixed NumKnowledgeService
 * @property mixed OrganizationType
 * @property string NamespacePrefix
 * @property string InstanceName
 * @property bool IsSandbox
 * @property string WebToCaseDefaultOrigin
 * @property mixed MonthlyPageViewsUsed
 * @property mixed MonthlyPageViewsEntitlement
 * @property bool IsReadOnly
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 */
class Organization extends BaseRecordModel
{
    protected static $objectApiName = 'Organization';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Division' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Phone' => null,
        'Fax' => null,
        'PrimaryContact' => null,
        'DefaultLocaleSidKey' => null,
        'TimeZoneSidKey' => null,
        'LanguageLocaleKey' => null,
        'ReceivesInfoEmails' => 'bool',
        'ReceivesAdminInfoEmails' => 'bool',
        'PreferencesRequireOpportunityProducts' => 'bool',
        'PreferencesTransactionSecurityPolicy' => 'bool',
        'PreferencesTerminateOldestSession' => 'bool',
        'PreferencesConsentManagementEnabled' => 'bool',
        'PreferencesIndividualAutoCreateEnabled' => 'bool',
        'PreferencesAutoSelectIndividualOnMerge' => 'bool',
        'PreferencesActivityAnalyticsEnabled' => 'bool',
        'PreferencesLightningLoginEnabled' => 'bool',
        'PreferencesOnlyLLPermUserAllowed' => 'bool',
        'FiscalYearStartMonth' => null,
        'UsesStartDateAsFiscalYearName' => 'bool',
        'DefaultAccountAccess' => null,
        'DefaultContactAccess' => null,
        'DefaultOpportunityAccess' => null,
        'DefaultLeadAccess' => null,
        'DefaultCaseAccess' => null,
        'DefaultCalendarAccess' => null,
        'DefaultPricebookAccess' => null,
        'DefaultCampaignAccess' => null,
        'SystemModstamp' => 'datetime',
        'ComplianceBccEmail' => null,
        'UiSkin' => null,
        'SignupCountryIsoCode' => null,
        'TrialExpirationDate' => 'datetime',
        'NumKnowledgeService' => null,
        'OrganizationType' => null,
        'NamespacePrefix' => null,
        'InstanceName' => null,
        'IsSandbox' => 'bool',
        'WebToCaseDefaultOrigin' => null,
        'MonthlyPageViewsUsed' => null,
        'MonthlyPageViewsEntitlement' => null,
        'IsReadOnly' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
    ];
}
