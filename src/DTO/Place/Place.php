<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Place;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Place
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Place
 */
class Place
{
    /**
     * @Serializer\SerializedName("shopServiceNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $shopServiceNumber;

    /**
     * @Serializer\SerializedName("deliveryServiceNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $deliveryServiceNumber;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $width;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $length;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $height;
}