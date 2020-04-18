<?php
declare(strict_types=1);

namespace Dhii\Content\Element;

use Dhii\Content\Type\TypeInterface;
use Dhii\Content\Type\UiTypeInterface;
use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Util\String\LabelAwareInterface;

/**
 * An element of the user interface.
 */
interface UiElementInterface extends
    ElementInterface,
    LabelAwareInterface,
    DescriptionAwareInterface
{
    /**
     * Retrieves the element's type.
     *
     * @return UiTypeInterface The type.
     */
    public function getType(): TypeInterface;
}
