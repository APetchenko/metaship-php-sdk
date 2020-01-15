<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Response\Shipment;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Shipment\Shipment;

final class ShipmentResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Shipment\Shipment")
     *
     * @var Shipment
     */
    public $shipment;
}
