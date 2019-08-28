<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\City;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class GetZipsRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\City
 */
class GetZipsRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/zips';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cityName")
     * @var string
     */
    public $cityName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrId")
     * @var string
     */
    public $kladrId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fiasId")
     * @var string
     */
    public $fiasId;
}
