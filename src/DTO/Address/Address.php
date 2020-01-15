<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Address;

use JMS\Serializer\Annotation as Serializer;

class Address
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $city;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $street;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $house;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $region;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $zip;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $housing;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $building;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $apartment;

    /**
     * @Serializer\SerializedName("fullAddress")
     * @Serializer\Type("string")
     * @var string
     */
    public $fullAddress;
}
