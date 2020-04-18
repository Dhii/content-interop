<?php
declare(strict_types=1);

namespace Dhii\Content\Type;

use Dhii\Content\Element\ElementInterface;
use Exception;

/**
 * A type of content.
 */
interface TypeInterface
{
    /**
     * Retrieves the type code.
     *
     * @return string The type code.
     *
     * @throws Exception If problem retrieving.
     */
    public function getCode(): string;

    /**
     * Creates an element of this type.
     *
     * @param string $id The ID for the new element.
     *
     * @return ElementInterface The new element.
     *
     * @throws Exception If problem creating.
     */
    public function createElement(string $id): ElementInterface;
}
