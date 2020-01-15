<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Place\Place;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Item\CreateItemRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Recipient\CreateRecipientRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CreateOrderRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Order
 */
class CreateOrderRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'POST';
    const PATH = '/v1/orders';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $length;

    /**
     * @Serializer\SerializedName("shopId")
     * @Serializer\Type("integer")
     * @var int
     */
    public $shopId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("warehouseId")
     * @var int
     */
    public $warehouseId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fulfillmentServiceNumber")
     * @var string
     */
    public $fulfillmentServiceNumber;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $width;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $height;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $weight;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     * @var string
     */
    public $deliveryName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $status;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopServiceCode")
     * @var string
     */
    public $shopServiceCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("warehouseServiceCode")
     * @var string
     */
    public $warehouseServiceCode;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("assessedValue")
     * @var float
     */
    public $assessedValue;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("paymentSum")
     * @var float
     */
    public $paymentSum;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("paymentMethod")
     * @var int
     */
    public $paymentMethod;

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
     * @Serializer\Type("string")
     * @Serializer\SerializedName("desiredDeliveryDate")
     * @var string
     */
    public $desiredDeliveryDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeFrom")
     * @var string
     */
    public $timeFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeTo")
     * @var string
     */
    public $timeTo;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("deliveryCost")
     * @var float
     */
    public $deliveryCost;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("prepaidValue")
     * @var float
     */
    public $prepaidValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tariffId")
     * @var string
     */
    public $tariffId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipmentDate")
     * @var string
     */
    public $shipmentDate;

    /**
     * @Serializer\Type("array<string>")
     *
     * @var array
     */
    public $services;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\Request\Recipient\CreateRecipientRequest")
     * @var CreateRecipientRequest
     */
    public $recipient;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\Request\Item\CreateItemRequest>")
     * @var CreateItemRequest[]
     */
    public $items;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Place\Place>")
     * @var Place[]
     */
    public $places;

    /**
     * @Serializer\SerializedName("created")
     * @Serializer\Type("string")
     * @var string
     */
    public $created;
}
