<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\City;

use JMS\Serializer\Annotation as Serializer;

class City
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fullName")
     * @var string
     */
    public $fullName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $region;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $district;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $prefix;

    /**
     * @Serializer\SerializedName("kladrId")
     * @Serializer\Type("string")
     * @var string
     */
    public $kladrId;

    /**
     * @Serializer\SerializedName("fiasId")
     * @Serializer\Type("string")
     * @var string
     */
    public $fiasId;

    /**
     * @Serializer\SerializedName("combinedName")
     * @Serializer\Type("string")
     * @var string
     */
    public $combinedName;
}
