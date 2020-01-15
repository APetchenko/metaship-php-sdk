<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Shipment;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentPatchRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments';
    public const METHOD = 'PATCH';

    public const OP_REPLACE = 'replace';

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $op;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $path;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $value;

    public function getPath(int $id = null): string
    {
        return null === $id
            ? self::PATH
            : self::PATH . '/' . $id;
    }
}
