<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Retrieve
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RetrieveRequest|null $retrieveRequest
 */
class Retrieve
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
