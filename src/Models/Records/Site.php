<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Site
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Site[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $Subdomain
 * @property string $UrlPathPrefix
 * @property string $GuestUserId
 * @property string $Status
 * @property string $AdminId
 * @property bool $OptionsEnableFeeds
 * @property bool $OptionsRequireHttps
 * @property bool $OptionsAllowHomePage
 * @property bool $OptionsAllowStandardIdeasPages
 * @property bool $OptionsAllowStandardSearch
 * @property bool $OptionsAllowStandardLookups
 * @property bool $OptionsAllowStandardAnswersPages
 * @property bool $OptionsAllowGuestSupportApi
 * @property bool $OptionsAllowStandardPortalPages
 * @property bool $OptionsCspUpgradeInsecureRequests
 * @property bool $OptionsContentSniffingProtection
 * @property bool $OptionsBrowserXssProtection
 * @property bool $OptionsReferrerPolicyOriginWhenCrossOrigin
 * @property string $Description
 * @property string $MasterLabel
 * @property string $AnalyticsTrackingCode
 * @property string $SiteType
 * @property string $ClickjackProtectionLevel
 * @property mixed $DailyBandwidthLimit
 * @property mixed $DailyBandwidthUsed
 * @property mixed $DailyRequestTimeLimit
 * @property mixed $DailyRequestTimeUsed
 * @property mixed $MonthlyPageViewsEntitlement
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class Site extends BaseRecordModel
{
    public static $objectApiName = 'Site';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Subdomain' => null,
        'UrlPathPrefix' => null,
        'GuestUserId' => null,
        'Status' => null,
        'AdminId' => null,
        'OptionsEnableFeeds' => 'bool',
        'OptionsRequireHttps' => 'bool',
        'OptionsAllowHomePage' => 'bool',
        'OptionsAllowStandardIdeasPages' => 'bool',
        'OptionsAllowStandardSearch' => 'bool',
        'OptionsAllowStandardLookups' => 'bool',
        'OptionsAllowStandardAnswersPages' => 'bool',
        'OptionsAllowGuestSupportApi' => 'bool',
        'OptionsAllowStandardPortalPages' => 'bool',
        'OptionsCspUpgradeInsecureRequests' => 'bool',
        'OptionsContentSniffingProtection' => 'bool',
        'OptionsBrowserXssProtection' => 'bool',
        'OptionsReferrerPolicyOriginWhenCrossOrigin' => 'bool',
        'Description' => null,
        'MasterLabel' => null,
        'AnalyticsTrackingCode' => null,
        'SiteType' => null,
        'ClickjackProtectionLevel' => null,
        'DailyBandwidthLimit' => null,
        'DailyBandwidthUsed' => null,
        'DailyRequestTimeLimit' => null,
        'DailyRequestTimeUsed' => null,
        'MonthlyPageViewsEntitlement' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
