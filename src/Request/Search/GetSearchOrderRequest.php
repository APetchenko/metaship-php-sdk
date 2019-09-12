<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetSearchOrderRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class GetSearchOrderRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/search/order';
    const METHOD = 'GET';

    /**
     * @Serializer\SerializedName("shopNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $shopNumber;
}
