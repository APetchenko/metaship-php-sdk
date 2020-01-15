<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Response\Shipment;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Shipment\Shipment;

final class ShipmentsResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Shipment\Shipment>")
     *
     * @var Shipment[]
     */
    public $shipments;
}
