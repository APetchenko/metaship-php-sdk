<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Parcel;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetParcelsRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Parcel
 */
class GetParcelsRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/parcels';
    const METHOD = 'GET';

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $serviceNumber;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $shopNumbers;

    /**
     * @var string
     */
    public $orderIds;

    /**
     * @var string
     */
    public $orderServiceNumbers;

    /**
     * @var int
     */
    public $start;
}
