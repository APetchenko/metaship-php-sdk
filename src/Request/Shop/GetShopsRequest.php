<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Shop;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetShopsRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Shop
 */
class GetShopsRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/shops';
    const METHOD = 'GET';
}
