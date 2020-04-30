<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Address;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateAddressRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Address
 */
class CreateAddressRequest
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
    public $region;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrId")
     * @var string
     */
    public $kladrId;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $street;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $zip;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $house;

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
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fullAddress")
     * @var string
     */
    public $fullAddress;
}
