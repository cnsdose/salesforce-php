<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UserInterfaceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $alternateAlohaListView
 * @property bool|null $enableAsyncRelatedLists
 * @property bool|null $enableClickjackUserPageHeaderless
 * @property bool|null $enableCollapsibleSections
 * @property bool|null $enableCollapsibleSideBar
 * @property bool|null $enableCustomObjectTruncate
 * @property bool|null $enableCustomeSideBarOnAllPages
 * @property bool|null $enableDeleteFieldHistory
 * @property bool|null $enableHoverDetails
 * @property bool|null $enableInlineEdit
 * @property bool|null $enableNewPageLayoutEditor
 * @property bool|null $enablePersonalCanvas
 * @property bool|null $enablePrintableListViews
 * @property bool|null $enableProfileCustomTabsets
 * @property bool|null $enableQuickCreate
 * @property bool|null $enableTabOrganizer
 */
class UserInterfaceSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setAlternateAlohaListView(bool $alternateAlohaListView)
    {
        $this->alternateAlohaListView = $alternateAlohaListView;
    }

    public function setEnableAsyncRelatedLists(bool $enableAsyncRelatedLists)
    {
        $this->enableAsyncRelatedLists = $enableAsyncRelatedLists;
    }

    public function setEnableClickjackUserPageHeaderless(bool $enableClickjackUserPageHeaderless)
    {
        $this->enableClickjackUserPageHeaderless = $enableClickjackUserPageHeaderless;
    }

    public function setEnableCollapsibleSections(bool $enableCollapsibleSections)
    {
        $this->enableCollapsibleSections = $enableCollapsibleSections;
    }

    public function setEnableCollapsibleSideBar(bool $enableCollapsibleSideBar)
    {
        $this->enableCollapsibleSideBar = $enableCollapsibleSideBar;
    }

    public function setEnableCustomObjectTruncate(bool $enableCustomObjectTruncate)
    {
        $this->enableCustomObjectTruncate = $enableCustomObjectTruncate;
    }

    public function setEnableCustomeSideBarOnAllPages(bool $enableCustomeSideBarOnAllPages)
    {
        $this->enableCustomeSideBarOnAllPages = $enableCustomeSideBarOnAllPages;
    }

    public function setEnableDeleteFieldHistory(bool $enableDeleteFieldHistory)
    {
        $this->enableDeleteFieldHistory = $enableDeleteFieldHistory;
    }

    public function setEnableHoverDetails(bool $enableHoverDetails)
    {
        $this->enableHoverDetails = $enableHoverDetails;
    }

    public function setEnableInlineEdit(bool $enableInlineEdit)
    {
        $this->enableInlineEdit = $enableInlineEdit;
    }

    public function setEnableNewPageLayoutEditor(bool $enableNewPageLayoutEditor)
    {
        $this->enableNewPageLayoutEditor = $enableNewPageLayoutEditor;
    }

    public function setEnablePersonalCanvas(bool $enablePersonalCanvas)
    {
        $this->enablePersonalCanvas = $enablePersonalCanvas;
    }

    public function setEnablePrintableListViews(bool $enablePrintableListViews)
    {
        $this->enablePrintableListViews = $enablePrintableListViews;
    }

    public function setEnableProfileCustomTabsets(bool $enableProfileCustomTabsets)
    {
        $this->enableProfileCustomTabsets = $enableProfileCustomTabsets;
    }

    public function setEnableQuickCreate(bool $enableQuickCreate)
    {
        $this->enableQuickCreate = $enableQuickCreate;
    }

    public function setEnableTabOrganizer(bool $enableTabOrganizer)
    {
        $this->enableTabOrganizer = $enableTabOrganizer;
    }
}
