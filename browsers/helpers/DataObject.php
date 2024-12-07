<?php

namespace scraper\browsers\helpers;

abstract class DataObject implements \ArrayAccess
{
    private array $arr = [];
    public function __construct()
    {

    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "";
    }
    public function __get(string $name)
    {
        // TODO: Implement __get() method.
        if (isset($this->arr[$name]))
            return $this->arr[$name];
        return false;
    }
    public function __set(string $name, $value): void
    {
        // TODO: Implement __set() method.
        $this->arr[$name] = $value;
    }
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->arr[$offset]);
    }
    public function offsetGet(mixed $offset): mixed
    {
        return $this->arr[$offset];
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->arr[$offset] = $value;
    }
    public function offsetUnset(mixed $offset): void
    {
        unset($this->arr[$offset]);
    }

}