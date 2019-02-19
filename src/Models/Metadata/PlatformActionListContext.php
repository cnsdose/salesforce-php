<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PlatformActionListContext extends Enum
{
    const LIST_VIEW = 'ListView';
    const RELATED_LIST = 'RelatedList';
    const LIST_VIEW_RECORD = 'ListViewRecord';
    const RELATED_LIST_RECORD = 'RelatedListRecord';
    const RECORD = 'Record';
    const FEED_ELEMENT = 'FeedElement';
    const CHATTER = 'Chatter';
    const GLOBAL = 'Global';
    const FLEXIPAGE = 'Flexipage';
    const MRU_LIST = 'MruList';
    const MRU_ROW = 'MruRow';
    const RECORD_EDIT = 'RecordEdit';
    const PHOTO = 'Photo';
    const BANNER_PHOTO = 'BannerPhoto';
    const OBJECT_HOME_CHART = 'ObjectHomeChart';
    const LIST_VIEW_DEFINITION = 'ListViewDefinition';
    const DOCKABLE = 'Dockable';
    const LOOKUP = 'Lookup';
    const ASSISTANT = 'Assistant';
}
