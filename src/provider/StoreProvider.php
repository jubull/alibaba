<?php

namespace jubull\alibaba\provider;

use jubull\alibaba\core\Container;
use jubull\alibaba\functions\order\Order;
use jubull\alibaba\functions\order\Refund;
use jubull\alibaba\interfaces\Provider;

/**
 * Class StoreProvider
 * @package jubull\alibaba\provider
 */
class StoreProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['order']  = function ($container) {
            return new Order($container);
        };
        $container['refund'] = function ($container) {
            return new Refund($container);
        };
    }
}
