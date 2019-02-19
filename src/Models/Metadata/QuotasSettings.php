<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuotasSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $showQuotas
 */
class QuotasSettings
{
    public static $classMap = [
    ];

    public function setShowQuotas(bool $showQuotas)
    {
        $this->showQuotas = $showQuotas;
    }
}
