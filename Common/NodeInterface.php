<?php

declare(strict_types=1);

namespace SpecDoc\Specificator\Contracts\Common;

/**
 * A common interface that implements methods for the node.
 */
interface NodeInterface
{
    /**
     * If available, returns the parent node.
     *
     * @return NodeInterface|null
     */
    public function getParent(): ?NodeInterface;
}
