<?php


namespace jubull\alibaba\provider;


use jubull\alibaba\core\Container;
use jubull\alibaba\functions\order\Logistics;
use jubull\alibaba\functions\product\Product;
use jubull\alibaba\interfaces\Provider;

class ProductProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['product']   = function ($container) {
            return new Product($container);
        };
        $container['logistics'] = function ($container) {
            return new Logistics($container);
        };
    }
}