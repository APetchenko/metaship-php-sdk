<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Address\Address;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule;

/**
 * Class Warehouse
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Warehouse
 */
class Warehouse
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopServiceNumber")
     * @var string
     */
    public $shopServiceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("serviceNumber")
     * @var string
     */
    public $serviceNumber;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $phone;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $created;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contactPerson")
     * @var string
     */
    public $contactPerson;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Address\Address")
     * @var Address
     */
    public $address;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule>")
     * @Serializer\SerializedName("schedules")
     * @var Schedule[]
     */
    public $schedules;
}
