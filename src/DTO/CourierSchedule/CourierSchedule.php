<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\CourierSchedule;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CourierSchedule
 * @package MetaShipRU\MetaShipPHPSDK\DTO\CourierSchedule
 */
class CourierSchedule
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
    public $from;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $to;
}
