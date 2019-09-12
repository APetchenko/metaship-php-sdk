<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Shop;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Warehouse
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Shop
 */
class Shop
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("url")
     * @var string
     */
    public $url;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("phone")
     * @var int
     */
    public $phone;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("serviceNumber")
     * @var string
     */
    public $serviceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created")
     * @var string
     */
    public $created;
}
