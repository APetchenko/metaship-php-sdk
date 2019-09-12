<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Dictionary;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Vat
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Dictionary
 */
class Vat
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $code;

    /**
     * @Serializer\SerializedName("valuePrint")
     * @Serializer\Type("string")
     * @var string
     */
    public $valuePrint;

    /**
     * @Serializer\SerializedName("valueNum")
     * @Serializer\Type("integer")
     * @var int
     */
    public $valueNum;
}
