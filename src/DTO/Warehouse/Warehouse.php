<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Address\Address;

/**
 * Class Warehouse
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Warehouse
 */
class Warehouse
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
     * @Serializer\SerializedName("contactPerson")
     * @var string
     */
    public $contactPerson;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("phone")
     * @var int
     */
    public $phone;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Address\Address")
     * @var Address
     */
    public $address;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created")
     * @var string
     */
    public $created;
}
