<?php

declare(strict_types=1);

namespace SpecDoc\Specificator\Contracts\Common;

use SpecDoc\Specificator\Contracts\Common\NodeInterface;

/**
 * Interface that implements methods for the parent node.
 */
interface ParentNodeInterface extends NodeInterface
{
    /**
     * Returns a list of child nodes.
     *
     * @return iterable
     */
    public function children(): iterable;
}
