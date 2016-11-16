<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Polyfill\Php71;

/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 */
final class Php71
{
    /**
     * is_iterable php71 function
     *
     * @param $var
     * @return bool
     */
    public static function is_iterable($var)
    {
        return is_array($var) || $var instanceof \Traversable;
    }
}
