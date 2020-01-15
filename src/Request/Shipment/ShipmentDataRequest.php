<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Shipment;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentDataRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments';
    public const METHOD = 'POST';

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $shop;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $delivery;

    /**
     * @Serializer\SerializedName("shipmentId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $shipmentId;

    /**
     * @var array
     */
    private $data;

    public function getShop(): string
    {
        return $this->shop;
    }

    public function getDelivery(): string
    {
        return $this->delivery;
    }

    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
