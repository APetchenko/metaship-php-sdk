<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Schedule;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Schedule
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Schedule
 */
class Schedule
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("day")
     * @var int
     */
    public $day;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeFrom")
     * @var int
     */
    public $timeFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeTo")
     * @var int
     */
    public $timeTo;
}