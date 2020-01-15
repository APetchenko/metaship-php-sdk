<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Shipment;

use JMS\Serializer\Annotation as Serializer;

final class Shipment
{
    public const STATUS__ARRIVAL_CONFIRM = 'arrival_confirmed';
    public const STATUS__ARRIVED = 'arrived';
    public const STATUS__CREATED = 'created';
    public const STATUS__CREATION_ERROR = 'creation_error';

    public const STATUS_FIELD = 'status';

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $id;

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
     * @Serializer\SerializedName("externalId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $externalId;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $status;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Shipment\ShipmentStatus>")
     *
     * @var ShipmentStatus[]
     */
    private $statuses;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $data;

    public function getId(): int
    {
        return $this->id;
    }

    public function getShop(): string
    {
        return $this->shop;
    }

    public function getDelivery(): string
    {
        return $this->delivery;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return ShipmentStatus[]
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
