<?php
declare(strict_types=1);

namespace Dhii\Content\Element;

/**
 * Can create user interface elements based on type.
 */
interface TypedUiElementFactoryInterface extends TypedElementFactoryInterface
{
    /**
     * @inheritDoc
     *
     * @return UiElementInterface The new element.
     */
    public function createElementFromTypeCode(string $typeCode): ElementInterface;
}
