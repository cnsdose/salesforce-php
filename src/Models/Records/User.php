<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class User
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method User[] query()
 *
 * @property string $Id
 * @property string $Username
 * @property string $LastName
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $Suffix
 * @property string $Name
 * @property string $CompanyName
 * @property string $Division
 * @property string $Department
 * @property string $Title
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property string $GeocodeAccuracy
 * @property mixed $Address
 * @property mixed $Email
 * @property bool $EmailPreferencesAutoBcc
 * @property bool $EmailPreferencesAutoBccStayInTouch
 * @property bool $EmailPreferencesStayInTouchReminder
 * @property mixed $SenderEmail
 * @property string $SenderName
 * @property string $Signature
 * @property string $StayInTouchSubject
 * @property string $StayInTouchSignature
 * @property string $StayInTouchNote
 * @property mixed $Phone
 * @property mixed $Fax
 * @property mixed $MobilePhone
 * @property string $Alias
 * @property string $CommunityNickname
 * @property string $BadgeText
 * @property bool $IsActive
 * @property string $TimeZoneSidKey
 * @property string $UserRoleId
 * @property string $LocaleSidKey
 * @property bool $ReceivesInfoEmails
 * @property bool $ReceivesAdminInfoEmails
 * @property string $EmailEncodingKey
 * @property string $DefaultCurrencyIsoCode
 * @property string $CurrencyIsoCode
 * @property string $ProfileId
 * @property string $UserType
 * @property string $LanguageLocaleKey
 * @property string $EmployeeNumber
 * @property string $DelegatedApproverId
 * @property string $ManagerId
 * @property \Carbon\Carbon $LastLoginDate
 * @property \Carbon\Carbon $LastPasswordChangeDate
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $NumberOfFailedLogins
 * @property \Carbon\Carbon $OfflineTrialExpirationDate
 * @property \Carbon\Carbon $OfflinePdaTrialExpirationDate
 * @property bool $UserPermissionsMarketingUser
 * @property bool $UserPermissionsOfflineUser
 * @property bool $UserPermissionsAvantgoUser
 * @property bool $UserPermissionsCallCenterAutoLogin
 * @property bool $UserPermissionsMobileUser
 * @property bool $UserPermissionsSFContentUser
 * @property bool $UserPermissionsInteractionUser
 * @property bool $UserPermissionsSupportUser
 * @property bool $ForecastEnabled
 * @property bool $UserPreferencesActivityRemindersPopup
 * @property bool $UserPreferencesEventRemindersCheckboxDefault
 * @property bool $UserPreferencesTaskRemindersCheckboxDefault
 * @property bool $UserPreferencesReminderSoundOff
 * @property bool $UserPreferencesDisableAllFeedsEmail
 * @property bool $UserPreferencesDisableFollowersEmail
 * @property bool $UserPreferencesDisableProfilePostEmail
 * @property bool $UserPreferencesDisableChangeCommentEmail
 * @property bool $UserPreferencesDisableLaterCommentEmail
 * @property bool $UserPreferencesDisProfPostCommentEmail
 * @property bool $UserPreferencesApexPagesDeveloperMode
 * @property bool $UserPreferencesReceiveNoNotificationsAsApprover
 * @property bool $UserPreferencesReceiveNotificationsAsDelegatedApprover
 * @property bool $UserPreferencesHideCSNGetChatterMobileTask
 * @property bool $UserPreferencesDisableMentionsPostEmail
 * @property bool $UserPreferencesDisMentionsCommentEmail
 * @property bool $UserPreferencesHideCSNDesktopTask
 * @property bool $UserPreferencesHideChatterOnboardingSplash
 * @property bool $UserPreferencesHideSecondChatterOnboardingSplash
 * @property bool $UserPreferencesDisCommentAfterLikeEmail
 * @property bool $UserPreferencesDisableLikeEmail
 * @property bool $UserPreferencesSortFeedByComment
 * @property bool $UserPreferencesDisableMessageEmail
 * @property bool $UserPreferencesDisableBookmarkEmail
 * @property bool $UserPreferencesDisableSharePostEmail
 * @property bool $UserPreferencesEnableAutoSubForFeeds
 * @property bool $UserPreferencesDisableFileShareNotificationsForApi
 * @property bool $UserPreferencesShowTitleToExternalUsers
 * @property bool $UserPreferencesShowManagerToExternalUsers
 * @property bool $UserPreferencesShowEmailToExternalUsers
 * @property bool $UserPreferencesShowWorkPhoneToExternalUsers
 * @property bool $UserPreferencesShowMobilePhoneToExternalUsers
 * @property bool $UserPreferencesShowFaxToExternalUsers
 * @property bool $UserPreferencesShowStreetAddressToExternalUsers
 * @property bool $UserPreferencesShowCityToExternalUsers
 * @property bool $UserPreferencesShowStateToExternalUsers
 * @property bool $UserPreferencesShowPostalCodeToExternalUsers
 * @property bool $UserPreferencesShowCountryToExternalUsers
 * @property bool $UserPreferencesShowProfilePicToGuestUsers
 * @property bool $UserPreferencesShowTitleToGuestUsers
 * @property bool $UserPreferencesShowCityToGuestUsers
 * @property bool $UserPreferencesShowStateToGuestUsers
 * @property bool $UserPreferencesShowPostalCodeToGuestUsers
 * @property bool $UserPreferencesShowCountryToGuestUsers
 * @property bool $UserPreferencesPipelineViewHideHelpPopover
 * @property bool $UserPreferencesHideS1BrowserUI
 * @property bool $UserPreferencesDisableEndorsementEmail
 * @property bool $UserPreferencesPathAssistantCollapsed
 * @property bool $UserPreferencesCacheDiagnostics
 * @property bool $UserPreferencesShowEmailToGuestUsers
 * @property bool $UserPreferencesShowManagerToGuestUsers
 * @property bool $UserPreferencesShowWorkPhoneToGuestUsers
 * @property bool $UserPreferencesShowMobilePhoneToGuestUsers
 * @property bool $UserPreferencesShowFaxToGuestUsers
 * @property bool $UserPreferencesShowStreetAddressToGuestUsers
 * @property bool $UserPreferencesLightningExperiencePreferred
 * @property bool $UserPreferencesPreviewLightning
 * @property bool $UserPreferencesHideEndUserOnboardingAssistantModal
 * @property bool $UserPreferencesHideLightningMigrationModal
 * @property bool $UserPreferencesHideSfxWelcomeMat
 * @property bool $UserPreferencesHideBiggerPhotoCallout
 * @property bool $UserPreferencesGlobalNavBarWTShown
 * @property bool $UserPreferencesGlobalNavGridMenuWTShown
 * @property bool $UserPreferencesCreateLEXAppsWTShown
 * @property bool $UserPreferencesFavoritesWTShown
 * @property bool $UserPreferencesRecordHomeSectionCollapseWTShown
 * @property bool $UserPreferencesRecordHomeReservedWTShown
 * @property bool $UserPreferencesFavoritesShowTopFavorites
 * @property bool $UserPreferencesExcludeMailAppAttachments
 * @property bool $UserPreferencesSuppressTaskSFXReminders
 * @property bool $UserPreferencesSuppressEventSFXReminders
 * @property bool $UserPreferencesPreviewCustomTheme
 * @property bool $UserPreferencesHasCelebrationBadge
 * @property bool $UserPreferencesUserDebugModePref
 * @property bool $UserPreferencesSRHOverrideActivities
 * @property bool $UserPreferencesNewLightningReportRunPageEnabled
 * @property bool $UserPreferencesNativeEmailClient
 * @property string $ContactId
 * @property string $AccountId
 * @property string $CallCenterId
 * @property mixed $Extension
 * @property string $FederationIdentifier
 * @property string $AboutMe
 * @property mixed $FullPhotoUrl
 * @property mixed $SmallPhotoUrl
 * @property bool $IsExtIndicatorVisible
 * @property string $OutOfOfficeMessage
 * @property mixed $MediumPhotoUrl
 * @property string $DigestFrequency
 * @property string $DefaultGroupNotificationFrequency
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property mixed $BannerPhotoUrl
 * @property mixed $SmallBannerPhotoUrl
 * @property mixed $MediumBannerPhotoUrl
 * @property bool $IsProfilePhotoActive
 * @property string $IndividualId
 */
