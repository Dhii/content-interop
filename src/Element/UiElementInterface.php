<?php
declare(strict_types=1);

namespace Dhii\Content\Element;

use Dhii\Content\Type\TypeInterface;
use Dhii\Content\Type\UiTypeInterface;
use Dhii\Util\String\DescriptionAwareInterface;
use Dhii\Util\String\LabelAwareInterface;
use Exception;

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
     *
     * @throws Exception If problem retrieving.
     */
    public function getType(): TypeInterface;

    /**
     * Creates a new instance with the specified label.
     *
     * @param string $label The label for the new instance.
     *
     * @return static A new instance of this class.
     *
     * @throws Exception If problem creating.
     */
    public function withLabel(string $label);

    /**
     * Creates a new instance with the specified description.
     *
     * @param string $description The description for the new instance.
     *
     * @return static A new instance of this class.
     *
     * @throws Exception If problem creating.
     */
    public function withDescription(string $description);
}
