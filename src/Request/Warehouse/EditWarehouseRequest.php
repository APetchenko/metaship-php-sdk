<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\Address\UpdateWarehouseAddress;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class EditWarehouseRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Warehouse
 */
class EditWarehouseRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/warehouses';
    const METHOD = 'PUT';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contactPerson")
     * @var string
     */
    public $contactPerson;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("phone")
     * @var int
     */
    public $phone;

    /**
     * @Serializer\SerializedName("address")
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\Request\Address\UpdateWarehouseAddress")
     * @var UpdateWarehouseAddress
     */
    public $address;
}
