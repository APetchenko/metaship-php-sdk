<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetSearchPickupPointRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class GetSearchPickupPointRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/search/pickuppoint';
    const METHOD = 'GET';

    /**
     * @Serializer\SerializedName("serviceNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $serviceNumber;

    /**
     * @Serializer\SerializedName("externalDeliveryCode")
     * @Serializer\Type("string")
     * @var string
     */
    public $externalDeliveryCode;
}
