<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 12/9/18
 * Time: 2:55 PM
 */

namespace CNSDose\Salesforce\Models;

/**
 * Lightweight, framework-independent base class for models that do not interact with databases
 * Class BaseModel
 * @package CNSDose\Standards\Models
 */
abstract class BaseModel
{
    /**
     * Hash table, values may only be placeholders because of accessors
     * @var array
     */
    protected $attributes = [];
    /**
     * Do not normalise attribute names using snake case rule
     * @var bool
     */
    protected $preserveOriginalName = false;

    public function __construct(array $data = null)
    {
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function __get($name)
    {
        $accessor = 'get_' . $this->snakeCase($name);
        if (method_exists($this, $accessor)) {
            return $this->$accessor();
        }
        return $this->attributes[$this->snakeCase($name)] ?? null;
    }

    public function __set($name, $value)
    {
        $mutator = 'set_' . $this->snakeCase($name);
        if (method_exists($this, $mutator)) {
            // an additional bool parameter ($toRemove = false) is provided
            $this->$mutator($value, false);
        } else {
            $this->attributes[$this->snakeCase($name)] = $value;
        }
    }

    public function __unset($name)
    {
        $mutator = 'set_' . $this->snakeCase($name);
        if (method_exists($this, $mutator)) {
            // an additional bool parameter ($toRemove = true) is provided
            $this->$mutator(null, true);
        } else {
            unset($this->attributes[$this->snakeCase($name)]);
        }
    }

    public function __isset($name): bool
    {
        return $this->$name !== null;
    }

    public function __clone()
    {
        foreach (get_object_vars($this) as $key => $value) {
            $this->$key = $this->cloneRecursively($value);
        }
    }

    /**
     * @param mixed $item
     * @return mixed
     */
    private function cloneRecursively($item)
    {
        if (\is_object($item)) {
            return clone $item;
        }
        if (\is_array($item)) {
            return array_map([self::class, 'cloneRecursively'], $item);
        }
        return $item;
    }

    public function toArray(): array
    {
        $result = [];
        foreach (array_keys($this->attributes) as $key) {
            if (method_exists($this, 'get_' . $this->snakeCase($key))) {
                continue;
            }
            $result[$key] = $this->toArrayRecursively($this->$key);
        }
        foreach (get_class_methods(\get_class($this)) as $method) {
            if (preg_match('/^get_(.+)$/', $method, $matches)) {
                $key = $matches[1];
                $result[$key] = $this->toArrayRecursively($this->{$matches[0]}());
            }
        }
        return $result;
    }

    /**
     * @param mixed $item
     * @return mixed
     */
    private function toArrayRecursively($item)
    {
        if (\is_object($item) && method_exists($item, 'toArray')) {
            return $item->toArray();
        }
        if (\is_array($item)) {
            return array_map([self::class, 'toArrayRecursively'], $item);
        }
        return $item;
    }

    public function &raw(): array
    {
        return $this->attributes;
    }

    protected function snakeCase($name): string
    {
        if ($this->preserveOriginalName) {
            return $name;
        }
        return strtolower(preg_replace('/[^A-Z0-9]+/i', '_', $name));
    }
}
