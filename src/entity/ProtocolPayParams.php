<?php

namespace jubull\alibaba\entity;

class ProtocolPayParams extends BaseEntityParams
{
    private $orderId;

    /**
     * ProtocolPayParams constructor.
     * @param $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }

}