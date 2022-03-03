<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wizart\Tech\Twig;
use Wizart\Tech\Controller\WizartController;

use Twig\Environment;
use Twig\TwigFunction;
use Twig\Extension\GlobalsInterface;
use Twig\Extension\AbstractExtension;

/**
 * @author Marco Meyer <marco.meyerconde@gmail.com>
 *
 * @final
 * @experimental
 */

use Symfony\Component\DependencyInjection\Container;

class WizartTwigExtension extends AbstractExtension
{
    public function __construct() {

        /* Add some Google Analytics summary twig functions, globals or filters? */
    }
}
