<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Address;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class UpdateWarehouseAddress
 * @package MetaShipRU\MetaShipPHPSDK\Request\Address
 */
class UpdateWarehouseAddress
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $street;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $zip;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $house;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $housing;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $building;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $apartment;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;

}
