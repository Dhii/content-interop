<?php
declare(strict_types=1);

namespace Dhii\Content\Renderer;

use Dhii\Content\Element\ElementInterface;
use Dhii\Util\String\StringableInterface;

/**
 * Can render an element.
 */
interface RendererInterface
{
    /**
     * Renders an element.
     *
     * @param ElementInterface $element The element to render.
     *
     * @return StringableInterface The result of rendering.
     */
    public function renderElement(ElementInterface $element): StringableInterface;
}
