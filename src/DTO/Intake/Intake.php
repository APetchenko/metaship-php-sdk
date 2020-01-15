<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Intake;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\CourierSchedule\CourierSchedule;
use MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse;

/**
 * Class Intake
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Intake
 */
class Intake
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\SerializedName("deliveryServiceNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $deliveryServiceNumber;

    /**
     * @Serializer\SerializedName("shipmentDate")
     * @Serializer\Type("string")
     * @var string
     */
    public $shipmentDate;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $volume;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $weight;

    /**
     * @Serializer\SerializedName("seatsCount")
     * @Serializer\Type("integer")
     * @var int
     */
    public $seatsCount;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;

    /**
     * @Serializer\SerializedName("warehouseFrom")
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse")
     * @var Warehouse
     */
    public $warehouseFrom;

    /**
     * @Serializer\SerializedName("warehouseTo")
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse")
     * @var Warehouse
     */
    public $warehouseTo;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\CourierSchedule\CourierSchedule")
     * @var CourierSchedule
     */
    public $schedule;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $created;

    /**
     * @Serializer\SerializedName("shopServiceNumber")
     * @Serializer\Type("string")
     * @var string
     */
    public $shopServiceNumber;
}
