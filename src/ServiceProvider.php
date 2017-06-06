<?php

/*
 * This file is part of FurtherMobi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\FurtherMobi;

use BrianFaust\Unified\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    public function getIdentifier()
    {
        return 'faustbrian.furthermobi';
    }
}
