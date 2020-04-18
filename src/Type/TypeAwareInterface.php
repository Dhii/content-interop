<?php
declare(strict_types=1);

namespace Dhii\Content\Type;

use Exception;

/**
 * Can have a type retrieved.
 */
interface TypeAwareInterface
{
    /**
     * Retrieves the type associated with this instance.
     *
     * @return TypeInterface The type.
     *
     * @throws Exception If problem retrieving.
     */
    public function getType(): TypeInterface;
}
