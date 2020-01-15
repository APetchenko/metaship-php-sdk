<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Product;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ProductDataRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/products';
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
     * @Serializer\SerializedName("productId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $productId;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $data;

    public function __construct(string $shop, string $delivery, string $productId, array $data)
    {
        $this->shop = $shop;
        $this->delivery = $delivery;
        $this->productId = $productId;
        $this->data = $data;
    }

    public function getShop(): string
    {
        return $this->shop;
    }

    public function getDelivery(): string
    {
        return $this->delivery;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
