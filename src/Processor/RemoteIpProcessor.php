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
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;

class RemoteIpProcessor implements ProcessorInterface
{
    /**
     * @var RemoteAddress
     */
    protected $remoteAddress;

    public function __construct(RemoteAddress $remoteAddress)
    {
        $this->remoteAddress = $remoteAddress;
    }

    public function __invoke(array $records)
    {
        $records['extra']['remote_ip'] = $this->remoteAddress->getRemoteAddress();

        return $records;
    }
}
