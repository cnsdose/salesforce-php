<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:49 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ListView
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property string|null $booleanFilter
 * @property string[]|null $columns
 * @property string|null $division
 * @property string|null $filterScope
 * @property ListViewFilter[]|null $filters
 * @property string|null $label
 * @property string|null $language
 * @property string|null $queue
 * @property SharedTo|null $sharedTo
 */
class ListView
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setColumns(array $columns)
    {
        $this->columns = $columns;
    }

    public function setDivision(string $division)
    {
        $this->division = $division;
    }

    public function setFilterScope(FilterScope $filterScope)
    {
        $this->filterScope = $filterScope->getValue();
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLanguage(Language $language)
    {
        $this->language = $language->getValue();
    }

    public function setQueue(string $queue)
    {
        $this->queue = $queue;
    }

    public function setSharedTo(SharedTo $sharedTo)
    {
        $this->sharedTo = $sharedTo;
    }
}
