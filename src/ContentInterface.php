<?php
declare(strict_types=1);

namespace Dhii\Content;

use Dhii\Content\Type\TypeInterface;
use Exception;
use RangeException;

/**
 * Represents the entrypoint into the content flow.
 */
interface ContentInterface
{
    /**
     * Retrieve a type for the specified code.
     *
     * @param string $typeCode The code to retrieve the type for.
     *
     * @return TypeInterface The type.
     *
     * @throws RangeException If no type defined for code.
     * @throws Exception If problem retrieving.
     */
    public function type(string $typeCode): TypeInterface;
}
