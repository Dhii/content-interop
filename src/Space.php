<?php
declare(strict_types=1);

namespace Dhii\Content;

use Dhii\Content\Type\TypeInterface;

/**
 * A content space.
 */
interface Space
{
    /**
     * Retrieves a type for the specified code.
     *
     * @param string $code The code of the type.
     *
     * @return TypeInterface The type.
     */
    public function getType(string $code): TypeInterface;
}
