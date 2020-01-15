<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Delivery;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Delivery\Delivery;

/**
 * Class DeliveriesResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Delivery
 */
class DeliveriesResponse
{
    /**
     * @Serializer\Inline()
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Delivery\Delivery")
     * @var Delivery
     */
    public $delivery;
}