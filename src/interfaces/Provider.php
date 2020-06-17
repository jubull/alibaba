<?php

namespace jubull\alibaba\interfaces;

use jubull\alibaba\core\Container;

/**
 * Interface Provider
 * @package jubull\alibaba\interfaces
 */
interface Provider
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container);
}
