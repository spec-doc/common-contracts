<?php

declare(strict_types=1);

namespace SpecDoc\Specificator\Contracts\Common;

use SpecDoc\Specificator\Contracts\Common\NodeInterface;

/**
 * Interface that implements methods for the child node.
 */
interface ChildNodeInterface extends NodeInterface
{
    /**
     * Sets the node as the parent.
     *
     * @param NodeInterface $node
     */
    public function setParent(NodeInterface $node);
}
