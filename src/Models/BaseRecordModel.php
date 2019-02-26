<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 2019-02-06
 * Time: 14:57
 */

namespace CNSDose\Salesforce\Models;

use CNSDose\Salesforce\Exceptions\AuthorisationException;
use CNSDose\Salesforce\Exceptions\MalformedRequestException;
use CNSDose\Salesforce\Support\Authentication;
use CNSDose\Salesforce\Support\Conversion\BaseConversion;
use CNSDose\Standards\Exceptions\StandardException;
use GuzzleHttp\Client as GuzzleClient;
use Psr\Http\Message\ResponseInterface;

class BaseRecordModel extends \CNSDose\Standards\Models\BaseModel
{
    protected $preserveOriginalName = true;
    /**
     * === === === === ===
     * Object configurations
     * === === === === ===
     */
    protected static $objectApiName = 'BaseRecordModel';
    protected $defaultFields = [];
    private $recording = false;
    protected $changedFields = [];

    public function __construct(array $data = null, $decode = false)
    {
        $customFields = config(sprintf('salesforce.custom_fields.%s', static::class));
        if (!empty($customFields)) {
            $this->defaultFields = array_merge($this->defaultFields, $customFields);
        }
        if ($decode) {
            parent::__construct($this->decode($data));
        } else {
            parent::__construct($data);
        }
        $this->recording = true;
    }

    public function __set($name, $value)
    {
        parent::__set($name, $value);
        if ($this->recording) {
            $this->changedFields[] = $name;
        }
    }

    public function __unset($name)
    {
        parent::__unset($name);
        if ($this->recording) {
            $this->changedFields[] = $name;
        }
    }

    /**
     * === === === === ===
     * REST client
     * === === === === ===
     */
    protected static $API_PREFIX = 'https://ap8.salesforce.com/services/data/';

