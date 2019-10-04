<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use JMS\Serializer\Annotation as Serializer;
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
     * @Serializer\SerializedName("shopServiceCode")
     * @var string
     */
    public $shopServiceCode;

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
     * @Serializer\Type("float")
     * @Serializer\SerializedName("prepaidValue")
     * @var float
     */
    public $prepaidValue;

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
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tariffId")
     * @var float
     */
    public $tariffId;

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
}
