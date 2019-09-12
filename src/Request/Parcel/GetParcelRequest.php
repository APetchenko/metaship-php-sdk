<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Parcel;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetParcelRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Parcel
 */
class GetParcelRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/parcels';
    const METHOD = 'GET';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}
