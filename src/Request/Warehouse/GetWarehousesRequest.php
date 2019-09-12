<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetWarehousesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Warehouse
 */
class GetWarehousesRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/warehouses';
    const METHOD = 'GET';
}
