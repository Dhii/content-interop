<?php
declare(strict_types=1);

namespace Dhii\Content\Element;

use Dhii\Content\Type\TypeInterface;
use Exception;

/**
 * Can create an element.
 */
interface ElementFactoryInterface
{
    /**
     * Creates an element.
     *
     * @param string        $id       The element ID.
     * @param TypeInterface $type     The element type.
     * @param iterable      $children The children of the element.
     *
     * @return ElementInterface The new element.
     *
     * @throws Exception If problem creating.
     */
    public function createElement(
        string $id,
        TypeInterface $type,
        iterable $children
    ): ElementInterface;
}
