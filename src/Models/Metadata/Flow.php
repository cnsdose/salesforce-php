<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Flow
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowActionCall[]|null $actionCalls
 * @property FlowApexPluginCall[]|null $apexPluginCalls
 * @property FlowAssignment[]|null $assignments
 * @property FlowChoice[]|null $choices
 * @property FlowConstant[]|null $constants
 * @property FlowDecision[]|null $decisions
 * @property string|null $description
 * @property FlowDynamicChoiceSet[]|null $dynamicChoiceSets
 * @property FlowFormula[]|null $formulas
 * @property string|null $interviewLabel
 * @property bool|null $isAdditionalPermissionRequiredToRun
 * @property bool|null $isTemplate
 * @property string|null $label
 * @property FlowLoop[]|null $loops
 * @property FlowMetadataValue[]|null $processMetadataValues
 * @property string|null $processType
 * @property FlowRecordCreate[]|null $recordCreates
 * @property FlowRecordDelete[]|null $recordDeletes
 * @property FlowRecordLookup[]|null $recordLookups
 * @property FlowRecordUpdate[]|null $recordUpdates
 * @property FlowScreen[]|null $screens
 * @property FlowStage[]|null $stages
 * @property FlowStart|null $start
 * @property string|null $startElementReference
 * @property string|null $status
 * @property FlowStep[]|null $steps
 * @property FlowSubflow[]|null $subflows
 * @property FlowTextTemplate[]|null $textTemplates
 * @property FlowVariable[]|null $variables
 * @property FlowWait[]|null $waits
 */
class Flow extends Metadata
{
    public static $classMap = [
        'actionCalls' => [
            'multiple' => true,
            'type' => FlowActionCall::class,
        ],
        'apexPluginCalls' => [
            'multiple' => true,
            'type' => FlowApexPluginCall::class,
        ],
        'assignments' => [
            'multiple' => true,
            'type' => FlowAssignment::class,
        ],
        'choices' => [
            'multiple' => true,
            'type' => FlowChoice::class,
        ],
        'constants' => [
            'multiple' => true,
            'type' => FlowConstant::class,
        ],
        'decisions' => [
            'multiple' => true,
            'type' => FlowDecision::class,
        ],
        'dynamicChoiceSets' => [
            'multiple' => true,
            'type' => FlowDynamicChoiceSet::class,
        ],
        'formulas' => [
            'multiple' => true,
            'type' => FlowFormula::class,
        ],
        'loops' => [
            'multiple' => true,
            'type' => FlowLoop::class,
        ],
        'processMetadataValues' => [
            'multiple' => true,
            'type' => FlowMetadataValue::class,
        ],
        'recordCreates' => [
            'multiple' => true,
            'type' => FlowRecordCreate::class,
        ],
        'recordDeletes' => [
            'multiple' => true,
            'type' => FlowRecordDelete::class,
        ],
        'recordLookups' => [
            'multiple' => true,
            'type' => FlowRecordLookup::class,
        ],
        'recordUpdates' => [
            'multiple' => true,
            'type' => FlowRecordUpdate::class,
        ],
        'screens' => [
            'multiple' => true,
            'type' => FlowScreen::class,
        ],
        'stages' => [
            'multiple' => true,
            'type' => FlowStage::class,
        ],
        'start' => [
            'multiple' => false,
            'type' => FlowStart::class,
        ],
        'steps' => [
            'multiple' => true,
            'type' => FlowStep::class,
        ],
        'subflows' => [
            'multiple' => true,
            'type' => FlowSubflow::class,
        ],
        'textTemplates' => [
            'multiple' => true,
            'type' => FlowTextTemplate::class,
        ],
        'variables' => [
            'multiple' => true,
            'type' => FlowVariable::class,
        ],
        'waits' => [
            'multiple' => true,
            'type' => FlowWait::class,
        ],
    ];

    public function setActionCalls(array $actionCalls)
    {
        $this->actionCalls = $actionCalls;
    }

    public function setApexPluginCalls(array $apexPluginCalls)
    {
        $this->apexPluginCalls = $apexPluginCalls;
    }

    public function setAssignments(array $assignments)
    {
        $this->assignments = $assignments;
    }

    public function setChoices(array $choices)
    {
        $this->choices = $choices;
    }

    public function setConstants(array $constants)
    {
        $this->constants = $constants;
    }

    public function setDecisions(array $decisions)
    {
        $this->decisions = $decisions;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDynamicChoiceSets(array $dynamicChoiceSets)
    {
        $this->dynamicChoiceSets = $dynamicChoiceSets;
    }

    public function setFormulas(array $formulas)
    {
        $this->formulas = $formulas;
    }

    public function setInterviewLabel(string $interviewLabel)
    {
        $this->interviewLabel = $interviewLabel;
    }

    public function setIsAdditionalPermissionRequiredToRun(bool $isAdditionalPermissionRequiredToRun)
    {
        $this->isAdditionalPermissionRequiredToRun = $isAdditionalPermissionRequiredToRun;
    }

    public function setIsTemplate(bool $isTemplate)
    {
        $this->isTemplate = $isTemplate;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLoops(array $loops)
    {
        $this->loops = $loops;
    }

    public function setProcessMetadataValues(array $processMetadataValues)
    {
        $this->processMetadataValues = $processMetadataValues;
    }

    public function setProcessType(FlowProcessType $processType)
    {
        $this->processType = $processType->getValue();
    }

    public function setRecordCreates(array $recordCreates)
    {
        $this->recordCreates = $recordCreates;
    }

    public function setRecordDeletes(array $recordDeletes)
    {
        $this->recordDeletes = $recordDeletes;
    }

    public function setRecordLookups(array $recordLookups)
    {
        $this->recordLookups = $recordLookups;
    }

    public function setRecordUpdates(array $recordUpdates)
    {
        $this->recordUpdates = $recordUpdates;
    }

    public function setScreens(array $screens)
    {
        $this->screens = $screens;
    }

    public function setStages(array $stages)
    {
        $this->stages = $stages;
    }

    public function setStart(FlowStart $start)
    {
        $this->start = $start;
    }

    public function setStartElementReference(string $startElementReference)
    {
        $this->startElementReference = $startElementReference;
    }

    public function setStatus(FlowVersionStatus $status)
    {
        $this->status = $status->getValue();
    }

    public function setSteps(array $steps)
    {
        $this->steps = $steps;
    }

    public function setSubflows(array $subflows)
    {
        $this->subflows = $subflows;
    }

    public function setTextTemplates(array $textTemplates)
    {
        $this->textTemplates = $textTemplates;
    }

    public function setVariables(array $variables)
    {
        $this->variables = $variables;
    }

    public function setWaits(array $waits)
    {
        $this->waits = $waits;
    }
}
