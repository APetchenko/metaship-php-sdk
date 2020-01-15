<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule;
use MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest;

/**
 * Class UpdateWarehouseRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Warehouse
 */
class UpdateWarehouseRequest
{
    /**
     * @Serializer\SerializedName("shopServiceNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $shopServiceNumber;

    /**
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest")
     * @var CreateAddressRequest
     */
    public $address;

    /**
     * @Serializer\SerializedName("contactPerson")
     * @Serializer\Type("string")
     * @var string
     */
    public $contactPerson;

    /**
     * @Serializer\SerializedName("phone")
     * @Serializer\Type("string")
     * @var string
     */
    public $phone;

    /**
     * @Serializer\SerializedName("schedules")
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule>")
     * @var Schedule[]
     */
    public $schedules;

    /**
     * @Serializer\SerializedName("deliveryName")
     * @Serializer\Type("string")
     * @var string
     */
    public $deliveryName;

}
