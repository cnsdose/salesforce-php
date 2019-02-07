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
use CNSDose\Salesforce\Support\Conversion\BaseConversion;
use CNSDose\Standards\Exceptions\StandardException;
use GuzzleHttp\Client as GuzzleClient;
use Psr\Http\Message\ResponseInterface;

class BaseModel extends \CNSDose\Standards\Models\BaseModel
{
    protected $preserveOriginalName = true;
    /**
     * === === === === ===
     * Object configurations
     * === === === === ===
     */
    protected static $objectApiName = 'BaseModel';
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
            parent::__construct($this->decode([$data])[0]);
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
     * Authentication
     * === === === === ===
     */
    protected static $API_PREFIX = 'https://ap8.salesforce.com/services/data/';
    protected static $ACCESS_TOKEN;

    /**
     * @return string
     */
    protected static function getAccessToken(): string
    {
        if (isset(self::$ACCESS_TOKEN)) {
            return self::$ACCESS_TOKEN;
        }
        $guzzleClient = new GuzzleClient();
        $response = $guzzleClient->post(config('salesforce.authentication_url'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => config('salesforce.client_id'),
                'client_secret' => config('salesforce.client_secret'),
                'username' => config('salesforce.username'),
                'password' => sprintf('%s%s', config('salesforce.password'), config('salesforce.security_token')),
            ],
        ]);
        $body = json_decode($response->getBody(), true);
        self::$ACCESS_TOKEN = $body['access_token'];
        return self::$ACCESS_TOKEN;
    }

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
                'Authorization' => 'Bearer ' . self::getAccessToken(),
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
    ];
    protected $rawQuery;
    protected static $COMPARISON_OPERATORS = ['=', '!=', '<', '<=', '>', '>=', 'LIKE', 'IN', 'NOT IN', 'INCLUDES', 'EXCLUDES'];

    public static function build(): self
    {
        $model = static::class;
        return new $model();
    }

    /**
     * @param string|string[]|BaseModel|BaseModel[]|mixed|mixed[] $fields
     * @return $this
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
     * @return $this
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
     * @param null|string|BaseModel|mixed $operator
     * @param null|string|BaseModel|mixed $value
     * @return $this
     */
    public function where(string $field, $operator = null, $value = null): self
    {
        if (is_string($field) && $operator === null && $value === null) {
            $this->query['where']['AND'][] = $field;
        }
        if ($value === null && ($operator === null
                || (is_string($operator) && !in_array(strtoupper($operator), self::$COMPARISON_OPERATORS, true)))
        ) {
            $value = $operator;
            $operator = '=';
        }
        $this->query['where']['AND'][] = [$field, $operator, $value];
        return $this;
    }

    /**
     * @param string $field
     * @param null|string|BaseModel|mixed $operator
     * @param null|string|BaseModel|mixed $value
     * @return $this
     */
    public function orWhere(string $field, $operator, $value = null): self
    {
        if (is_string($field) && $operator === null && $value === null) {
            $this->query['where']['OR'][] = $field;
        }
        if ($value === null && ($operator === null
                || (is_string($operator) && !in_array(strtoupper($operator), self::$COMPARISON_OPERATORS, true)))
        ) {
            $value = $operator;
            $operator = '=';
        }
        $this->query['where']['OR'][] = [$field, $operator, $value];
        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function limit(int $limit)
    {
        $this->query['limit'] = $limit;
        return $this;
    }

    /**
     * @param int $offset
     * @return $this
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
     * @return $this
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
             * @var string|BaseModel $select
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
                    list($field, $operator, $value) = $clause;
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
                    list($field, $operator, $value) = $clause;
                    if (is_object($value)) {
                        return sprintf('%s %s (%s)', $field, $operator, $value->toSoql());
                    }
                    return sprintf('%s %s %s', $field, $operator, $value ?? 'NULL');
                }, $this->query['where']['OR']));
            }
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
     * @return array
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    protected function queryFromBuilder(): array
    {
        $url = sprintf('%s%s/query/', self::$API_PREFIX, config('salesforce.api_version'));
        return self::guzzleRequest('get', $url, [
            'query' => ['q' => $this->toSoql()],
        ]);
    }

    /**
     * @return mixed
     * @throws \CNSDose\Salesforce\Exceptions\AuthorisationException
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     * @throws \CNSDose\Salesforce\Exceptions\MalformedRequestException
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public function query(): array
    {
        $json = $this->queryFromBuilder();
        $decoded = $this->decode($json['records']);
        return array_map(function ($data) {
            return new static($data);
        }, $decoded);
    }

    /**
     * @param string $soql
     * @return array
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public function queryRaw(string $soql): array
    {
        $this->rawQuery = $soql;
        if (static::class === self::class) {
            return $this->queryFromBuilder();
        }
        return $this->query();
    }

    /**
     * Fetches single object, populates all fields regardless of whether they're pre-defined in class/configuration or not
     *
     * @param string $id
     * @return BaseModel|mixed
     * @throws AuthorisationException
     * @throws MalformedRequestException
     * @throws StandardException
     */
    public static function queryById(string $id)
    {
        if (static::class === self::class) {
            throw new StandardException(500, 'Do not useBaseModel::queryById()');
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
        $record = $this->encode([$this->raw()])[0];
        $response = self::guzzleRequest('post', $url, [
            'json' => $record,
        ]);
        if ($response['success']) {
            $this->Id = $response['id'];
        }
        return $response;
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

        $record = array_intersect_key($this->encode([$this->raw()])[0], array_flip(array_unique($this->changedFields)));
        $response = self::guzzleRequest('patch', $url, [
            'json' => $record,
        ]);
        if ($response['success']) {
            $this->Id = $response['id'];
        }
        return $response;
    }

    /**
     * === === === === ===
     * Type conversion
     * === === === === ===
     */
    /**
     * @param array $records
     * @return array
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     */
    protected function decode(array $records): array
    {
        foreach ($records as &$record) {
            unset($record['attributes']);
        }
        unset($record);
        foreach ($records as &$record) {
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
        }
        return $records;
    }

    /**
     * @param array $records
     * @return array
     * @throws \CNSDose\Salesforce\Exceptions\ConversionException
     */
    protected function encode(array $records): array
    {
        foreach ($records as &$record) {
            foreach ($record as $key => &$value) {
                if ($value !== null && !empty($this->defaultFields[$key])) {
                    $value = BaseConversion::encode($this->defaultFields[$key], $value);
                }
            }
        }
        return $records;
    }
}
