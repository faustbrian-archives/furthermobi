<?php

/*
 * This file is part of FurtherMobi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\FurtherMobi\Api;

use BrianFaust\Unified\AbstractApi;

class Offers extends AbstractApi
{
    public function findAll($parameters = [])
    {
        return $this->get('offers/offers', $parameters);
    }
}
