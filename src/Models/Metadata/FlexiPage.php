<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlexiPage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property FlexiPageRegion[]|null $flexiPageRegions
 * @property string|null $masterLabel
 * @property string|null $parentFlexiPage
 * @property PlatformActionList|null $platformActionlist
 * @property QuickActionList|null $quickActionList
 * @property string|null $sobjectType
 * @property FlexiPageTemplateInstance|null $template
 * @property string|null $type
 */
class FlexiPage extends Metadata
{
    public static $classMap = [
        'flexiPageRegions' => [
            'multiple' => true,
            'type' => FlexiPageRegion::class,
        ],
        'platformActionlist' => [
            'multiple' => false,
            'type' => PlatformActionList::class,
        ],
        'quickActionList' => [
            'multiple' => false,
            'type' => QuickActionList::class,
        ],
        'template' => [
            'multiple' => false,
            'type' => FlexiPageTemplateInstance::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFlexiPageRegions(array $flexiPageRegions)
    {
        $this->flexiPageRegions = $flexiPageRegions;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setParentFlexiPage(string $parentFlexiPage)
    {
        $this->parentFlexiPage = $parentFlexiPage;
    }

    public function setPlatformActionlist(PlatformActionList $platformActionlist)
    {
        $this->platformActionlist = $platformActionlist;
    }

    public function setQuickActionList(QuickActionList $quickActionList)
    {
        $this->quickActionList = $quickActionList;
    }

    public function setSobjectType(string $sobjectType)
    {
        $this->sobjectType = $sobjectType;
    }

    public function setTemplate(FlexiPageTemplateInstance $template)
    {
        $this->template = $template;
    }

    public function setType(FlexiPageType $type)
    {
        $this->type = $type->getValue();
    }
}