class User extends BaseRecordModel
{
    public static $objectApiName = 'User';
    protected $defaultFields = [
        'Id' => null,
        'Username' => null,
        'LastName' => null,
        'FirstName' => null,
        'MiddleName' => null,
        'Suffix' => null,
        'Name' => null,
        'CompanyName' => null,
        'Division' => null,
        'Department' => null,
        'Title' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Email' => null,
        'EmailPreferencesAutoBcc' => 'bool',
        'EmailPreferencesAutoBccStayInTouch' => 'bool',
        'EmailPreferencesStayInTouchReminder' => 'bool',
        'SenderEmail' => null,
        'SenderName' => null,
        'Signature' => null,
        'StayInTouchSubject' => null,
        'StayInTouchSignature' => null,
        'StayInTouchNote' => null,
        'Phone' => null,
        'Fax' => null,
        'MobilePhone' => null,
        'Alias' => null,
        'CommunityNickname' => null,
        'BadgeText' => null,
        'IsActive' => 'bool',
        'TimeZoneSidKey' => null,
        'UserRoleId' => null,
        'LocaleSidKey' => null,
        'ReceivesInfoEmails' => 'bool',
        'ReceivesAdminInfoEmails' => 'bool',
        'EmailEncodingKey' => null,
        'DefaultCurrencyIsoCode' => null,
        'CurrencyIsoCode' => null,
        'ProfileId' => null,
        'UserType' => null,
        'LanguageLocaleKey' => null,
        'EmployeeNumber' => null,
        'DelegatedApproverId' => null,
        'ManagerId' => null,
        'LastLoginDate' => 'datetime',
        'LastPasswordChangeDate' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'NumberOfFailedLogins' => null,
        'OfflineTrialExpirationDate' => 'datetime',
        'OfflinePdaTrialExpirationDate' => 'datetime',
        'UserPermissionsMarketingUser' => 'bool',
        'UserPermissionsOfflineUser' => 'bool',
        'UserPermissionsAvantgoUser' => 'bool',
        'UserPermissionsCallCenterAutoLogin' => 'bool',
        'UserPermissionsMobileUser' => 'bool',
        'UserPermissionsSFContentUser' => 'bool',
        'UserPermissionsInteractionUser' => 'bool',
        'UserPermissionsSupportUser' => 'bool',
        'ForecastEnabled' => 'bool',
        'UserPreferencesActivityRemindersPopup' => 'bool',
        'UserPreferencesEventRemindersCheckboxDefault' => 'bool',
        'UserPreferencesTaskRemindersCheckboxDefault' => 'bool',
        'UserPreferencesReminderSoundOff' => 'bool',
        'UserPreferencesDisableAllFeedsEmail' => 'bool',
        'UserPreferencesDisableFollowersEmail' => 'bool',
        'UserPreferencesDisableProfilePostEmail' => 'bool',
        'UserPreferencesDisableChangeCommentEmail' => 'bool',
        'UserPreferencesDisableLaterCommentEmail' => 'bool',
        'UserPreferencesDisProfPostCommentEmail' => 'bool',
        'UserPreferencesApexPagesDeveloperMode' => 'bool',
        'UserPreferencesReceiveNoNotificationsAsApprover' => 'bool',
        'UserPreferencesReceiveNotificationsAsDelegatedApprover' => 'bool',
        'UserPreferencesHideCSNGetChatterMobileTask' => 'bool',
        'UserPreferencesDisableMentionsPostEmail' => 'bool',
        'UserPreferencesDisMentionsCommentEmail' => 'bool',
        'UserPreferencesHideCSNDesktopTask' => 'bool',
        'UserPreferencesHideChatterOnboardingSplash' => 'bool',
        'UserPreferencesHideSecondChatterOnboardingSplash' => 'bool',
        'UserPreferencesDisCommentAfterLikeEmail' => 'bool',
        'UserPreferencesDisableLikeEmail' => 'bool',
        'UserPreferencesSortFeedByComment' => 'bool',
        'UserPreferencesDisableMessageEmail' => 'bool',
        'UserPreferencesDisableBookmarkEmail' => 'bool',
        'UserPreferencesDisableSharePostEmail' => 'bool',
        'UserPreferencesEnableAutoSubForFeeds' => 'bool',
        'UserPreferencesDisableFileShareNotificationsForApi' => 'bool',
        'UserPreferencesShowTitleToExternalUsers' => 'bool',
        'UserPreferencesShowManagerToExternalUsers' => 'bool',
        'UserPreferencesShowEmailToExternalUsers' => 'bool',
        'UserPreferencesShowWorkPhoneToExternalUsers' => 'bool',
        'UserPreferencesShowMobilePhoneToExternalUsers' => 'bool',
        'UserPreferencesShowFaxToExternalUsers' => 'bool',
        'UserPreferencesShowStreetAddressToExternalUsers' => 'bool',
        'UserPreferencesShowCityToExternalUsers' => 'bool',
        'UserPreferencesShowStateToExternalUsers' => 'bool',
        'UserPreferencesShowPostalCodeToExternalUsers' => 'bool',
        'UserPreferencesShowCountryToExternalUsers' => 'bool',
        'UserPreferencesShowProfilePicToGuestUsers' => 'bool',
        'UserPreferencesShowTitleToGuestUsers' => 'bool',
        'UserPreferencesShowCityToGuestUsers' => 'bool',
        'UserPreferencesShowStateToGuestUsers' => 'bool',
        'UserPreferencesShowPostalCodeToGuestUsers' => 'bool',
        'UserPreferencesShowCountryToGuestUsers' => 'bool',
        'UserPreferencesPipelineViewHideHelpPopover' => 'bool',
        'UserPreferencesHideS1BrowserUI' => 'bool',
        'UserPreferencesDisableEndorsementEmail' => 'bool',
        'UserPreferencesPathAssistantCollapsed' => 'bool',
        'UserPreferencesCacheDiagnostics' => 'bool',
        'UserPreferencesShowEmailToGuestUsers' => 'bool',
        'UserPreferencesShowManagerToGuestUsers' => 'bool',
        'UserPreferencesShowWorkPhoneToGuestUsers' => 'bool',
        'UserPreferencesShowMobilePhoneToGuestUsers' => 'bool',
        'UserPreferencesShowFaxToGuestUsers' => 'bool',
        'UserPreferencesShowStreetAddressToGuestUsers' => 'bool',
        'UserPreferencesLightningExperiencePreferred' => 'bool',
        'UserPreferencesPreviewLightning' => 'bool',
        'UserPreferencesHideEndUserOnboardingAssistantModal' => 'bool',
        'UserPreferencesHideLightningMigrationModal' => 'bool',
        'UserPreferencesHideSfxWelcomeMat' => 'bool',
        'UserPreferencesHideBiggerPhotoCallout' => 'bool',
        'UserPreferencesGlobalNavBarWTShown' => 'bool',
        'UserPreferencesGlobalNavGridMenuWTShown' => 'bool',
        'UserPreferencesCreateLEXAppsWTShown' => 'bool',
        'UserPreferencesFavoritesWTShown' => 'bool',
        'UserPreferencesRecordHomeSectionCollapseWTShown' => 'bool',
        'UserPreferencesRecordHomeReservedWTShown' => 'bool',
        'UserPreferencesFavoritesShowTopFavorites' => 'bool',
        'UserPreferencesExcludeMailAppAttachments' => 'bool',
        'UserPreferencesSuppressTaskSFXReminders' => 'bool',
        'UserPreferencesSuppressEventSFXReminders' => 'bool',
        'UserPreferencesPreviewCustomTheme' => 'bool',
        'UserPreferencesHasCelebrationBadge' => 'bool',
        'UserPreferencesUserDebugModePref' => 'bool',
        'UserPreferencesSRHOverrideActivities' => 'bool',
        'UserPreferencesNewLightningReportRunPageEnabled' => 'bool',
        'UserPreferencesNativeEmailClient' => 'bool',
        'ContactId' => null,
        'AccountId' => null,
        'CallCenterId' => null,
        'Extension' => null,
        'FederationIdentifier' => null,
        'AboutMe' => null,
        'FullPhotoUrl' => null,
        'SmallPhotoUrl' => null,
        'IsExtIndicatorVisible' => 'bool',
        'OutOfOfficeMessage' => null,
        'MediumPhotoUrl' => null,
        'DigestFrequency' => null,
        'DefaultGroupNotificationFrequency' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'BannerPhotoUrl' => null,
        'SmallBannerPhotoUrl' => null,
        'MediumBannerPhotoUrl' => null,
        'IsProfilePhotoActive' => 'bool',
        'IndividualId' => null,
    ];
}
