<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class UpdateBatchWarehousesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Warehouse
 */
class UpdateBatchWarehousesRequest
{
    use RequestCore;

    const PATH = '/v1/batch/warehouses';
    const METHOD = 'PUT';

    /**
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\Request\Warehouse\UpdateWarehouseRequest>")
     * @var UpdateWarehouseRequest[]
     */
    public $warehouses;
}