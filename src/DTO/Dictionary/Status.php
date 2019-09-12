<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Dictionary;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Status
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Dictionary
 */
class Status
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $code;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $description;
}
