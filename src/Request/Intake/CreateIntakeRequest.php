<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Intake;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CreateIntakeRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Intake
 */
class CreateIntakeRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/intakes';
    const METHOD = 'POST';

    /**
     * @Serializer\Type("float")
     *
     * @var float
     */
    public $volume;

    /**
     * @Serializer\Type("float")
     *
     * @var float
     */
    public $weight;

    /**
     * @Serializer\SerializedName("seatsCount")
     * @Serializer\Type("integer")
     *
     * @var int
     */
    public $seatsCount;

    /**
     * @Serializer\SerializedName("scheduleId")
     * @Serializer\Type("integer")
     * @var int
     */
    public $scheduleId;

    /**
     * @Serializer\SerializedName("deliveryName")
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $deliveryName;

    /**
     * @Serializer\SerializedName("shipmentDate")
     * @Serializer\Type("string")
     * @var string
     */
    public $shipmentDate;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;
}
