<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\City;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class GetCitiesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\City
 */
class GetCitiesRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/cities';

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("start")
     * @var int
     */
    public $start;
}
