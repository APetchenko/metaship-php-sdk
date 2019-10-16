<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Schedule;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CourierSchedule
 * @package MetaShipRU\MetaShipPHPSDK\DTO\CourierSchedule
 */
class CourierSchedule
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $date;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeFrom")
     * @var string
     */
    public $timeFrom;
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeTo")
     * @var string
     */
    public $timeTo;
}
