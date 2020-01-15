<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Item\Item;
use MetaShipRU\MetaShipPHPSDK\DTO\Place\Place;
use MetaShipRU\MetaShipPHPSDK\DTO\Recipient\Recipient;
use MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatus;
use MetaShipRU\MetaShipPHPSDK\DTO\Transaction\Transaction;

/**
 * Class Order
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Order
 */
class Order
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("trackNumber")
     * @var string
     */
    public $trackNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopNumber")
     * @var string
     */
    public $shopNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryType")
     * @var string
     */
    public $deliveryType;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("deliveryCost")
     * @var float
     */
    public $deliveryCost;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("statusName")
     * @var string
     */
    public $statusName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $status;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $created;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Recipient\Recipient")
     * @var Recipient
     */
    public $recipient;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Item\Item>")
     * @var Item[]
     */
    public $items;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fulfillmentServiceNumber")
     * @var string
     */
    public $fulfillmentServiceNumber;

    /**
     * @Serializer\SerializedName("totalCost")
     * @Serializer\Type("float")
     * @var float
     */
    public $totalCost;

    /**
     * @Serializer\SerializedName("paymentSum")
     * @Serializer\Type("float")
     * @var float
     */
    public $paymentSum;

    /**
     * @Serializer\SerializedName("assessedValue")
     * @Serializer\Type("float")
     * @var float
     */
    public $assessedValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("desiredDeliveryDate")
     * @var string
     */
    public $desiredDeliveryDate;

    /**
     * @Serializer\SerializedName("timeFrom")
     * @Serializer\Type("string")
     * @var string
     */
    public $timeFrom;

    /**
     * @Serializer\SerializedName("timeTo")
     * @Serializer\Type("string")
     * @var string
     */
    public $timeTo;

    /**
     * @Serializer\SerializedName("externalCreated")
     * @Serializer\Type("string")
     * @var string
     */
    public $externalCreated;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Place\Place>")
     * @var Place[]
     */
    public $places;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatus>")
     * @Serializer\SerializedName("statusHistory")
     * @var OrderStatus[]
     */
    public $statusHistory;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $weight;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    public $width;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    public $length;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    public $height;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Transaction\Transaction>")
     * @var Transaction[]
     */
    public $transactions;
}
