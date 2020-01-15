<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Warehouse;

use MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class WarehousesResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Warehouse
 */
class WarehousesResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse>")
     * @var Warehouse[]
     */
    public $warehouses;
}