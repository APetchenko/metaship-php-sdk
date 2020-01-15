<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Transaction;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Transaction
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Transaction
 */
final class Transaction
{
    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $id;

    /**
     * @Serializer\SerializedName("externalId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $externalId;

    /**
     * @Serializer\SerializedName("dateTime")
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $dateTime;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $amount;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    public $data;
}
