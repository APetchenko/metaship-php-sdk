<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Delivery;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetDeliveriesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Delivery
 */
class GetDeliveriesRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/deliveries';
    const METHOD = 'GET';
}
