<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Item;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Item
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Item
 */
class Item
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vendorCode")
     * @var string
     */
    public $vendorCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vatCode")
     * @var string
     */
    public $vatCode;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $cost;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $quantity;
}
