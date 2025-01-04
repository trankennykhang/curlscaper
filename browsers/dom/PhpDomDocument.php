<?php

namespace scraper\browsers\dom;

use scraper\browsers\IVirtualHtmlDom;

class PhpDomDocument implements IVirtualHtmlDom
{

    private \DOMDocument $dom;
    public function __construct(string $html)
    {
        $this->dom = new \DOMDocument();
        $this->dom->loadHTML($html);
    }

    public function getNode(NodeQueryBuilder $builder): mixed
    {
        // TODO: Implement getForm() method.
        $list = $this->transform($builder);
        if (!empty($list)) {
            $node = $this->dom->{$list['function']}($list['param']);
            if ($list['type'] == 'node') {
                return $node;
            } else {
                return $node->item(0);
            }
        }
        return null;
    }
    private function transform(NodeQueryBuilder $builder) : array
    {
        $arr = [];
        if ($builder->getID() != '') {
            return ['param' => $builder->getID(), 'function' => 'getElementById', 'type' => true];
        }
        if ($builder->getTag() != '') {
            return ['param' => $builder->getTag(), 'function' => 'getElementsByTagName', 'type' => false];
        }
        return [];
    }
}
