<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Shop;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CreateShopRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Shop
 */
class CreateShopRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/shops';
    const METHOD = 'POST';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $phone;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $url;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("serviceNumber")
     * @var string
     */
    public $serviceNumber;
}
