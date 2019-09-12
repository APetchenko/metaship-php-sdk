<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Intake;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetIntakesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Intake
 */
class GetIntakesRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/intakes';
    const METHOD = 'GET';
}
