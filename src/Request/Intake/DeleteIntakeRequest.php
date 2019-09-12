<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Intake;
use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class DeleteIntakeRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Intake
 */
class DeleteIntakeRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/intakes';
    const METHOD = 'DELETE';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}
