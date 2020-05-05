<?php
declare(strict_types=1);

namespace Dhii\Content\Element;

use Dhii\Content\Type\TypeAwareInterface;
use Dhii\Data\IdAwareInterface;
use Exception;

/**
 * An element of content.
 */
interface ElementInterface extends
    IdAwareInterface,
    TypeAwareInterface
{
    /**
     * Retrieves the child elements of this element.
     *
     * @return iterable|ElementInterface[] The element's children.
     *
     * @throws Exception If problem retrieving.
     */
    public function getChildren(): iterable;

    /**
     * Creates a new instance with the type corresponding to the specified code.
     *
     * @param string $code The type code.
     *
     * @return static A new instance of the same element.
     */
    public function withType(string $code);

    /**
     * Creates a new instance with the specified ID.
     *
     * @param string $id The ID for the new element.
     *
     * @return static A new instance of the same element.
     *
     * @throws Exception If problem creating.
     */
    public function withId(string $id);

    /**
     * Creates a new instance with the specified children.
     *
     * @param iterable|ElementInterface[] $children The children for the new element.
     *
     * @return static A new instance of the same element.
     *
     * @throws Exception If problem creating.
     */
    public function withChildren(iterable $children);

    /**
     * Creates a new instance with the specified children added to existing ones.
     *
     * @param iterable $children The additional children for the new element.
     *
     * @return static A new instance of the same element.
     *
     * @throws Exception If problem creating.
     */
    public function withAddedChildren(iterable $children);
}
