<?php

namespace scraper\browsers\dom;

class NodeQueryBuilder
{
    private array $instructions = [];

    private string  $tag = '';
    private string $id = '';
    private array $class = [];

    // 1: first
    // -1: last
    private int $nodeNumber = 1;
    private NodeQueryBuilder $parent;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param array $class
     */
    public function setClass(array $class): void
    {
        $this->class = $class;
    }

    /**
     * @return int
     */
    public function getNodeNumber(): int
    {
        return $this->nodeNumber;
    }

    /**
     * @param int $nodeNumber
     */
    public function setNodeNumber(int $nodeNumber): void
    {
        $this->nodeNumber = $nodeNumber;
    }

    /**
     * @return NodeQueryBuilder
     */
    public function getParent(): NodeQueryBuilder
    {
        return $this->parent;
    }

    /**
     * @param NodeQueryBuilder $parent
     */
    public function setParent(NodeQueryBuilder $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     */
    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

}
