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

use Monolog\LogRecord;
use Monolog\Processor\ProcessorInterface;

class UrlProcessor implements ProcessorInterface
{
    public function __invoke(LogRecord $record)
    {
        if (isset($_SERVER['REQUEST_METHOD']) && isset($_SERVER['REQUEST_URI'])) {
            $record->extra['url'] = $_SERVER['REQUEST_METHOD'] . ' ' . $_SERVER['REQUEST_URI'];
        }

        return $record;
    }
}
