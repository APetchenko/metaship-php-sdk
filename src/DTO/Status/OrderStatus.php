<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderStatus
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 */
class OrderStatus
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $date;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("externalDate")
     * @var string
     */
    public $externalDate;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $code;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $description;
}
