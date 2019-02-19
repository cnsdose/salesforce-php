<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmd
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $application
 * @property string|null $dataset
 * @property string|null $datasetConnector
 * @property string|null $datasetFullyQualifiedName
 * @property WaveXmdDate[]|null $dates
 * @property WaveXmdDimension[]|null $dimensions
 * @property WaveXmdMeasure[]|null $measures
 * @property WaveXmdOrganization[]|null $organizations
 * @property string|null $origin
 * @property string|null $type
 * @property string|null $waveVisualization
 */
class WaveXmd extends Metadata
{
    public static $classMap = [
        'dates' => [
            'multiple' => true,
            'type' => WaveXmdDate::class,
        ],
        'dimensions' => [
            'multiple' => true,
            'type' => WaveXmdDimension::class,
        ],
        'measures' => [
            'multiple' => true,
            'type' => WaveXmdMeasure::class,
        ],
        'organizations' => [
            'multiple' => true,
            'type' => WaveXmdOrganization::class,
        ],
    ];

    public function setApplication(string $application)
    {
        $this->application = $application;
    }

    public function setDataset(string $dataset)
    {
        $this->dataset = $dataset;
    }

    public function setDatasetConnector(string $datasetConnector)
    {
        $this->datasetConnector = $datasetConnector;
    }

    public function setDatasetFullyQualifiedName(string $datasetFullyQualifiedName)
    {
        $this->datasetFullyQualifiedName = $datasetFullyQualifiedName;
    }

    public function setDates(array $dates)
    {
        $this->dates = $dates;
    }

    public function setDimensions(array $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function setMeasures(array $measures)
    {
        $this->measures = $measures;
    }

    public function setOrganizations(array $organizations)
    {
        $this->organizations = $organizations;
    }

    public function setOrigin(string $origin)
    {
        $this->origin = $origin;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setWaveVisualization(string $waveVisualization)
    {
        $this->waveVisualization = $waveVisualization;
    }
}
