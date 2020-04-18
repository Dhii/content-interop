<?php
declare(strict_types=1);

namespace Dhii\Content\Element;

use Dhii\Util\String\TitleAwareInterface;

/**
 * An identified, labelled piece of content.
 */
interface PageInterface extends
    ElementInterface,
    TitleAwareInterface
{
}
