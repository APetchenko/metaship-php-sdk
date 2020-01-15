<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Recipient;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest;

/**
 * Class CreateRecipientRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Recipient
 */
class CreateRecipientRequest
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstName")
     * @var string
     */
    public $firstName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("middleName")
     * @var string
     */
    public $middleName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastName")
     * @var string
     */
    public $lastName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $phone;

    /**
     * @Serializer\SerializedName("additionalPhones")
     * @Serializer\Type("array<string>")
     * @var array
     */
    public $additionalPhones;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $email;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pickupPointId")
     * @var int
     */
    public $pickupPointId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pickupPointServiceNumber")
     * @var string
     */
    public $pickupPointServiceNumber;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest")
     * @var CreateAddressRequest
     */
    public $address;

}
