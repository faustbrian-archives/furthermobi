<?php

/*
 * This file is part of FurtherMobi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\FurtherMobi\API;

use BrianFaust\Http\HttpResponse;

class Offers extends AbstractAPI
{
    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->client->get('offers/offers.json', $parameters);
    }
}
