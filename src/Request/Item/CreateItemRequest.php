<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Item;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateItemRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Item
 */
class CreateItemRequest
{
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
     * @Serializer\Type("integer")
     * @var int
     */
    public $quantity;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vendorCode")
     * @var string
     */
    public $vendorCode;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $weight;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vatCode")
     * @var string
     */
    public $vatCode;

    /**
     * @Serializer\Type("array<string>")
     *
     * @var array
     */
    public $barcodes;
}
