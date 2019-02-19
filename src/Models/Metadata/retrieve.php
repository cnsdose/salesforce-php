<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class retrieve
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RetrieveRequest|null $retrieveRequest
 */
class retrieve
{
    public static $classMap = [
        'retrieveRequest' => [
            'multiple' => false,
            'type' => RetrieveRequest::class,
        ],
    ];

    public function setRetrieveRequest(RetrieveRequest $retrieveRequest)
    {
        $this->retrieveRequest = $retrieveRequest;
    }
}
