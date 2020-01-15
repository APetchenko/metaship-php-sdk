<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class SearchOrdersStatusHistoryRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class SearchOrdersStatusHistoryRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/orders/status/history';

    /**
     * @Serializer\SerializedName("fromDateTime")
     *
     * @var string
     */
    public $fromDateTime;

    /**
     * @Serializer\SerializedName("toDateTime")
     *
     * @var string
     */
    public $toDateTime;
}