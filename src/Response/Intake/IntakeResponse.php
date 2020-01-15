<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Intake;

use MetaShipRU\MetaShipPHPSDK\DTO\Intake\Intake;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class IntakeResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Intake
 */
class IntakeResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Intake\Intake")
     * @var Intake
     */
    public $intake;
}