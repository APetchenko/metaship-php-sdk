<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

class SearchShipmentsRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/shipments';

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $shop;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $status;
}
