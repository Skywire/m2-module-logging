<?php

/**
 * Copyright Skywire. All rights reserved.
 * See LICENSE.txt for license details.
 *
 * @author      Skywire Core Team
 * @copyright   Copyright (c) 2021 Skywire (http://www.skywire.co.uk)
 */
declare(strict_types=1);

namespace Skywire\Logger\Processor;

use Monolog\Processor\ProcessorInterface;

class UrlProcessor implements ProcessorInterface
{
    public function __invoke(array $records)
    {
        $records['extra']['url'] = $_SERVER['REQUEST_METHOD'] . ' ' . $_SERVER['REQUEST_URI'];

        return $records;
    }
}
