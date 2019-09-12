<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Vat;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetVatsRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Vat
 */
class GetVatsRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/vats';
    const METHOD = 'GET';
}
