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

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    /** @var array */
    protected $options = [
        'base_uri' => 'http://aff.furthermobi.com/',
        'headers'  => [
           'User-Agent' => 'BrianFaust\FurtherMobi',
        ],
    ];

    /** @var array */
    protected $requestModifiers = [Modifiers\AuthModifier::class];

    /**
     * @param string $uri
     * @param string $path
     *
     * @return string
     */
    protected function buildRequestUri(string $uri, string $path)
    {
        return $uri;
    }
}