    /**
     * @param $method
     * @param $url
     * @param array $options
     * @return mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    protected static function guzzleRequest($method, $url, array $options = [])
    {
        $guzzleClient = new GuzzleClient();
        /**
         * @var ResponseInterface $response
         */
        $response = $guzzleClient->$method($url, array_merge([
            'headers' => [
                'Authorization' => 'Bearer ' . Authentication::getAccessToken(),
            ],
            'http_errors' => false,
        ], $options));
        $json = json_decode($response->getBody()->getContents(), true);
        $status = $response->getStatusCode();
        if ($status >= 200 && $status < 300) {
            return $json;
        }
        if ($status === 400) {
            throw new MalformedRequestException($json[0]['message'], $json[0]['errorCode']);
        }
        if ($status === 401) {
            throw new AuthorisationException($json[0]['message'], $json[0]['errorCode']);
        }
        $exception = new StandardException(500, 'Unknown Salesforce query error');
        foreach ($json as $error) {
            $exception->addError($error['errorCode'], $error['message']);
        }
        throw $exception;
    }

    /**
     * === === === === ===
     * SOQL Query Builder
     * === === === === ===
     */
    protected $query = [
        'select' => [],
        'from' => [],
        'where' => [
            'AND' => [],
            'OR' => [],
        ],
        'resolve' => [],
        'orderBy' => [],
    ];
    protected $rawQuery;
    protected static $COMPARISON_OPERATORS = ['=', '!=', '<', '<=', '>', '>=', 'LIKE', 'IN', 'NOT IN', 'INCLUDES', 'EXCLUDES'];

    /**
     * @return static
     */
    public static function build(): self
    {
        $model = static::class;
        return new $model();
    }

    /**
     * @param string|string[]|BaseRecordModel|BaseRecordModel[]|mixed|mixed[] $fields
     * @return static
     */
    public function select($fields = '*')
    {
        if ($fields === '*') {
            $this->query['select'] = array_keys($this->defaultFields);
        } elseif (is_string($fields)) {
            $this->query['select'] = array_merge($this->query['select'], explode(',', $fields));
        } elseif (is_array($fields)) {
            $this->query['select'] = array_merge($this->query['select'], $fields);
        } else {
            $this->query['select'][] = $fields;
        }
        return $this;
    }

    /**
     * @param string|null $objectApiName
     * @return static
     */
    public function from(string $objectApiName = null)
    {
        if ($objectApiName === null) {
            $this->query['from'] = static::$objectApiName;
        } else {
            $this->query['from'] = $objectApiName;
        }
        return $this;
    }

    /**
     * @param string $field
     * @param null|string|BaseRecordModel|mixed $operator
     * @param null|string|BaseRecordModel|mixed $value
     * @return static
     */
    public function where(string $field, $operator = null, $value = null): self
    {
        if (is_string($field) && $operator === null && $value === null) {
            $this->query['where']['AND'][] = $field;
        }
        if ($value === null && ($operator === null
                || ((is_string($operator) || is_int($operator) || is_float($operator)) && !in_array(strtoupper($operator), self::$COMPARISON_OPERATORS, true)))
        ) {
            $value = $operator;
            $operator = '=';
        }
        $this->query['where']['AND'][] = [$field, $operator, $value];
        return $this;
    }

    /**
     * @param string $field
     * @param null|string|BaseRecordModel|mixed $operator
     * @param null|string|BaseRecordModel|mixed $value
     * @return static
     */
    public function orWhere(string $field, $operator, $value = null): self
    {
        if (is_string($field) && $operator === null && $value === null) {
            $this->query['where']['OR'][] = $field;
        }
        if ($value === null && ($operator === null
                || ((is_string($operator) || is_int($operator) || is_float($operator)) && !in_array(strtoupper($operator), self::$COMPARISON_OPERATORS, true)))
        ) {
            $value = $operator;
            $operator = '=';
        }
        $this->query['where']['OR'][] = [$field, $operator, $value];
        return $this;
    }

    /**
     * @param string[]|string $fields
     * @param bool $ascending
     * @param bool $nullsFirst
     * @return static
     */
    public function orderBy($fields, bool $ascending = true, bool $nullsFirst = true): self
    {
        if (is_array($fields)) {
            $fields = implode(',', $fields);
        }
        $this->query['orderBy'] = [
            'fields' => $fields,
            'ascending' => $ascending,
            'nullsFirst' => $nullsFirst,
        ];
        return $this;
    }

    /**
     * @param int $limit
     * @return static
     */
    public function limit(int $limit)
    {
        $this->query['limit'] = $limit;
        return $this;
    }

    /**
     * @param int $offset
     * @return static
     */
    public function offset(int $offset)
    {
        $this->query['offset'] = $offset;
        return $this;
    }

    /**
     * Resolve relationship
     * @param string $foreignClass
     * @param string $foreignKey
     * @return static
     */
    public function resolve(string $foreignClass, string $foreignKey): self
    {
        $this->query['resolve'][$foreignKey] = $foreignClass;
        $this->query['select'][] = $foreignClass::build()
            ->from(sprintf('%s.%s', static::$objectApiName, $foreignKey));
        return $this;
    }

    /**
     * @return string
     */
    public function toSoql(): string
    {
        if ($this->rawQuery !== null) {
            return $this->rawQuery;
        }
        // SELECT
        if (empty($this->query['select'])) {
            $this->select();
        }
        $soql = 'SELECT ';
        $soql .= implode(',', array_map(function ($select) {
            /**
             * @var string|BaseRecordModel $select
             */
            if (is_object($select)) {
                return sprintf('(%s)', $select->toSoql());
            }
            return $select;
        }, $this->query['select']));
        $soql .= ' ';

        // FROM
        if (empty($this->query['from'])) {
            $this->from();
        }
        $soql .= 'FROM ' . $this->query['from'];
        $soql .= ' ';

        // WHERE
        if (!(empty($this->query['where']['AND']) && empty($this->query['where']['OR']))) {
            $soql .= 'WHERE ';
            if (!empty($this->query['where']['AND'])) {
                $soql .= '(';
                $soql .= implode(' AND ', array_map(function (array $clause) {
                    [$field, $operator, $value] = $clause;
                    if (is_object($value)) {
                        return sprintf('%s %s (%s)', $field, $operator, $value->toSoql());
                    }
                    return sprintf('%s %s %s', $field, $operator, $value ?? 'NULL');
                }, $this->query['where']['AND']));
                $soql .= ')';
            }
            if (!empty($this->query['where']['OR'])) {
                if (!empty($this->query['where']['AND'])) {
                    $soql .= ' OR ';
                }
                $soql .= implode(' OR ', array_map(function (array $clause) {
                    [$field, $operator, $value] = $clause;
                    if (is_object($value)) {
                        return sprintf('%s %s (%s)', $field, $operator, $value->toSoql());
                    }
                    return sprintf('%s %s %s', $field, $operator, $value ?? 'NULL');
                }, $this->query['where']['OR']));
            }
        }
        $soql .= ' ';

        // ORDER BY
        if (!(empty($this->query['orderBy']) || empty($this->query['orderBy']['fields']))) {
            $soql .= 'ORDER BY '
                . $this->query['orderBy']['fields']
                . ($this->query['orderBy']['ascending'] ? ' ASC' : ' DESC')
                . ($this->query['orderBy']['nullsFirst'] ? ' NULLS FIRST' : ' NULLS LAST');
        }
        $soql .= ' ';

        // LIMIT, OFFSET
        if (!empty($this->query['limit'])) {
            $soql .= "LIMIT {$this->query['limit']} ";
        }
        if (!empty($this->query['offset'])) {
            $soql .= "OFFSET {$this->query['offset']} ";
        }

        return $soql;
    }

    /**
     * @param bool $depagination
     * @param string $nextRecordsUrl
     * @return array
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    protected function queryFromBuilder(bool $depagination = false, string &$nextRecordsUrl = null): array
    {
        $url = sprintf('%s%s/query/', self::$API_PREFIX, config('salesforce.api_version'));
        $response = self::guzzleRequest('get', $url, [
            'query' => ['q' => $this->toSoql()],
        ]);
        $result = [
            'totalSize' => $response['totalSize'] ?? null,
            'records' => [$response['records'] ?? []],
        ];
        while ($depagination && !empty($response['nextRecordsUrl'])) {
            $url = self::$API_PREFIX
                . config('salesforce.api_version')
                . substr($response['nextRecordsUrl'], strpos($response['nextRecordsUrl'], '/query'));
            $response = self::guzzleRequest('get', $url);
            $result['records'][] = $response['records'] ?? [];
        }
        $result['records'] = array_merge(...$result['records']);
        $nextRecordsUrl = $response['nextRecordsUrl'] ?? null;
        return $result;
    }

    /**
     * @param bool $depagination
     * @param string $nextRecordsUrl
     * @return static[]|mixed
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function query(bool $depagination = true, string &$nextRecordsUrl = null): array
    {
        $json = $this->queryFromBuilder($depagination, $nextRecordsUrl);
        $decoded = array_map([$this, 'decode'], $json['records']);
        return array_map(function ($data) {
            return new static($data);
        }, $decoded);
    }

    /**
     * @param string $soql
     * @param bool $depagination
     * @param string $nextRecordsUrl
     * @return static[]|mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public function queryRaw(string $soql, bool $depagination = false, string &$nextRecordsUrl = null): array
    {
        $this->rawQuery = $soql;
        if (static::class === self::class) {
            return $this->queryFromBuilder();
        }
        return $this->query($depagination, $nextRecordsUrl);
    }

    /**
     * Fetches single object, populates all fields regardless of whether they're pre-defined in class/configuration or not
     *
     * @param string $id
     * @return static|mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public static function queryById(string $id)
    {
        if (static::class === self::class) {
            throw new StandardException(500, 'Do not use BaseRecordModel::queryById()');
        }
        $url = sprintf(
            '%s%s/sobjects/%s/%s',
            self::$API_PREFIX,
            config('salesforce.api_version'),
            static::$objectApiName,
            $id
        );
        $json = self::guzzleRequest('get', $url);
        return new static($json, true);
    }

    /**
     * === === === === ===
     * Write operations
     * === === === === ===
     */
    /**
     * @return array
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     */
    public function create(): array
    {
        $url = sprintf(
            '%s%s/sobjects/%s/',
            self::$API_PREFIX,
            config('salesforce.api_version'),
            static::$objectApiName
        );
        $record = $this->encode($this->raw());
        $response = self::guzzleRequest('post', $url, [
            'json' => $record,
        ]);
        if ($response['success']) {
            $this->Id = $response['id'];
        }
        return $response;
    }

    /**
     * @param BaseRecordModel[]|array $records
     * @param bool $allOrNone
     * @return mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public static function createMultiple(array $records, bool $allOrNone = false)
    {
        $url = sprintf(
            '%s%s/composite/sobjects',
            self::$API_PREFIX,
            config('salesforce.api_version')
        );
        $records = array_map(function ($record) {
            /**
             * @var BaseRecordModel|mixed $record
             */
            $type = $record::$objectApiName;
            $record = $record->encode($record->raw());
            $record['attributes'] = [
                'type' => $type,
            ];
            return $record;
        }, $records);
        return self::guzzleRequest('post', $url, [
            'json' => [
                'allOrNone' => $allOrNone,
                'records' => $records,
            ],
        ]);
    }

    /**
     * @param string $externalId
     * @return mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     */
    public function upsert(string $externalId = 'Id')
    {
        if (empty($this->$externalId)) {
            throw new MalformedRequestException("Field $externalId is missing", 'MISSING_ID');
        }
        $url = sprintf(
            '%s%s/sobjects/%s/%s/%s',
            self::$API_PREFIX,
            config('salesforce.api_version'),
            static::$objectApiName,
            $externalId,
            $this->$externalId
        );

        $record = array_intersect_key($this->encode($this->raw()), array_flip(array_unique($this->changedFields)));
        $response = self::guzzleRequest('patch', $url, [
            'json' => $record,
        ]);
        if ($response['success']) {
            $this->Id = $response['id'];
        }
        return $response;
    }

    /**
     * @param BaseRecordModel[]|array $records
     * @param bool $allOrNone
     * @return mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public static function upsertMultiple(array $records, bool $allOrNone = false)
    {
        $url = sprintf(
            '%s%s/composite/sobjects',
            self::$API_PREFIX,
            config('salesforce.api_version')
        );
        $records = array_map(function ($record) {
            /**
             * @var BaseRecordModel|mixed $record
             */
            $type = $record::$objectApiName;
            $record = array_intersect_key($record->encode($record->raw()), array_flip(array_unique(array_merge($record->changedFields, ['Id']))));
            $record['attributes'] = [
                'type' => $type,
            ];
            return $record;
        }, $records);
        return self::guzzleRequest('patch', $url, [
            'json' => [
                'allOrNone' => $allOrNone,
                'records' => $records,
            ],
        ]);
    }

    /**
     * @return mixed|null
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public function delete()
    {
        if (empty($this->Id)) {
            throw new MalformedRequestException('Field Id is missing', 'MISSING_ID');
        }
        $url = sprintf(
            '%s%s/sobjects/%s/%s',
            self::$API_PREFIX,
            config('salesforce.api_version'),
            static::$objectApiName,
            $this->Id
        );
        return self::guzzleRequest('delete', $url);
    }

    /**
     * @param string[] $ids
     * @param bool $allOrNone
     * @return mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public static function deleteMultiple(array $ids, bool $allOrNone = false)
    {
        $url = sprintf(
            '%s%s/composite/sobjects',
            self::$API_PREFIX,
            config('salesforce.api_version')
        );
        return self::guzzleRequest('delete', $url, [
            'query' => [
                'ids' => implode(',', $ids),
                'allOrNone' => $allOrNone,
            ],
        ]);
    }

    /**
     * === === === === ===
     * Type conversion
     * === === === === ===
     */
    /**
     * @param array $record
     * @return array
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     */
    protected function decode(array $record): array
    {
        unset($record['attributes']);
        foreach ($record as $key => &$value) {
            if ($value !== null && !empty($this->defaultFields[$key])) {
                $value = BaseConversion::decode($this->defaultFields[$key], $value);
            }
            if (!empty($value) && array_key_exists($key, $this->query['resolve'])) {
                $class = $this->query['resolve'][$key];
                $value = array_map(function ($item) use ($class) {
                    return new $class($item, true);
                }, $value['records']);
            }
        }
        return $record;
    }

    /**
     * @param array $record
     * @return array
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     */
    protected function encode(array $record): array
    {
        foreach ($record as $key => &$value) {
            if ($value !== null && !empty($this->defaultFields[$key])) {
                $value = BaseConversion::encode($this->defaultFields[$key], $value);
            }
        }
        return $record;
    }
}
