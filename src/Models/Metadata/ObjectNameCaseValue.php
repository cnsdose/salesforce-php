<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ObjectNameCaseValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $article
 * @property string|null $caseType
 * @property bool|null $plural
 * @property string|null $possessive
 * @property string|null $value
 */
class ObjectNameCaseValue
{
    public static $classMap = [
    ];

    public function setArticle(Article $article)
    {
        $this->article = $article->getValue();
    }

    public function setCaseType(CaseType $caseType)
    {
        $this->caseType = $caseType->getValue();
    }

    public function setPlural(bool $plural)
    {
        $this->plural = $plural;
    }

    public function setPossessive(Possessive $possessive)
    {
        $this->possessive = $possessive->getValue();
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
