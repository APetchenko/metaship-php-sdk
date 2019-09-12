<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class GetOrderRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Order
 */
class GetOrderRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/orders';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}
