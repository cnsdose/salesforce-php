<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowFieldUpdate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $field
 * @property string|null $formula
 * @property string|null $literalValue
 * @property string|null $lookupValue
 * @property string|null $lookupValueType
 * @property string|null $name
 * @property bool|null $notifyAssignee
 * @property string|null $operation
 * @property bool|null $protected
 * @property bool|null $reevaluateOnChange
 * @property string|null $targetObject
 */
class WorkflowFieldUpdate extends WorkflowAction
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }

    public function setLiteralValue(string $literalValue)
    {
        $this->literalValue = $literalValue;
    }

    public function setLookupValue(string $lookupValue)
    {
        $this->lookupValue = $lookupValue;
    }

    public function setLookupValueType(LookupValueType $lookupValueType)
    {
        $this->lookupValueType = $lookupValueType->getValue();
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNotifyAssignee(bool $notifyAssignee)
    {
        $this->notifyAssignee = $notifyAssignee;
    }

    public function setOperation(FieldUpdateOperation $operation)
    {
        $this->operation = $operation->getValue();
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }

    public function setReevaluateOnChange(bool $reevaluateOnChange)
    {
        $this->reevaluateOnChange = $reevaluateOnChange;
    }

    public function setTargetObject(string $targetObject)
    {
        $this->targetObject = $targetObject;
    }
}
