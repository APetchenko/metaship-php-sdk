<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetSearchWarehousesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class GetSearchWarehousesRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/search/warehouses';
    const METHOD = 'GET';

    /**
     * @Serializer\SerializedName("shopNumbers")
     * @Serializer\Type("array")
     * @var array
     */
    public $shopNumbers = [];
}
