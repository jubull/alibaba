<?php

namespace jubull\alibaba;

use jubull\alibaba\core\ContainerBase;
use jubull\alibaba\provider\ProductProvider;
use jubull\alibaba\provider\StoreProvider;

/**
 * Class Application
 * @property \jubull\alibaba\functions\product\Product product
 * @property \jubull\alibaba\functions\order\Order order
 * @property \jubull\alibaba\functions\order\Logistics logistics
 * @property \jubull\alibaba\functions\order\Refund refund
 */
class AlibabaClient extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
        StoreProvider::class,
        ProductProvider::class,
        //...其他服务提供者
    ];
}
