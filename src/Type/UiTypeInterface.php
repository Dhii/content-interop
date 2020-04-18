<?php
declare(strict_types=1);

namespace Dhii\Content\Type;

use Dhii\Content\Element\ElementInterface;
use Dhii\Content\Element\UiElementInterface;
use Dhii\Content\Renderer\RendererInterface;

/**
 * A type of a user interface element
 */
interface UiTypeInterface extends
    TypeInterface,
    RendererInterface
{
    /**
     * @inheritDoc
     *
     * @return UiElementInterface The new element.
     */
    public function createElement(string $id): ElementInterface;
}
