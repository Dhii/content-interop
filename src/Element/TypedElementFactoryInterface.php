<?php
declare(strict_types=1);

namespace Dhii\Content\Element;

use Exception;

/**
 * Can create an element.
 */
interface TypedElementFactoryInterface
{
    /**
     * Creates an element based on type.
     *
     * @param string $typeCode The code of the element's type.
     *
     * @return ElementInterface The new element.
     *
     * @throws Exception If problem creating.
     */
    public function createElementFromTypeCode(string $typeCode): ElementInterface;
}
