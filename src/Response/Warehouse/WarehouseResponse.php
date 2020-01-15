<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Warehouse;

use MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse;

/**
 * Class WarehouseResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Warehouse
 */
class WarehouseResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse")
     * @var Warehouse
     */
    public $warehouse;
}