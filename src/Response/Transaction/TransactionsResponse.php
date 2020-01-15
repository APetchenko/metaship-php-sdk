<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Response\Transaction;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Transaction\Transaction;

/**
 * Class TransactionsResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Transaction
 */
final class TransactionsResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Transaction\Transaction>")
     * @var Transaction[]
     */
    public $transactions;
}
