<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Status
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 */
class Status
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("uniqueName")
     * @var string
     */
    public $uniqueName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $date;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryServiceName")
     * @var string
     */
    public $deliveryServiceName;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\StatusItem>")
     * @var StatusItem[]
     */
    public $items;
}
