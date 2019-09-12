<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Intake;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetIntakeRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Intake
 */
class GetIntakeRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/intakes';
    const METHOD = 'GET';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}
