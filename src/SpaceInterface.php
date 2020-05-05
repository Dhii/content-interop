<?php
declare(strict_types=1);

namespace Dhii\Content;

use Dhii\Content\Type\TypeInterface;
use Exception;

/**
 * A content space.
 */
interface SpaceInterface
{
    /**
     * Retrieves a type for the specified code.
     *
     * @param string $code The code of the type.
     *
     * @return TypeInterface The type.
     *
     * @throws Exception If problem retrieving.
     */
    public function getType(string $code): TypeInterface;
}
