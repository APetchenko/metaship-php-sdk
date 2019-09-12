<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetSearchOrdersRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class GetSearchOrdersRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/search/orders';
    const METHOD = 'GET';

    /**
     * @Serializer\SerializedName("shopNumber")
     * @Serializer\Type("array")
     * @var array
     */
    public $shopNumber = [];

    /**
     * @Serializer\SerializedName("trackNumber")
     * @Serializer\Type("array")
     * @var array
     */
    public $trackNumber = [];

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $created;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $start = 0;

    /**
     * @Serializer\SerializedName("batchSize")
     * @Serializer\Type("integer")
     * @var int
     */
    public $batchSize = 50;
}
